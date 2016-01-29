<?php

class Application_Form_RadioApplicationForm extends Zend_Form {

    public function init() {
        $this->setAttrib('id', 'radio-form-app');

        // subforms
        $listener = new Zend_Form_SubForm();
        $contact = new Zend_Form_SubForm();
        $otherInfo = new Zend_Form_SubForm();
        $statement = new Zend_Form_SubForm();

        //$listener->setElementDecorators(array('ViewHelper', 'Label'));
        //$statement->setElementDecorators(array('ViewHelper', 'Label'));

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
            'class' => 'btn btn-info pull-right'
        ));

        // Add some CSRF protection
//        $this->addElement('hash', 'csrf', array(
//            'ignore' => true,
//        ));
    }

    public function addListenerFields($listener) {
        $listener->addElement('text', 'FirstName', array(
            'label' => 'First Name *',
            'class' => 'form-control',
            'placeholder' => 'First Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));

        $listener->addElement('text', 'LastName', array(
            'class' => 'form-control',
            'label' => 'Last Name *',
            'placeholder' => 'Last Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));

        $listener->addElement('date', 'Birthdate', array(
            'class' => 'form-control',
            'label' => 'Date of Birth *',
            'required' => true,
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $listener->addElement('text', 'Address', array(
            'class' => 'form-control',
            'label' => 'Street Address *',
            'placeholder' => 'Street Address ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $listener->addElement('text', 'AlternativeAddress', array(
            'class' => 'form-control',
            'label' => 'Address Line 2',
            'placeholder' => 'Alternative Address ',
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $listener->addElement('text', 'City', array(
            'class' => 'form-control',
            'label' => 'City *',
            'placeholder' => 'City ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $listener->addElement('text', 'State', array(
            'class' => 'form-control',
            'label' => 'State *',
            'placeholder' => 'State ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $listener->addElement('text', 'Zip', array(
            'class' => 'form-control',
            'label' => 'Zip *',
            'placeholder' => 'Zip ',
            'size' => 5,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(5, 5)),
            ),
        ));

        $listener->addElement('text', 'HomePhone', array(
            'class' => 'form-control',
            'label' => 'Home Phone *',
            'placeholder' => 'ex. (xxx) xxx-xxxx ',
            'size' => 10,
            'required' => true,
            'filters' => array('Digits', 'StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $listener->addElement('text', 'CellPhone', array(
            'class' => 'form-control',
            'label' => 'Cell Phone ',
            'placeholder' => 'ex. (xxx) xxx-xxxx ',
            'size' => 10,
            'required' => false,
            'filters' => array('Digits', 'StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $listener->addElement('text', 'Email', array(
            'class' => 'form-control',
            'label' => 'Email',
            'placeholder' => 'E-mail ',
            'size' => 27,
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                'EmailAddress',
            ),
        ));

        $listener->addElement('text', 'Disability', array(
            'class' => 'form-control',
            'label' => 'What is your print disability/reason requesting service? *',
            'placeholder' => 'What is your print disability/reason requesting service? ',
            'required' => true,
            'size' => 62,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
            ),
        ));

        $listener->addElement('text', 'HowLearn', array(
            'class' => 'form-control',
            'label' => 'How did you learn about the Audio Reading Service? *',
            'placeholder' => 'How did you learn about the Audio Reading Service? ',
            'required' => true,
            'size' => 62,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
            ),
        ));

        $race = new Zend_Form_Element_Select('Race');
        $race->setAttrib('class', 'form-control');
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
        $income->setAttrib('class', 'form-control');
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
        $numInHome->setAttrib('class', 'form-control');
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

    public function addContactFields($contact) {
        $contact->addElement('text', 'FirstName', array(
            'class' => 'form-control',
            'label' => 'First Name *',
            'placeholder' => 'First Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));

        $contact->addElement('text', 'LastName', array(
            'class' => 'form-control',
            'label' => 'Last Name *',
            'placeholder' => 'Last Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));

        $contact->addElement('text', 'Relationship', array(
            'class' => 'form-control',
            'label' => 'Relationship to Listener *',
            'placeholder' => 'Relationship To Listener ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alnum', true, array('allowWhiteSpace' => true)),
            ),
        ));

        $contact->addElement('text', 'Address', array(
            'class' => 'form-control',
            'label' => 'Address *',
            'placeholder' => 'Street Address ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $contact->addElement('text', 'AlternativeAddress', array(
            'class' => 'form-control',
            'label' => 'Alternative Address',
            'placeholder' => 'Alternative Address ',
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $contact->addElement('text', 'HomePhone', array(
            'class' => 'form-control',
            'label' => 'Home Phone *',
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
            'class' => 'form-control',
            'label' => 'Cell Phone',
            'placeholder' => 'Cell Phone ',
            'size' => 10,
            'required' => false,
            'filters' => array('Digits', 'StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $contact->addElement('text', 'City', array(
            'class' => 'form-control',
            'label' => 'City *',
            'placeholder' => 'City',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $contact->addElement('text', 'State', array(
            'class' => 'form-control',
            'label' => 'State *',
            'placeholder' => 'State',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $contact->addElement('text', 'Zip', array(
            'class' => 'form-control',
            'label' => 'Zip *',
            'placeholder' => 'Zip',
            'size' => 5,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(5, 5)),
            ),
        ));

        $contact->addElement('text', 'Email', array(
            'class' => 'form-control',
            'label' => 'Email ',
            'placeholder' => 'E-mail',
            'size' => 27,
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                'EmailAddress',
            ),
        ));
    }

    public function addOtherFields($otherInfo) {
        $otherInfo->addElement('radio', 'MailTo', array(
            'class' => 'radio-inline',
            'label' => 'Please Check One *',
            'multiOptions' => array(
                'toListener' => ' Mail radio to listener',
                'toContact' => ' Mail radio to contact person',
            ),
            'required' => true,
        ));
    }

    public function addStatementFields($statement) {
        $statement->addElement('text', 'Signature', array(
            'class' => 'form-control',
            'label' => 'Signature of responsible party *',
            'required' => true,
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                array('Alpha', true, array('allowWhiteSpace' => true)),
            ),
        ));

        $statement->addElement('date', 'SignatureDate', array(
            'class' => 'form-control',
            'label' => 'Date *',
            'required' => true,
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $statement->addElement('checkbox', 'Agree', array(
            //'class' => 'big-checkbox',
            'label' => 'I have read and agree to statement terms * ',
            'required' => true,
            'uncheckedValue' => null
        ));
        $statement->setElementDecorators(array('ViewHelper', 'Label', 'Errors'));
        $statement->getElement('Agree')->setCheckedValue('Yes');
        $statement->getElement('Agree')->setUnCheckedValue('No');

    }
}
