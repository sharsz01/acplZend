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
        
        // ========================================================== add fields
        $this->addListenerFields($listener);
        $this->addContactFields($contact);
        $this->addOtherFields($otherInfo);
        $this->addStatementFields($statement);

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
    
    public function addListenerFields($listener){
        $listener->addElement('text', 'FirstName', array(
            'label' => 'Name *',
            'class' => 'firstName',
            'placeholder' => 'First Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));

        $listener->addElement('text', 'LastName', array(
            'label' => '*',
            'placeholder' => 'Last Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));
        
        $listener->addElement('date', 'Birthdate', array(
            'label' => 'Date of Birth *',
            'required' => true,
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $listener->addDisplayGroup(array('FirstName', 'LastName', 'Birthdate'), 'firstLine', array(
            'decorators' => array(
                'FormElements',
                //'Fieldset',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            ),
        ));


        $listener->addElement('text', 'Address', array(
            'label' => 'Address *',
            'placeholder' => 'Street Address ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $listener->addElement('text', 'AlternativeAddress', array(
            'label' => '-',
            'placeholder' => 'Alternative Address ',
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'hide'))),
        ));

        $listener->addDisplayGroup(array('Address', 'AlternativeAddress'), 'second', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $listener->addElement('text', 'City', array(
            'label' => '*',
            'placeholder' => 'City ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
//            'validators' => array(
//                array('Alpha', true, array('allowWhiteSpace' => true)),
//            ),
        ));

        $listener->addElement('text', 'State', array(
            'label' => '*',
            'placeholder' => 'State ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
//            'validators' => array(
//                array('Alpha', true, array('allowWhiteSpace' => true)),
//            ),
        ));

        $listener->addElement('text', 'Zip', array(
            'label' => '*',
            'placeholder' => 'Zip ',
            'size' => 5,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(5, 5)),
            ),
        ));

        $listener->addDisplayGroup(array('City', 'State', 'Zip'), 'csz', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            ),
        ));

        $listener->addElement('text', 'HomePhone', array(
            'label' => '*',
            'placeholder' => 'Home Phone ',
            'size' => 10,
            'required' => true,
            'filters' => array('Digits', 'StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $listener->addElement('text', 'CellPhone', array(
            'label' => '-',
            'placeholder' => 'Cell Phone ',
            'size' => 10,
            'required' => false,
            'filters' => array('Digits', 'StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'hide')), 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $listener->addElement('text', 'Email', array(
            'label' => '*',
            'placeholder' => 'E-mail ',
            'size' => 25,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
            'validators' => array(
                'EmailAddress',
            ),
        ));

        $listener->addDisplayGroup(array('HomePhone', 'CellPhone', 'Email'), 'phone', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            ),
        ));
        
        $listener->addElement('text', 'Disability', array(
            'label' => '*',
            'placeholder' => 'What is your print disability/reason requesting service? ',
            'required' => true,
            'size' => 58,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
            ),
        ));

        $listener->addElement('text', 'HowLearn', array(
            'label' => '*',
            'placeholder' => 'How did you learn about the Audio Reading Service? ',
            'required' => true,
            'size' => 58,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
            ),
        ));

        $listener->addDisplayGroup(array('Disability'), 'fifth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $listener->addDisplayGroup(array('HowLearn'), 'sixth', array(
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
                array('Description', array('HtmlTag', array('tag' => 'div', 'class' => 'element'))),
            ),
        ]);

        $race = new Zend_Form_Element_Select('Race');
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

        $income = new Zend_Form_Element_Select('Income');
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

        $numInHome = new Zend_Form_Element_Select('NumberInHome');
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

        $listener->addDisplayGroup(array('Race', 'Income', 'NumberInHome'), 'seventh', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'dropdowns')),
            )
        ));


        $listener->addElement('hidden', 'plaintext2', ['description' => 'Program '
            . 'Schedule (tells the day/time programs are aired)',
            'ignore' => true,
            'decorators' => array(
                array('Description', array('HtmlTag', array('tag' => 'div', 'class' => 'color'))),
            ),
        ]);

        $listener->addDisplayGroup(array('plaintext2'), 'ninth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'color')),
            )
        ));

        $listener->addElement('hidden', 'plaintext3', ['description' => 'Choose '
            . 'Your Preferred Format (Maximum of 2)',
            'ignore' => true,
            'decorators' => array(
                array('Description', array('HtmlTag', array('tag' => 'div', 'class' => 'element'))),
            ),
        ]);

        $listener->addElement('checkbox', 'LargePrint', array(
            'label' => 'Large Print',
        ));
        $listener->getElement('LargePrint')->setCheckedValue('Yes');
        $listener->getElement('LargePrint')->setUnCheckedValue('No');

        $listener->addElement('checkbox', 'Braille', array(
            'label' => 'Braille',
        ));
        $listener->getElement('Braille')->setCheckedValue('Yes');
        $listener->getElement('Braille')->setUnCheckedValue('No');

        $listener->addElement('checkbox', 'AudioCD', array(
            'label' => 'Audio CD',
        ));
        $listener->getElement('AudioCD')->setCheckedValue('Yes');
        $listener->getElement('AudioCD')->setUnCheckedValue('No');

        $listener->addElement('checkbox', 'SendEmail', array(
            'label' => 'Email',
        ));
        $listener->getElement('SendEmail')->setCheckedValue('Yes');
        $listener->getElement('SendEmail')->setUnCheckedValue('No');
        
    }
    
    public function addContactFields($contact){
        $contact->addElement('text', 'FirstName', array(
            'label' => 'Name *',
            'placeholder' => 'First Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));

        $contact->addElement('text', 'LastName', array(
            'label' => '*',
            'placeholder' => 'Last Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')),'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));

        $contact->addElement('text', 'Relationship', array(
            'label' => '*',
            'placeholder' => 'Relationship To Listener ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
            ),
        ));

        $contact->addElement('text', 'Address', array(
            'label' => 'Address *',
            'placeholder' => 'Street Address ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $contact->addElement('text', 'AlternativeAddress', array(
            'label' => '-',
            'placeholder' => 'Alternative Address ',
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'hide')),'Errors'),
//            'validators' => array(
//                array('Alnum', true, array('allowWhiteSpace' => true)),
//            ),
        ));

        $contact->addElement('text', 'HomePhone', array(
            'label' => '*',
            'placeholder' => 'Home Phone ',
            'size' => 10,
            'required' => true,
            'filters' => array('Digits', 'StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $contact->addElement('text', 'CellPhone', array(
            'label' => '-',
            'placeholder' => 'Cell Phone ',
            'size' => 10,
            'required' => false,
            'filters' => array('Digits', 'StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'hide')),'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $contact->addElement('text', 'City', array(
            'label' => '*',
            'placeholder' => 'City',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
//            'validators' => array(
//                array('Alpha', true, array('allowWhiteSpace' => true)),
//            ),
        ));

        $contact->addElement('text', 'State', array(
            'label' => '*',
            'placeholder' => 'State',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
//            'validators' => array(
//                array('Alpha', true, array('allowWhiteSpace' => true)),
//            ),
        ));

        $contact->addElement('text', 'Zip', array(
            'label' => '*',
            'placeholder' => 'Zip',
            'size' => 5,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(5, 5)),
            ),
        ));

        $contact->addElement('text', 'Email', array(
            'label' => '*',
            'placeholder' => 'E-mail',
            'size' => 25,
            'required' => true,
            'filters' => array('StringTrim'),
            'validators' => array(
                'EmailAddress',
            ),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
        ));


        $contact->addDisplayGroup(array('FirstName', 'LastName', 'Relationship'), 'first', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $contact->addDisplayGroup(array('Address', 'AlternativeAddress'), 'second', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));
        $contact->addDisplayGroup(array('City', 'State', 'Zip'), 'third', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));
        $contact->addDisplayGroup(array('HomePhone', 'CellPhone', 'Email'), 'fourth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));
    }
    
    public function addOtherFields($otherInfo){
        $otherInfo->addElement('radio', 'MailTo', array(
            'label' => 'Please Check One *',
            'multiOptions' => array(
                'toListener' => 'Mail radio to listener',
                'toContact' => 'Mail radio to contact person',
            ),
            'required' => true,
        ));
    }
    
    public function addStatementFields($statement){
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

        $statement->addElement('text', 'Signature', array(
            'label' => 'Signature of responsible party *',
            'required' => true,
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alpha', true, array('allowWhiteSpace' => true)),
            ),
        ));

        $statement->addElement('date', 'SignatureDate', array(
            'label' => 'Date *',
            'required' => true,
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $statement->addDisplayGroup(array('Signature', 'SignatureDate'), 'sixth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'signElement')),
            )
        ));
    }

}
