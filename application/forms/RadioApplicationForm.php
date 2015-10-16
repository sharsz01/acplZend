<?php

class Application_Form_RadioApplicationForm extends Zend_Form {

    public function init() {
        $listener = new Zend_Form_SubForm();
        $contact = new Zend_Form_SubForm();
        $otherInfo = new Zend_Form_SubForm();
        

        // Set the method for the display form to POST
        //$this->setMethod('post');

        // ================= listener

        
        $listener->addElement('text', 'firstName', array(
            'label' => 'First Name:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));

        $listener->addElement('text', 'lastName', array(
            'label' => 'Last Name:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $listener->addElement('text', 'birthdate', array(
            'label' => 'Date of Birth:',
            'required' => true,
            'validator' => 'Date'
        ));
        
        $listener->addElement('text', 'address', array(
            'label' => 'Address:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $listener->addElement('text', 'primaryPhone', array(
            'label' => 'Primary Phone Number:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $listener->addElement('text', 'secondaryPhone', array(
            'label' => 'Secondary Phone Number:',
            'required' => false,
            'filters' => array('StringTrim'),
        ));
        
        $listener->addElement('text', 'city', array(
            'label' => 'City:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $listener->addElement('text', 'state', array(
            'label' => 'State:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $listener->addElement('text', 'zip', array(
            'label' => 'Zip:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $listener->addElement('text', 'email', array(
            'label' => 'E-mail:',
            'required' => true,
            'filters' => array('StringTrim'),
            'validators' => array(
                'EmailAddress',
            )
        ));
        
        // ================== contact

        
        
        $contact->addElement('text', 'firstName', array(
            'label' => 'First Name:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $contact->addElement('text', 'lastName', array(
            'label' => 'Last Name:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $contact->addElement('text', 'relationship', array(
            'label' => 'Relationship to Listener:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $contact->addElement('text', 'address', array(
            'label' => 'Address:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $contact->addElement('text', 'primaryPhone', array(
            'label' => 'Primary Phone Number:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $contact->addElement('text', 'secondaryPhone', array(
            'label' => 'Secondary Phone Number:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $contact->addElement('text', 'city', array(
            'label' => 'City:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $contact->addElement('text', 'state', array(
            'label' => 'State:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $contact->addElement('text', 'zip', array(
            'label' => 'Zip:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        $contact->addElement('text', 'email', array(
            'label' => 'E-mail:',
            'required' => true,
            'filters' => array('StringTrim'),
        ));
        
        // =============== other info
        
        $otherInfo->addElement('text', 'disability', array(
            'label' => 'What is your print disability / reason requesting service?',
            'required' => true,
            'size' => 50,
            'filters' => array('StringTrim'),
        ));
        
        $otherInfo->addElement('text', 'howLearn', array(
            'label' => 'How did you learn about the Audio Reading Service?',
            'required' => true,
            'size' => 50,
            'filters' => array('StringTrim'),
        ));
        
        
        $this->addSubForms(array(
            'listener' => $listener,
            'contact' => $contact,
            'otherInfo' => $otherInfo
        ));

        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore' => true,
            'label' => 'Submit Application',
        ));

        // Add some CSRF protection
        $this->addElement('hash', 'csrf', array(
            'ignore' => true,
        ));
    }

}
