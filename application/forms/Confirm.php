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
            'label' => "Edit",
            'onclick' => "history.back()"
        ));
        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore' => true,
            'label' => 'Confirm',
        ));
    }


}

