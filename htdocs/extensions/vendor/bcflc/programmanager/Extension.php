<?php

namespace Bolt\Extension\Bcflc\ProgramManager;

use Bolt\Application;
use Bolt\BaseExtension;
use Bolt\Events\CronEvent;
use Bolt\Events\CronEvents;
use Symfony\Component\Filesystem\Filesystem;
use Symfony\Component\Filesystem\Exception\IOException;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Bolt\Translation\Translator as Trans;


/**
 * BCFLC Program Manager
 *
 * @author Roopak Ingole <roopak.ingole@gmail.com>
 *
 */
class Extension extends \Bolt\BaseExtension
{
    /** @var string Extension name */
    const NAME = 'ProgramManager';

    /** @var string Extension's container */
    const CONTAINER = 'extensions.ProgramManager';

    /** @var ClientLogin\Controller */
    private $controller;
    private $ext;
    private $registration_success = NULL;
    private $registration_invalid_form = NULL;    
    // Whether to inject the contact form into the page or not
    public $active = false;

    public function getName()
    {
        return Extension::NAME;
    }
    public function getApp()
    {
        return $this->app;
    }

    public function initialize()
    {
        /*
         * Config
         */
        //$this->setConfig();
        $this->addCss('assets/extension.css');
        $extension = $this;
        /*
         * Register ourselves as a service
         */
        //$this->app->register(new Provider\ClientLoginServiceProvider($this->app));

        /*
         * Backend
         */
        //if ($this->app['config']->getWhichEnd() === 'backend') {
            // Check & create database tables if required
            //$this->app['clientlogin.records']->dbCheck();
        //}

        /*
         * Frontend
         */
        if ($this->app['config']->getWhichEnd() === 'frontend') {
            // Twig functions
            $this->ext = new ProgramManagerTwigExtensions($this);
            $this->app['twig']->addExtension($this->ext);
            $this->app['twig.loader.filesystem']->addPath($this->getBasePath(), 'programmanager');
        

        $this->app->post($this->submitUrl(), function(Request $request) use ($extension) { 
            return $extension->handleForm($request); 
        });

        /*
         * Set up controller routes
         */
        //$this->app->mount('/' . $this->config['basepath'], new Controller\ClientLoginController());
        $this->app->before(function (Request $request, Application $app) use ($extension) {
            $uri = $request->getRequestUri();
            
            //Don't be active on routes that have "editcontent" in them.  We don't want to affect the bolt backend.
            if((strstr($uri, 'editcontent') === FALSE) and (strstr($uri, 'volunteer-registration') === 'volunteer-registration')) {
                $extension->active = true;
            }
            
        });

        $this->registration_success = $this->getFlash('registration_success');
        $this->registration_invalid_form = $this->getFlash('registration_invalid_form');
        /*
         * Scheduled cron listener
         */
        //$this->app['dispatcher']->addListener(CronEvents::CRON_DAILY, array($this, 'cronDaily'));
        //Add a Silex middleware to inject contact form into content
        $this->app->after(function (Request $request, Response $response) use ($extension) { 
            if($extension->active) {
                $content = $response->getContent();
                $content = str_replace("[programmanager]", $this->ext->renderProgramForm(), $content);
                $response->setContent($content);
            }
        });
    }

}

    public function submitUrl() {
        //var_dump($this->app['extensions']);
        //return $this->twigExt->getExtensionBase()->getBaseUrl().'src/formProcess.php';
        return $this->getBaseUrl().'submit';
    }
public function handleForm(Request $request) {
        //var_dump($request);
        $form = $this->ext->getUserInterface()->buildForm();
        $form->handleRequest($request);

        //var_dump($form->isSubmitted());
        //var_dump(count($form->getErrors(true)));

        //var_dump(($form->getErrorsAsString(1)));
        //var_dump(($form->getErrors(true)));

        //if ($form->isValid()) 
        {
            $data = $form->getData();
/*            $normdata = $form->getNormData();
            $viewdata = $form->getViewData();
            $extradata = $form->getExtraData();*/

            //$this->get('request')->request->get('name');
            $rawData = $request->request->get('form');
            //var_dump(($form->getErrors(true)));
            $this->uploadRegistrationInfo($data,$rawData);
            $this->sendConfirmationEmail($data,$rawData);
            $this->setFlash('registration_success', Trans::__("Thank you! You will receive confirmation email shortly."));
        }
        //else {

            // If the form is not valid, render it with errors and pack it into session since we have to do a redirect regardless
            //$this->setFlash('registration_invalid_form', $this->ext->renderProgramForm($form->createView()));
        //}

        return $this->app->redirect($request->server->get('HTTP_REFERER'));
        //return $this->app->redirect($this->app->generateUrl('homepage'));
    }

    public function setFlash($key, $val) {
        $this->app['session']->set($key, $val); 
    }

    /**
     * Fetch a session flash value
     * 
     * @return mixed
     */
    public function getFlash($key) {
        if($this->app['session']->has($key)) {
            $value = $this->app['session']->get($key);
            $this->app['session']->remove($key);
            return $value;
        }
    }

    public function uploadRegistrationInfo($data,$rawData)
    {
        //$a = (array)$data;
        //$a = get_object_vars($data['dob']);
        //$dob = "{$a['year']}-{$a['month']}-{$a['day']}00:00:00";

        //$dob = $data->dob->year . "-" . $data['dob']->month . "-" . $data['dob']->day . " 00:00:00";
        //$dob = $data->dob->date;
        //$date = $data['date']->year . "-" . $data['date']->month . "-" . $data['date']->day . " 00:00:00";
        //$today = $data['date']['year'] . "-" . $data['date']['month'] . "-" . $data['date']['day'] . " 00:00:00";
        //$sTime = $data['date']->year . "-" . $data['date']->month . "-" . $data['date']->day . " " . $data['startTime']->hour .":" . $data['startTime']->minute . ":00";
        //$eTime = $data['date']->year . "-" . $data['date']->month . "-" . $data['date']->day . " " . $data['endTime']->hour . ":" . $data['endTime']->minute . ":00";

        //$dob = date_create()->format('Y-m-d H:i:s');
        //$date = date_create()->format('Y-m-d H:i:s');
        //$sTime = "00:00:00";
        //$eTime = "00:00:00";

        $today = date_create()->format('Y-m-d H:i:s');
        $sTime = strstr($rawData['timeSlot'],'-',true);
        $eTime = substr(strstr($rawData['timeSlot'],'-',false),1);

       
        $query = sprintf("INSERT INTO %s (program,fName,lName,gender,dob,addr1,addr2,city,state,zip,email,phone,regType,eventdate,sTime,eTime,message,regdate) VALUES ('%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' ,'%s', '%s', '%s','%s','%s','%s','%s','%s','%s','%s')", 
        'bolt_custom_registration',
        $data['program'],
        $data['fName'],
        $data['lName'],
        $data['gender'],
        $rawData['dob'],
        $data['address1'],
        $data['address2'],
        $data['city'],
        $data['state'],
        (int)$data['zip'],
        $data['email'],
        (int)$data['phone'],
        'V',
        $rawData['date'],
        $sTime,
        $eTime,
        $data['message'],
        $today
        );
                    
        $this->app['db']->executeQuery($query);

    }

    public function sendConfirmationEmail($data,$rawData)
    {
        $today = date_create()->format('Y-m-d H:i:s');
        $sTime = strstr($rawData['timeSlot'],'-',true);
        $eTime = substr(strstr($rawData['timeSlot'],'-',false),1);

        $query = sprintf("SELECT owner_email FROM bolt_custom_programs where name='%s'",$data['program']);

        $rows = $this->app['db']->executeQuery($query)->fetchall();
        $values = array('');

        foreach($rows as $x=>$y) {
            $values["owner_email"] = $y["owner_email"];
        }

        $bcc = array($values["owner_email"],'contact@bemoneystrong.org','financialliteracy@uwbarthco.org');
        $to = array($data['email']);
        $from = sprintf("%s","contact@bemoneystrong.org");
        $subject = sprintf("[%s] %s", $this->app['config']->get('general/sitename'), "Registration Complete");
        $message = sprintf("Dear %s,\nThank you for volunteer registration.\n\nRegistration Details:\nProgram Registered: %s\nVolunteer Date/Time: %s %s-%s\nName: %s %s\nGender:%s\nBirth Date: %s\nAddress: %s %s %s %s %s\nEmail: %s\nPhone: %s\nYour Message: %s\n", 
                        $data['fName'],
                        $data['program'],
                        $rawData['date'],
                        $sTime,
                        $eTime,
                        $data['fName'],
                        $data['lName'],
                        $data['gender'],
                        $rawData['dob'],
                        $data['address1'],
                        $data['address2'],
                        $data['city'],
                        $data['state'],
                        $data['zip'],
                        $data['email'],
                        $data['phone'],
                        $data['message']
                    );
            
            // Create email message
           $message = \Swift_Message::newInstance()
                ->setSubject($subject)
                ->setFrom($from)
                ->setTo($to)
                ->setBcc($bcc)
                ->setBody($message);
            
            // Send the email message
            $this->app['mailer']->send($message);
    }

}
