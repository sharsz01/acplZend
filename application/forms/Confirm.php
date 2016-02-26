<?php

class Application_Form_Confirm extends Zend_Form
{
    public function init()
    {
        $this->setAttrib('id', 'confirm-form');
        
        
        // Set the method for the display form to POST
        $this->setMethod('post');
        
        // Go back and edit
        $this->addElement('submit', 'cancel', array(
            'class' => 'btn btn-default',
            'ignore' => true,
            'label' => "Go Back and Edit",
            'onclick' => "history.back()",
            'decorators' => array('ViewHelper'),
        ));
        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'class' => 'btn btn-primary',
            'ignore' => true,
            'label' => 'Confirm',
            'decorators' => array('ViewHelper'),
        ));
        
        $this->addDisplayGroup(array('cancel', 'submit'), 'buttons', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'confirm-buttons')),
            ),
        ));
    }


}

