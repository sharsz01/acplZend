<?php

class Application_Form_Returns extends Zend_Form
{

    public function init()
    {
        $this->setAttrib('id', 'org-form-app');

        // Set the method for the display form to POST
        $this->setMethod('post');
        
        $this->addElement('text', 'ListenerName', array(
            'label' => 'Listener Name ',
            'class' => 'form-control',
            'placeholder' => 'Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));
        
        $this->addElement('MultiCheckbox', 'ReturnReason', array(
            'class' => 'checkbox-inline big-checkbox',
            'label' => 'Please indicate reason for returning radio',
            'multioptions' => array(
                '1' => ' Listener has moved out of area.',
                '2' => ' Listener is deceased.',
                '3' => ' Radio is defective.',
                '4' => ' Poor reception.',
                '5' => ' I am no longer using the radio.'
            )
        ));
        
        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'class' => 'btn btn-info pull-right',
            'ignore' => true,
            'label' => 'Submit Application',
        ));
    }


}

