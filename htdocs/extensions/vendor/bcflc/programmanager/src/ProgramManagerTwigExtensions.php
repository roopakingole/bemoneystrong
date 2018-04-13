<?php

namespace Bolt\Extension\Bcflc\ProgramManager;

use Bolt\Application;


use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Bolt\Helpers\String;
/**
 * Twig functions
 */
class ProgramManagerTwigExtensions extends \Twig_Extension
{
    /** @var UserInterface class object */
    private $userinterface;
    private $form;
    private $ext;

    // public function __construct(Application $app)
    // {
    //     $this->app = $app;
    //     $this->userinterface = new UserInterface($app);
    // }
    public function __construct(Extension $ext)
    {
        $this->ext = $ext;
        $this->app = $ext->getApp();
        $this->userinterface = new UserInterface($this);
    }

    /**
     * Return the name of the extension
     *
     * @return string
     */
    public function getName()
    {
        return Extension::NAME . '_Twig';
    }

    /**
     * The functions we add to Twig
     *
     * @return array Function names and their local callbacks
     */
    public function getFunctions()
    {
        return array(
            'renderProgramForm'       => new \Twig_Function_Method($this, 'renderProgramForm')
            //'getForm'   => new \Twig_Function_Method($this, 'getForm'),
            //'submitUrl'  => new \Twig_Function_Method($this, 'submitUrl')
            //'displaylogout' => new \Twig_Function_Method($this, 'getDisplayLogout')
        );
    }

    public function getExtensionBase()
    {
        return $this->ext;
    }

    public function renderProgramForm()
    {
        return $this->userinterface->renderProgramForm(null);
    }

    public function getUserInterface()
    {
        return $this->userinterface;
    }

    /**
     *
     * @param string $redirect
     *
     * @return \Twig_Markup
     */
    /*public function getDisplayAuth($redirect = false)
    {
        return $this->userinterface->doDisplayAuth($redirect);
    }*/

    /**
     *
     * @param string $redirect
     *
     * @return \Twig_Markup
     */
    /*public function getDisplayLogin($redirect = false)
    {
        return $this->userinterface->doDisplayLogin($redirect);
    }*/

    /**
     *
     * @param string $redirect
     *
     * @return \Twig_Markup
     */
    /*public function getDisplayLogout($redirect = false)
    {
        return $this->userinterface->doDisplayLogout($redirect, $label);
    }*/
}
