<?php

class Application_Form_RadioApplicationForm extends Zend_Form {

    public function init() {
        $this->setAttrib('id', 'radio-form-app');

        // subforms
        $listener = new Zend_Form_SubForm();
        $contact = new Zend_Form_SubForm();
        $otherInfo = new Zend_Form_SubForm();
        $statement = new Zend_Form_SubForm();

        // subform section names
        $listener->setLegend("LISTENER");
        $contact->setLegend("ALTERNATIVE CONTACT");
        $statement->setLegend("STATEMENT OF AGREEMENT AND RESPONSIBILITY");

        // Set the method for the display form to POST
        $this->setMethod('post');
        
        // ============================================================ listener
        $listener->addElement('text', 'firstName', array(
            'label' => 'Your First Name:',
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
            'validators' => array(
                new Zend_Validate_Date(array('format' => 'yyyy/MM/dd'))
            ),
            'class' => 'form-date'
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
            'required' => false,
            'filters' => array('StringTrim'),
            'validators' => array(
                'EmailAddress',
            )
        ));

        // ============================================================= contact
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
            'required' => false,
            'filters' => array('StringTrim'),
            'validators' => array(
                'EmailAddress',
            )
        ));

        // ========================================================== other info

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

        $race = new Zend_Form_Element_Select('race');
        $race->setLabel("Race (Leave blank if prefer not to say)")->addMultiOptions(array(
            '0' => '',
            'Caucasian' => 'Caucasian',
            'African American' => 'African American',
            'Hispanic / Latino' => 'Hispanic / Latino',
            'Native American' => 'Native American',
            'Other' => 'Other'
        ));
        $race->setRequired(false);
        $otherInfo->addElement($race);

        $income = new Zend_Form_Element_Select('income');
        $income->setLabel("Income (Leave blank if prefer not to say)")->addMultiOptions(array(
            '0' => '',
            '1' => 'Under $10,000',
            '2' => '$10,000 - 15,000',
            '3' => '$15,001 - 20,000',
            '4' => '$20,001 - 25,000',
            '5' => '$25,001 - 30,000',
            '6' => '$30,001 - 45,000',
            '7' => '$45,001 - 55,000',
            '8' => 'Over $55,000'
        ));
        $income->setRequired(false);
        $otherInfo->addElement($income);

        $numInHome = new Zend_Form_Element_Select('numInHome');
        $numInHome->setLabel("Number in Household (Leave blank if prefer not to say)")->addMultiOptions(array(
            '0' => '',
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5 or more' => '5 or more'
        ));
        $numInHome->setRequired(false);
        $otherInfo->addElement($numInHome);
        
        $otherInfo->addElement('radio', 'mailTo', array(
            'label' => 'Please Check One:',
            'multiOptions' => array(
                'toListener' => 'Mail radio to listener',
                'toContact' => 'Mail radio to contact person',
            ),
        ));

        // =========================================================== statement
        $statement->addElement('hidden', 'plaintext', ['description' => 'I understand that the Audio Reading Service radio '
            . 'is on loan to me and remains the property of the Allen County '
            . 'Public Library and must be returned to the Audio Reading Service '
            . 'when it is no longer needed. I agree to return the radio or that '
            . 'my contact or family will return the radio when no longer needed.',
            'ignore' => true,
            'decorators' => array(
                array('Description', array('escape' => false, 'tag' => 'statement')),
            ),
            ]);
        
        $statement->addElement('text', 'signature', array(
            'label' => 'Signature of responsible party: ',
            'required' => true
        ));
        
        $statement->addElement('text', 'signatureDate', array(
            'label' => 'Date:',
            'required' => true,
            'validators' => array(
                new Zend_Validate_Date(array('format' => 'yyyy/MM/dd'))
            ),
            'class' => 'form-date'
        ));

        // =====================================================================
        // Add subforms to main form
        $this->addSubForms(array(
            'listener' => $listener,
            'contact' => $contact,
            'otherInfo' => $otherInfo,
            'statement' => $statement
        ));

        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore' => true,
            'label' => 'Submit Application',
        ));

        // Add some CSRF protection
//        $this->addElement('hash', 'csrf', array(
//            'ignore' => true,
//        ));
    }
}
