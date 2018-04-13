<?php

namespace Bolt\Extension\Bcflc\ProgramManager;

//use Symfony\Component\Form\Event\DataEvent;
//use Symfony\Component\Form\Event\FormEvent;
//use Symfony\Component\Form\FormFactoryInterface;
//use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\Form\FormEvent;
use Symfony\Component\Form\FormEvents;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use Symfony\Component\PropertyAccess\PropertyAccess;

class programTimeEventHandler implements EventSubscriberInterface
{
    private $name;
    public function __construct($text)
    {
        $this->name = $text;
    }
public static function getSubscribedEvents()
    {
        return array(
            FormEvents::PRE_SET_DATA  => 'preSetData',
            FormEvents::PRE_SUBMIT    => 'preSubmit'
        );
    }

    private function addProgramFormData($form,$program)
    {
         $formOptionsTime = array(
                 'choices'  => array(
                     'S'=>'Select Time'
                 ),
            );
        
            $form->add('timeSlot', 'choice', $formOptionsTime);
    }

    public function preSetData(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();
 
        if (null === $data) {
            return;
        }
 
        $accessor    = PropertyAccess::createPropertyAccessor();
 
        

        $program = array_key_exists('form[program]', $data) ? $data['form[program]'] : null;
        //$program        = $accessor->getValue($data,'form[program]');
         
        $this->addProgramFormData($form,$program);
    }
    public function preSubmit(FormEvent $event)
    {
        $data = $event->getData();
        $form = $event->getForm();

        $program = array_key_exists('form[program]', $data) ? $data['form[program]'] : null;
        $this->addProgramFormData($form,$program);
    }
}