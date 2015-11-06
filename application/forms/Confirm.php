<?php

class Application_Form_Confirm extends Zend_Form
{

    public function init()
    {
        $this->setAttrib('id', 'confirm-form');
        
        
        // Set the method for the display form to POST
        $this->setMethod('post');
        
        $this->addElement('button', 'cancel', array(
            'ignore' => true,
            'label' => "Go Back and Edit",
            'onclick' => "history.back()",
            'decorators' => array('ViewHelper'),
        ));
        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
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

