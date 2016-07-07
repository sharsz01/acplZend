<?php

class Application_Form_OrganizationForm extends Zend_Form {

    public function init() {
        $this->setAttrib('id', 'org-form-app');

        // subforms
        $organization = new Zend_Form_SubForm();
        $statement = new Zend_Form_SubForm();
        
        // Set subform where elements belong to avoid name clashing
        $organization->setElementsBelongTo('organizationForm');
        $statement->setElementsBelongTo('statementForm');
        
        // subform section names
        //$organization->setLegend("ORGANIZATION");
        //$statement->setLegend("STATEMENT OF AGREEMENT AND RESPONSIBILITY");

        // Set the method for the display form to POST
        $this->setMethod('post');

        // ========================================================== add fields
        $this->addOrganizationFields($organization);
        $this->addStatementFields($statement);
        
        // =====================================================================
        // Add subforms to main form
        $this->addSubForms(array(
            'organization' => $organization,
            'statement' => $statement,
        ));

        // Add the submit button
        $this->addElement('submit', 'submit', array(
            'class' => 'btn btn-info pull-right',
            'ignore' => true,
            'label' => 'Submit Application',
        ));
    }

    public function addOrganizationFields($organization) {
        $organization->addElement('text', 'OrgName', array(
            'class' => 'form-control',
            'label' => 'Organization Name *',
            'placeholder' => 'Organization Name ',
            'size' => 48,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $organization->addElement('text', 'OrgType', array(
            'class' => 'form-control',
            'label' => 'Type of Organization *',
            'placeholder' => 'Type of Organizaiton ',
            'size' => 48,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $organization->addElement('text', 'FirstName', array(
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

        $organization->addElement('text', 'LastName', array(
            'class' => 'form-control',
            'label' => 'Last Name *',
            'placeholder' => 'Last Name ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            //'validators' => array(
            //   "Alpha",
            //),
        ));

        $organization->addElement('text', 'PositionTitle', array(
            'class' => 'form-control',
            'label' => 'Position Title *',
            'placeholder' => 'Position Title ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', array('Label', array('class' => 'align')), 'Errors'),
            
        ));

        $organization->addElement('text', 'Address', array(
            'class' => 'form-control',
            'label' => 'Street Address *',
            'placeholder' => 'Street Address ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $organization->addElement('text', 'AlternativeAddress', array(
            'class' => 'form-control',
            'label' => 'Address Line 2',
            'placeholder' => 'Alternative Address ',
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $organization->addElement('text', 'City', array(
            'class' => 'form-control',
            'label' => 'City *',
            'placeholder' => 'City ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $organization->addElement('text', 'State', array(
            'class' => 'form-control',
            'label' => 'State *',
            'placeholder' => 'State ',
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));

        $organization->addElement('text', 'Zip', array(
            'class' => 'form-control',
            'label' => 'Zip *',
            'placeholder' => 'Zip ',
            'size' => 10,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(5, 5)),
            ),
        ));

        $organization->addElement('text', 'OfficePhone', array(
            'id' => 'OfficePhone',
            'class' => 'form-control phone',
            'label' => 'Office Phone *',
            'placeholder' => 'ex. (xxx) xxx-xxxx ',
            'size' => 10,
            'required' => true,
            'filters' => array('Digits', 'StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $organization->addElement('text', 'CellPhone', array(
            'class' => 'form-control phone',
            'label' => 'Cell Phone',
            'placeholder' => 'ex. (xxx) xxx-xxxx ',
            'size' => 10,
            'required' => false,
            'filters' => array('Digits', 'StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits", array('StringLength', false, array(10, 11)),
            ),
        ));

        $organization->addElement('text', 'Email', array(
            'class' => 'form-control',
            'label' => 'Email *',
            'placeholder' => 'E-mail ',
            'size' => 32,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                'EmailAddress',
            ),
        ));
        
        /*
        $organization->addElement('checkbox', 'LicBedsCheck', array(
           'id' => 'bNum',
           'class' => 'checkbox-inline big-checkbox',
           'label' => 'My hospital provides a system-wide signal',
        ));
        */
        
        $organization->addElement('text', 'RadioNum', array(
            'id' => 'radioNum',
            'class' => 'form-control',
            'label' => 'How many radios are you requesting? *',
            'placeholder' => ' ',
            'size' => 48,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits"
            ),
        ));

        $organization->addElement('text', 'LicBedsNum', array(
            'id' => 'licBedsNum',
            'class' => 'form-control',
            'label' => 'Number of Licensed Beds: ',
            'placeholder' => ' ',
            'size' => 48,
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits"
            ),
        ));
        
        $organization->addElement('text', 'ResUnitsNum', array(
            'id' => 'resUnitsNum',
            'class' => 'form-control',
            'label' => 'Number of Residential Units: ',
            'placeholder' => ' ',
            'size' => 48,
            'required' => false,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            'validators' => array(
                "Digits"
            ),
        ));

        $organization->addElement('text', 'HowLearn', array(
            'class' => 'form-control',
            'label' => 'How did you learn about the Audio Reading Service? *',
            'placeholder' => ' ',
            'size' => 48,
            'required' => true,
            'filters' => array('StringTrim'),
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));
        
    }

    public function addStatementFields($statement) {

        $statement->addElement('text', 'Signature', array(
            'class' => 'form-control',
            'label' => 'Staff Signature *',
            'required' => true,
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
            //'validators' => array(
            //    array('Alpha', true, array('allowWhiteSpace' => true)),
            //),
        ));

        /*
        $statement->addElement('text', 'SignatureDate', array(
            'class' => 'dateselector-fdt',
            'label' => 'Date *',
            //'required' => true,   // change to true when ready
            'decorators' => array('ViewHelper', 'Label', 'Errors'),
        ));
        */
        
        $statement->addElement('checkbox', 'Agree', array(
            'id' => 'agree',
            'class' => 'checkbox-inline big-checkbox',
            'label' => 'I have read and agree to statement terms * ',
            'required' => true,
            'uncheckedValue' => null
        ));
        $statement->setElementDecorators(array('ViewHelper', 'Label', 'Errors'));
        $statement->getElement('Agree')->setCheckedValue('Yes');
        $statement->getElement('Agree')->setUnCheckedValue('No');
       
    }
}
