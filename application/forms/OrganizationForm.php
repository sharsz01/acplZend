<?php

class Application_Form_OrganizationForm extends Zend_Form {

    public function init() {
        $this->setAttrib('id', 'org-form-app');

        // subforms
        $organization = new Zend_Form_SubForm();
        $statement = new Zend_Form_SubForm();
        //$closing = new Zend_Form_SubForm();

        $organization->setElementDecorators(array('ViewHelper', 'Label'));
        $statement->setElementDecorators(array('ViewHelper', 'Label'));

        // subform section names
        $organization->setLegend("ORGANIZATION");
        $statement->setLegend("STATEMENT OF AGREEMENT AND RESPONSIBILITY");

        // Set the method for the display form to POST
        $this->setMethod('post');

        // ========================================================== add fields
        $this->addOrganizationFields($organization);
        $this->addStatementFields($statement);
        //$this->addClosingFields($closing);

        // =====================================================================
        // Add subforms to main form
        $this->addSubForms(array(
            'organization' => $organization,
            'statement' => $statement,
            //'closing' => $closing
        ));

        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'ignore' => true,
            'label' => 'Submit Application',
            'class' => 'btn btn-primary'
        ));
    }

    public function addOrganizationFields($organization) {
        $organization->addElement('text', 'OrgName', array(
            'label' => 'Org. Name *',
            'placeholder' => 'Organization Name ',
            'size' => 48,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $organization->addElement('text', 'OrgType', array(
            'label' => 'Type of Org. *',
            'placeholder' => 'Type of Organizaiton ',
            'size' => 48,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));


        $organization->addElement('text', 'FirstName', array(
            'label' => 'Staff Rep. *',
            'placeholder' => 'First Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));

        $organization->addElement('text', 'LastName', array(
            'label' => '*',
            'placeholder' => 'Last Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));

        $organization->addElement('text', 'PositionTitle', array(
            'label' => '*',
            'placeholder' => 'Position Title ',
            'size' => 10,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
            'validators' => array(
                "Alpha",
            ),
        ));

        $organization->addElement('text', 'Address', array(
            'label' => 'Address *',
            'placeholder' => 'Street Address ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $organization->addElement('text', 'AlternativeAddress', array(
            'label' => '-',
            'placeholder' => 'Alternative Address ',
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'hide')), 'Errors'),
        ));

        $organization->addElement('text', 'City', array(
            'label' => '*',
            'placeholder' => 'City ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
//            'validators' => array(
//                array('Alpha', true, array('allowWhiteSpace' => true)),
//            ),
        ));

        $organization->addElement('text', 'State', array(
            'label' => '*',
            'placeholder' => 'State ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
//            'validators' => array(
//                array('Alpha', true, array('allowWhiteSpace' => true)),
//            ),
        ));

        $organization->addElement('text', 'Zip', array(
            'label' => '*',
            'placeholder' => 'Zip ',
            'size' => 10,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(5, 5)),
            ),
        ));

        $organization->addElement('text', 'HomePhone', array(
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

        $organization->addElement('text', 'CellPhone', array(
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


        $organization->addElement('text', 'Email', array(
            'label' => '*',
            'placeholder' => 'E-mail ',
            'size' => 32,
            'required' => true,
            'filters' => array('StringTrim'),
            'validators' => array(
                'EmailAddress',
            ),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
        ));

        $organization->addElement('text', 'RadioNum', array(
            'label' => '*',
            'placeholder' => 'How many Radios are you requesting? ',
            'size' => 48,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits"
            ),
        ));

        $organization->addElement('text', 'HowLearn', array(
            'label' => '*',
            'placeholder' => 'How did you learn about the Audio Reading Service? ',
            'size' => 48,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));


        // ================== Display Groups
        $organization->addDisplayGroup(array('OrgName'), 'one', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $organization->addDisplayGroup(array('OrgType'), 'two', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $organization->addDisplayGroup(array('FirstName', 'LastName', 'PositionTitle'), 'first', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $organization->addDisplayGroup(array('Address', 'AlternativeAddress'), 'first2', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $organization->addDisplayGroup(array('City', 'State', 'Zip'), 'first4', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $organization->addDisplayGroup(array('HomePhone', 'CellPhone', 'Email'), 'first5', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $organization->addDisplayGroup(array('RadioNum'), 'first6', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $organization->addDisplayGroup(array('HowLearn'), 'first7', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));
    }

    public function addStatementFields($statement) {
        $statement->addElement('hidden', 'plaintext', ['description' => 'I understand that the Audio Reading Service radios '
            . 'are on loan to my organization and remain the property of the '
            . 'Allen County Public Library. I understand I must return radios to '
            . 'the Audio Reading Service when they are no longer needed.',
            'ignore' => true,
            'decorators' => array(
                array('Description', array('HtmlTag', array('tag' => 'div', 'class' => 'element'))),
            ),
        ]);

        $statement->addElement('text', 'Signature', array(
            'label' => 'Staff Signature *',
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
        
        $statement->addElement('checkbox', 'Agree', array(
            'label' => 'I have read and agree to statement terms',
            'required' => true,
            'uncheckedValue' => null
        ));
        //$statement->setElementDecorators(array('ViewHelper', 'Label', 'Errors'));
        $statement->getElement('Agree')->setCheckedValue('Yes');
        $statement->getElement('Agree')->setUnCheckedValue('No');
        
        $statement->addDisplayGroup(array('plaintext'), 'ninth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'element')),
            )
        ));

        $statement->addDisplayGroup(array('Signature', 'SignatureDate'), 'sixth', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'signElement')),
            )
        ));
        
        $statement->addDisplayGroup(array('Agree'), 'seventh', array(
            'decorators' => array(
                'FormElements',
                array('HtmlTag', array('tag' => 'div', 'class' => 'agree')),
            )
        ));
    }

//    public function addClosingFields($closing) {
//        $closing->addElement('checkbox', 'Agree', array(
//            'label' => 'I have read and agree to statement terms',
//            'required' => true,
//            'uncheckedValue' => null
//        ));
//        $closing->setElementDecorators(array('ViewHelper', 'Label', 'Errors'));
//    }
}
