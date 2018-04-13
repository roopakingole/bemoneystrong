<?php

namespace Bolt\Extension\Bcflc\ProgramManager;

use Bolt\Application;
use Bolt\Helpers\String;
use Bolt\BaseExtension;
use Bolt\Users;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Bolt\Extension\Bcflc\ProgramManager\programEventHandler;
use Bolt\Extension\Bcflc\ProgramManager\programTimeEventHandler;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\Form\FormEvent;
use Doctrine\ORM\EntityManager;
use Google\Client;

define('APPLICATION_NAME', 'Google Calendar API PHP Quickstart');
define('CREDENTIALS_PATH', '~/.credentials/calendar-php-quickstart.json');
define('CLIENT_SECRET_PATH', __DIR__ . '../client_secret.json');
// If modifying these scopes, delete your previously saved credentials
// at ~/.credentials/calendar-php-quickstart.json
//define('SCOPES', implode(' ', array(Google_Service_Calendar::CALENDAR_READONLY)));

/**
 * User interface
 *
 * @author Roopak Ingole <roopak.ingole@gmail.com>
 */
class UserInterface
{
    /** @var \Bolt\Application */
    private $app;

    /** @var array Extension config */
    private $config;

    private $twigExt;

    private $contact_success = NULL;
    private $contact_invalid_form = NULL;
    //private $program = NULL;

    public function __construct(ProgramManagerTwigExtensions $app)
    {
        $this->twigExt = $app;
        $this->app = $app->app;
        $this->config = $this->app[Extension::CONTAINER]->config;
        //$this->program = $program_id;
        // $this->app->post($this->submitUrl(), function(Request $request) { 
        //     return $this->handleForm($request); 
        // });
        //$this->app['twig.loader.filesystem']->addPath(dirname(__DIR__) . "/assets");
        //Session behaves weirdly inside the following "after" middleware, so capture needed session info here.
        $this->contact_success = $this->twigExt->getExtensionBase()->getFlash('registration_success');
        $this->contact_invalid_form = $this->twigExt->getExtensionBase()->getFlash('registration_invalid_form'); 
        $client = new Google_Client();
      
    }

    /**
     * Disply login/logout depending on auth status
     *
     * @param string $redirect
     *
     * @return Twig_Markup
     */
    public function doDisplayProgram($redirect)
    {
        // Make the query to get the results.
        $query = "SELECT * FROM bolt_custome_program";

        $rows = $this->app['db']->executeQuery($query)->fetch();
        print_r($rows);
    }

    /**
     * Renders the contact form's raw html
     *
     * @return string
     */
    public function renderProgramForm($view = NULL) {
        if(!$view) {
            $view = $this->buildForm()->createView();
        }

        //$this->app['twig.loader.filesystem']->addPath($this->getBasePath(), 'contact');

        $success = $this->contact_success;
        $invalid_form = $this->contact_invalid_form;
        $form_html = $this->app['twig']->render('@programmanager/form.twig', array(
            'success' => $success,
            'invalid_form' => $invalid_form,
            'form' => $view,
            'action' => $this->twigExt->getExtensionBase()->submitUrl(),
        ));

        return $form_html;
    }

    public function getProgramList()
    {
        // Make the query to get the results.
        $query = "SELECT name FROM bolt_custom_programs";

        $rows = $this->app['db']->executeQuery($query)->fetchall();

        $values = array('Select');

        foreach($rows as $x=>$y) {
            $values[$y["name"]] = $y["name"];
        }

        return($values);
    }

    public function getProgramDates($program_id)
    {
        $query = sprintf("select date_start from bolt_custom_programs where date_start > strftime('%%m/%%d/%%Y', date('now')) AND name = '%s'",$program_id);

        $rows = $this->app['db']->executeQuery($query)->fetchall();
        $values = array('Select'=>'Select');

        foreach($rows as $x=>$y) {
            $values[$y["date_start"]] = $y["date_start"];
        }

        //var_dump($values);
        return($values);
    }

    public function getProgramTimeSlots($program_id,$date_id=null)
    {
        $query = sprintf("select time_start,time_end from bolt_custom_programs where date_start > strftime('%%m/%%d/%%Y', date('now')) AND name = '%s'", $program_id);

        $rows = $this->app['db']->executeQuery($query)->fetchall();
        $values = array('Select'=>'Select');

        //var_dump($rows);
        foreach($rows as $x=>$y) {
            $str = sprintf("%s-%s",$y["time_start"],$y["time_end"]);
            $values[$str] = $str;
        }

        //var_dump($values);
        return($values);
    }

    public function dispProgram($redirect = false)
    {
        return $this->userinterface->doDisplayProgram($redirect);
    }

    public function buildForm() {
        $states = array(
    'AL'=>'Alabama',
    'AK'=>'Alaska',
    'AZ'=>'Arizona',
    'AR'=>'Arkansas',
    'CA'=>'California',
    'CO'=>'Colorado',
    'CT'=>'Connecticut',
    'DE'=>'Delaware',
    'DC'=>'District of Columbia',
    'FL'=>'Florida',
    'GA'=>'Georgia',
    'HI'=>'Hawaii',
    'ID'=>'Idaho',
    'IL'=>'Illinois',
    'IN'=>'Indiana',
    'IA'=>'Iowa',
    'KS'=>'Kansas',
    'KY'=>'Kentucky',
    'LA'=>'Louisiana',
    'ME'=>'Maine',
    'MD'=>'Maryland',
    'MA'=>'Massachusetts',
    'MI'=>'Michigan',
    'MN'=>'Minnesota',
    'MS'=>'Mississippi',
    'MO'=>'Missouri',
    'MT'=>'Montana',
    'NE'=>'Nebraska',
    'NV'=>'Nevada',
    'NH'=>'New Hampshire',
    'NJ'=>'New Jersey',
    'NM'=>'New Mexico',
    'NY'=>'New York',
    'NC'=>'North Carolina',
    'ND'=>'North Dakota',
    'OH'=>'Ohio',
    'OK'=>'Oklahoma',
    'OR'=>'Oregon',
    'PA'=>'Pennsylvania',
    'RI'=>'Rhode Island',
    'SC'=>'South Carolina',
    'SD'=>'South Dakota',
    'TN'=>'Tennessee',
    'TX'=>'Texas',
    'UT'=>'Utah',
    'VT'=>'Vermont',
    'VA'=>'Virginia',
    'WA'=>'Washington',
    'WV'=>'West Virginia',
    'WI'=>'Wisconsin',
    'WY'=>'Wyoming',
);
        $program_choices = array($this->program=>$this->program);

        $form = $this->app['form.factory']->createBuilder('form', array())
            ->add('program', 'choice', array(
                'constraints' => array(new Assert\NotBlank()),
                'choices'  => $this->getProgramList()
            ))        
            ->add('fName', 'text', array(
                'constraints' => array(new Assert\NotBlank())
            ))
            ->add('lName', 'text', array(
                'constraints' => array(new Assert\NotBlank())
            ))
            ->add('gender', 'choice', array(
                'choices'  => array(
                    'M'=>'Male',
                    'F'=>'Female',
                    'NA'=>'Not Specified'
                ),
            ))
            ->add('dob', 'birthday', array(
                'input'  => 'datetime',
                'widget' => 'single_text',
            ))
            ->add('address1', 'text', array(
                'constraints' => array(new Assert\NotBlank())
            ))
            ->add('address2', 'text', array(
                'required' => false,
            ))
            ->add('city', 'text', array(
                'constraints' => array(new Assert\NotBlank())
            ))
            ->add('state', 'choice', array(
                'constraints' => array(new Assert\NotBlank()),
                'choices' => $states
            ))
            ->add('zip', 'text', array(
                'constraints' => array(new Assert\NotBlank())
            ))
            ->add('email', 'text', array(
                'constraints' => new Assert\Email()
            ))
            ->add('phone', 'integer', array(
                'constraints' => array(new Assert\NotBlank())
            ))
            ->add('message', 'textarea', array(
                'required' => false,
            ))
            // ->add('registerAs', 'choice', array(
            //     'choices'  => array(
            //         'V'=>'Volunteer',
            //         'P'=>'Participant',
            //         'S'=>'Staff',
            //         'M'=>'Program Manager'
            //     ),
            // ))
//            ->add('date', 'date', array(
//                'input'  => 'datetime',
//                'widget' => 'single_text',
//            ))
            ->add('date', 'choice', array(
                 'choices'  => $this->getProgramDates($this->program)
            ))
            // ->add('startTime', 'time', array(
            //     'input'  => 'string',
            //     'widget' => 'single_text',
            // ))
            // ->add('endTime', 'time', array(
            //     'input'  => 'string',
            //     'widget' => 'single_text',
            // ))
            ->add('timeSlot','choice',array(
                 'choices' => $this->getProgramTimeSlots($this->program)
            ))
            ->addEventListener(FormEvents::POST_SUBMIT, function (FormEvent $event) {
                $event->stopPropagation();
                }, 900)            
            ->addEventSubscriber(new programEventHandler('Roopak'))
            ->addEventSubscriber(new programTimeEventHandler('Roopak'))
            //->addEventListener(FormEvents::PRE_SET_DATA, array($this, 'onPreSetData'))
            //->addEventListener(FormEvents::PRE_SUBMIT, array($this, 'onPreSubmit'))
            ->getForm();
        
        return $form;
    }

    public function getForm()
    {
        if(!$form)
        {
            $form = $this->buildForm()->createView();
        }
        return $form;

    }



   /**
     * Handles form submissions, and redirects back to original form page
     *
     * @return Symfony\Component\HttpFoundation\RedirectResponse
     */
    
    /**
     * Returns a list of links to all enabled login options
     *
     * @param boolean $redirect
     * @param string  $target
     *
     * @return \Twig_Markup
     */
    /*public function doDisplayLogin($redirect, $target = '')
    {
        $html = '';

        // Set redirect if passed
        if ($redirect) {
            $target = '&redirect=' . urlencode($this->app['resources']->getUrl('current'));
        }
        // Render
        if (isset($this->config['auth']['hybridauth'])) {
            $buttons = array();

            foreach ($this->config['auth']['hybridauth']['providers'] as $provider => $values) {
                if ($values['enabled'] == true) {
                    $label = !empty($values['label']) ? $values['label'] : $provider;
                    $class = isset($values['type']) && $values['type'] == 'OpenID' ? 'openid' : $provider;

                    $buttons[] = $this->doFormatButton(
                        $this->app['resources']->getUrl('root') . $this->config['basepath'] . '/login?provider=' . $provider . $target,
                        $class,
                        $label);
                }
            }

            $html .= join("\n", $buttons);
        }

        if (isset($this->config['auth']['password']) && $this->config['auth']['password']['enabled'] === true) {
            $html .= '';
        }

        return new \Twig_Markup($html, 'UTF-8');
    }

    /**
     * Returns logout button
     *
     * @param boolean $redirect
     *
     * @return \Twig_Markup
     */
    /*public function doDisplayLogout($redirect)
    {
        if ($redirect) {
            $target = '?redirect=' . urlencode($this->app['resources']->getUrl('current'));
        }

        if (empty($this->config['label']['logout'])) {
            $this->config['label']['logout'] = 'Logout';
        }

        $logoutlink = $this->doFormatButton(
            $this->app['resources']->getUrl('root') . $this->config['basepath'].'/logout' . $target,
            '',
            $this->config['label']['logout']);

        return new \Twig_Markup($logoutlink, 'UTF-8');
    }

    /**
     * Simple function to format the HTML for a button.
     *
     * @param string $link
     * @param string $provider
     * @param string $label
     *
     * @return \Twig_Markup
     */
    /*private function doFormatButton($link, $provider, $label)
    {
        $provider = strtolower(String::makeSafe($provider));

        if ($this->config['zocial']) {
            $class = "zocial {$provider}";
        } else {
            $class = "{$provider}";
        }

        $context = array(
            'link'  => $link,
            'label' => $label,
            'class' => $class
        );

        $markup = $this->app['render']->render($this->config['template']['button'], $context);

        return new \Twig_Markup($markup, 'UTF-8');
    }*/
    protected function addElements($form, Province $province = null) {

        // Add the province element
        $form->add('province', 'entity', array(
            'data' => $province,
            'empty_value' => '-- Choose --',
            'class' => 'ProgramManager:Province',
            'mapped' => false)
        );

        // Cities are empty, unless we actually supplied a province
        $cities = array();
        if ($province) {
            // Fetch the cities from specified province
            $repo = $this->em->getRepository('ProgramManager:City');
            $cities = $repo->findByProvince($province, array('name' => 'asc'));
        }

        // Add the city element
        $form->add('city', 'entity', array(
            'empty_value' => '-- Select a province first --',
            'class' => 'ProgramManager:City',
            'choices' => $cities,
        ));

    }


    function onPreSubmit(FormEvent $event) {
        $form = $event->getForm();
        $data = $event->getData();

        // Note that the data is not yet hydrated into the entity.
        $province = $this->em->getRepository('ProgramManager:Province')->find($data['province']);
        $this->addElements($form, $province);
    }


    function onPreSetData(FormEvent $event) {
        $account = $event->getData();
        $form = $event->getForm();

        // We might have an empty account (when we insert a new account, for instance)
        $province = null;//$account->getCity() ? $account->getCity()->getProvince() : null;
        $this->addElements($form, $province);
    }
    /**
 * Returns an authorized API client.
 * @return Google_Client the authorized client object
 */
function getClient() {
  $client = new Google_Client();
  $client->setApplicationName(APPLICATION_NAME);
  $client->setScopes(SCOPES);
  $client->setAuthConfig(CLIENT_SECRET_PATH);
  $client->setAccessType('offline');

  // Load previously authorized credentials from a file.
  $credentialsPath = expandHomeDirectory(CREDENTIALS_PATH);
  if (file_exists($credentialsPath)) {
    $accessToken = json_decode(file_get_contents($credentialsPath), true);
  } else {
    // Request authorization from the user.
    $authUrl = $client->createAuthUrl();
    printf("Open the following link in your browser:\n%s\n", $authUrl);
    print 'Enter verification code: ';
    $authCode = trim(fgets(STDIN));

    // Exchange authorization code for an access token.
    $accessToken = $client->fetchAccessTokenWithAuthCode($authCode);

    // Store the credentials to disk.
    if(!file_exists(dirname($credentialsPath))) {
      mkdir(dirname($credentialsPath), 0700, true);
    }
    file_put_contents($credentialsPath, json_encode($accessToken));
    printf("Credentials saved to %s\n", $credentialsPath);
  }
  $client->setAccessToken($accessToken);

  // Refresh the token if it's expired.
  if ($client->isAccessTokenExpired()) {
    $client->fetchAccessTokenWithRefreshToken($client->getRefreshToken());
    file_put_contents($credentialsPath, json_encode($client->getAccessToken()));
  }
  return $client;
}

/**
 * Expands the home directory alias '~' to the full path.
 * @param string $path the path to expand.
 * @return string the expanded path.
 */
function expandHomeDirectory($path) {
  $homeDirectory = getenv('HOME');
  if (empty($homeDirectory)) {
    $homeDirectory = getenv('HOMEDRIVE') . getenv('HOMEPATH');
  }
  return str_replace('~', realpath($homeDirectory), $path);
}

function getCalendarEvents() {
// Get the API client and construct the service object.
$client = getClient();
$service = new Google_Service_Calendar($client);

// Print the next 10 events on the user's calendar.
$calendarId = 'primary';
$optParams = array(
  'maxResults' => 10,
  'orderBy' => 'startTime',
  'singleEvents' => TRUE,
  'timeMin' => date('c'),
);
$results = $service->events->listEvents($calendarId, $optParams);

if (count($results->getItems()) == 0) {
  print "No upcoming events found.\n";
} else {
  print "Upcoming events:\n";
  foreach ($results->getItems() as $event) {
    $start = $event->start->dateTime;
    if (empty($start)) {
      $start = $event->start->date;
    }
    printf("%s (%s)\n", $event->getSummary(), $start);
  }
}
}

}
