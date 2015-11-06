<?php

class Application_Form_RadioApplicationForm extends Zend_Form {

    public function init() {
        $this->setAttrib('id', 'radio-form-app');

        // subforms
        $listener = new Zend_Form_SubForm();
        $contact = new Zend_Form_SubForm();
        $otherInfo = new Zend_Form_SubForm();
        $statement = new Zend_Form_SubForm();

        $listener->setElementDecorators(array('ViewHelper', 'Label'));
        //$contact->setElementDecorators(array('ViewHelper', 'Label'));
        // subform section names
        $listener->setLegend("LISTENER");
        $contact->setLegend("ALTERNATIVE CONTACT");
        $statement->setLegend("STATEMENT OF AGREEMENT AND RESPONSIBILITY");

        // Set the method for the display form to POST
        $this->setMethod('post');

        // ============================================================ listener
        $listener->addElement('text', 'firstName', array(
            'label' => 'Name *',
            'placeholder' => 'first name',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label','Errors'),
            'validators' => array(
                "Alpha", array('StringLength', false, array(1, 20)),
            ),
        ));

        $listener->addElement('text', 'lastName', array(
            'label' => '*',
            'placeholder' => 'last name',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label','Errors'),
            'validators' => array(
                "Alpha", array('StringLength', false, array(1, 20)),
            ),
        ));

        $listener->addElement('date', 'birthdate', array(
            'label' => 'Date of Birth *',
            'required' => true,
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $listener->addDisplayGroup(array('firstName', 'lastName', 'birthdate'), 'firstLine', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            ),
        ));

        // ============
//        $listener->addElement('text', 'birthdate', array(
//            'label' => 'Date of Birth:',
//            'required' => true,
//            'options' => array(
//                'label' => 'Birth'
//            ),
//            'validators' => array(
//                new Zend_Validate_Date(array('format' => 'yyyy/MM/dd'))
//            ),
//        ));
        // ====================================================================
        
        $listener->addElement('text', 'address', array(
            'label' => 'Address *',
            'placeholder' => 'street address',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label','Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 30))
            ),
        ));

        $listener->addElement('text', 'address2', array(
            'placeholder' => 'address line 2',
            'required' => false,
            'filters' => array('StringTrim'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 30))
            ),
        ));

        $listener->addElement('text', 'city', array(
            'label' => '*',
            'placeholder' => 'city',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label','Errors'),
            'validators' => array(
                array('Alpha', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 20))
            ),
        ));

        $listener->addElement('text', 'state', array(
            'label' => '*',
            'placeholder' => 'state',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label','Errors'),
            'validators' => array(
                array('Alpha', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 20))
            ),
        ));

        $listener->addElement('text', 'zip', array(
            'label' => '*',
            'placeholder' => 'zip',
            'size' => 5,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label','Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(5, 5)),
            ),
        ));

        $listener->addDisplayGroup(array('city', 'state', 'zip'), 'csz', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            ),
        ));

        $listener->addElement('text', 'primaryPhone', array(
            'label' => 'Phone Number *',
            'placeholder' => 'home phone',
            'size' => 10,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label','Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $listener->addElement('text', 'secondaryPhone', array(
            'label' => 'Secondary Phone Number:',
            'placeholder' => 'cell phone',
            'size' => 10,
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 1)),
            ),
        ));

        $listener->addDisplayGroup(array('primaryPhone', 'secondaryPhone'), 'phone', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            ),
        ));

        $listener->addElement('text', 'email', array(
            'label' => '*',
            'placeholder' => 'e-mail',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                'EmailAddress',
            ),
        ));
        
        $listener->addDisplayGroup(array('email'), 'email2', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            ),
        ));

        // ============================================================= contact
        $contact->addElement('text', 'firstName', array(
            'label' => 'Name *',
            'placeholder' => 'first name',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label','Errors'),
            'validators' => array(
                "Alpha", array('StringLength', false, array(1, 20)),
            ),
        ));

        $contact->addElement('text', 'lastName', array(
            'label' => 'Last Name:',
            'placeholder' => 'last name',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Errors'),
            'validators' => array(
                "Alpha", array('StringLength', false, array(1, 20)),
            ),
        ));

        $contact->addElement('text', 'relationship', array(
            'label' => '*',
            'placeholder' => 'relationship to listener',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 30))
            ),
        ));

        $contact->addElement('text', 'address', array(
            'label' => 'Address *',
            'placeholder' => 'street address',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label','Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 20))
            ),
        ));

        $contact->addElement('text', 'address2', array(
            'label' => 'Address 2:',
            'placeholder' => 'address line 2',
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 20))
            ),
        ));

        $contact->addElement('text', 'primaryPhone', array(
            'label' => 'Phone Number *',
            'placeholder' => 'home phone',
            'size' => 10,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label','Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $contact->addElement('text', 'secondaryPhone', array(
            'label' => 'Secondary Phone Number:',
            'placeholder' => 'cell phone',
            'size' => 10,
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $contact->addElement('text', 'city', array(
            'label' => '*',
            'placeholder' => 'city',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alpha', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 20))
            ),
        ));

        $contact->addElement('text', 'state', array(
            'label' => '*',
            'placeholder' => 'state',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alpha', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 20))
            ),
        ));

        $contact->addElement('text', 'zip', array(
            'label' => '*',
            'placeholder' => 'zip',
            'size' => 5,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(5, 5)),
            ),
        ));

        $contact->addElement('text', 'email', array(
            'label' => '*',
            'placeholder' => 'e-mail',
            'required' => false,
            'filters' => array('StringTrim'),
            'validators' => array(
                'EmailAddress',
            ),
            'decorators' => array('ViewHelper', 'Label','Errors'),
        ));


        $contact->addDisplayGroup(array('firstName', 'lastName', 'relationship'), 'first', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $contact->addDisplayGroup(array('address', 'address2'), 'second', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));
        $contact->addDisplayGroup(array('city', 'state', 'zip'), 'third', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));
        $contact->addDisplayGroup(array('primaryPhone', 'secondaryPhone'), 'fourth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));
        $contact->addDisplayGroup(array('email'), 'fifth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        // ========================================================== other info
        $listener->addElement('text', 'disability', array(
            'label' => 'What is your print disability/reason requesting service? *',
            'required' => true,
            'size' => 50,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 40))
            ),
        ));

        $listener->addElement('text', 'howLearn', array(
            'label' => ' How did you learn about the Audio Reading Service? *',
            'required' => true,
            'size' => 50,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 40))
            ),
        ));
        
        $listener->addDisplayGroup(array('disability'), 'fifth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $listener->addDisplayGroup(array('howLearn'), 'sixth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));
        
        $listener->addElement('hidden', 'plaintext', ['description' => '** Optional '
            . 'items for statistical purposes and to help us apply for grant '
            . 'dollars to continue our service **',
            'ignore' => true,
            'decorators' => array(
                array('Description', array('escape' => false, 'tag' => 'statement')),
            ),
        ]);
        
        $race = new Zend_Form_Element_Select('race');
        $race->setLabel("Race")->addMultiOptions(array(
            '--' => '',
            'Caucasian' => 'Caucasian',
            'African American' => 'African American',
            'Hispanic / Latino' => 'Hispanic / Latino',
            'Native American' => 'Native American',
            'Other' => 'Other'
        ));
        $race->setDecorators(array('ViewHelper', 'Label'));
        $race->setRequired(false);
        $listener->addElement($race);

        $income = new Zend_Form_Element_Select('income');
        $income->setLabel("Income")->addMultiOptions(array(
            '--' => '',
            'Under $10,000' => 'Under $10,000',
            '$10,000 - 15,000' => '$10,000 - 15,000',
            '$15,001 - 20,000' => '$15,001 - 20,000',
            '$20,001 - 25,000' => '$20,001 - 25,000',
            '25,001 - 30,000' => '$25,001 - 30,000',
            '$30,001 - 45,000' => '$30,001 - 45,000',
            '$45,001 - 55,000' => '$45,001 - 55,000',
            'Over $55,000' => 'Over $55,000'
        ));
        $income->setDecorators(array('ViewHelper', 'Label'));
        $income->setRequired(false);
        $listener->addElement($income);

        $numInHome = new Zend_Form_Element_Select('numInHome');
        $numInHome->setLabel("Number in Household")->addMultiOptions(array(
            '--' => '',
            '1' => '1',
            '2' => '2',
            '3' => '3',
            '4' => '4',
            '5 or more' => '5 or more'
        ));
        $numInHome->setDecorators(array('ViewHelper', 'Label'));
        $numInHome->setRequired(false);
        $listener->addElement($numInHome);
        
        $listener->addDisplayGroup(array('race', 'income', 'numInHome'), 'seventh', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));
        
        $format = new Zend_Form_Element_Select('format');
        $format->setLabel("Choose Your Preferred Format")->addMultiOptions(array(
            '--' => '',
            'Large Print' => 'Large Print',
            'Braille' => 'Braille',
            'Audio CD' => 'Audio CD',
            'Email' => 'Email',
            'Other' => 'Other'
        ));
        $format->setDecorators(array('ViewHelper', 'Label'));
        $format->setRequired(false);
        $listener->addElement($format);    
        
         $listener->addDisplayGroup(array('format'), 'eighth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $otherInfo->addElement('radio', 'mailTo', array(
            'label' => 'Please Check One *',
            'multiOptions' => array(
                'toListener' => 'Mail radio to listener',
                'toContact' => 'Mail radio to contact person',
            ),
            'required' => true,
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
            'label' => 'Signature of responsible party *',
            'required' => true,
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alpha', true, array('allowWhiteSpace' => true)),
                array('StringLength', false, array(1, 40))
            ),
        ));
        
        $statement->addElement('date', 'signatureDate', array(
            'label' => 'Date *',
            'required' => true,
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

//        $statement->addElement('text', 'signatureDate', array(
//            'label' => 'Date:',
//            'required' => true,
//            'validators' => array(
//                new Zend_Validate_Date(array('format' => 'yyyy/MM/dd'))
//            ),
//            'decorators' => array('ViewHelper', 'Label', 'Errors'),
//        ));
        
        $statement->addDisplayGroup(array('signature', 'signatureDate'), 'sixth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
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
