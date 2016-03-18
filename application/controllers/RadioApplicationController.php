<?php

class RadioApplicationController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        // action body
    }

    public function radioFormAction() {
        $request = $this->getRequest();
        $form = new Application_Form_RadioApplicationForm();

        if ($this->getRequest()->isPost()) {

            if ($form->isValid($request->getPost())) {

                // if form is valid, then save submitted data in a session
                $addRadioFormNamespace = new Zend_Session_Namespace('data');
                $addRadioFormNamespace->postData = $form->getValues();
                $addRadioFormNamespace->lock();

                // redirect to the confirmation page
                return $this->_redirect('radio-application/confirm');
            } else {
                
            }
        }
        $this->view->form = $form;
    }

    public function organizationFormAction() {
        $request = $this->getRequest();
        $form = new Application_Form_OrganizationForm();

        if ($this->getRequest()->isPost()) {

            if ($form->isValid($request->getPost())) {

                // if form is valid, then save submitted data in a session
                $addRadioFormNamespace = new Zend_Session_Namespace('data');
                $addRadioFormNamespace->postData = $form->getValues();
                $addRadioFormNamespace->lock();

                // redirect to the confirmation
                return $this->_redirect('radio-application/confirm2');
            } else {
                
            }
        }
        $this->view->form = $form;
    }

    // ========================================================== confirmation actions
    // Confirmation for individual form
    public function confirmAction() {
        // retrieve data saved in the first stage
        $sessionData = new Zend_Session_Namespace('data');

        if (null === $sessionData->postData) {
            return $this->_redirect('radio-application/radio-form');
        }

        $form = new Application_Form_Confirm();

        if ($this->getRequest()->isPost()) {
            if ($form->isValid(filter_input_array(INPUT_POST))) {

                // add to database, etc.
                $listenerVals = $sessionData->postData['listenerForm'];
                $contactVals = $sessionData->postData['contactForm'];
                $otherInfoVals = $sessionData->postData['otherInfoForm'];
                $statementVals = $sessionData->postData['statementForm'];

                $this->insertIndividualRecord($listenerVals, $contactVals, $otherInfoVals, $statementVals);

                // don't need session namespace anymore so delete
                Zend_Session::namespaceUnset('data');

                // redirect to success confirmation page
                return $this->_redirect('radio-application/success?page=ind');
            }
        }

        $this->view->form = $form;
    }

    // Confirmation for organizational form
    public function confirm2Action() {
        // retrieve data saved in the first stage
        $sessionData = new Zend_Session_Namespace('data');

        if (null === $sessionData->postData) {
            return $this->_redirect('radio-application/organization-form');
        }

        $form = new Application_Form_Confirm();

        if ($this->getRequest()->isPost()) {
            if ($form->isValid(filter_input_array(INPUT_POST))) {

                // add to database, etc.
                $organizationVals = $sessionData->postData['organizationForm'];
                $statementVals = $sessionData->postData['statementForm'];
                //$closingVals = $sessionData->postData['closing'];

                $this->insertOrganizationRecord($organizationVals, $statementVals);

                // don't need session namespace anymore so delete
                Zend_Session::namespaceUnset('data');

                // redirect to success confirmation page
                return $this->_redirect('radio-application/success?page=org');
            }
        }

        $this->view->form = $form;
    }

    // ==========================================================

    public function successAction() {
        // returns the success message upon form submission
    }

    // ========================================================== helper methods

    public function insertOrganizationRecord($organizationVals, $statementVals) {
        $org = new Application_Model_User('organization');

        $org->createUser(array(
            'dateRegistered' => '0000-00-00', // Default
            'ipRegistered' => '', // Default
            'organizationName' => $organizationVals['OrgName'],
            'organizationType' => $organizationVals['OrgType'],
            'firstName' => $organizationVals['FirstName'],
            'lastName' => $organizationVals['LastName'],
            'positionTitle' => $organizationVals['PositionTitle'],
            'street' => $organizationVals['Address'],
            'streetLine2' => $organizationVals['AlternativeAddress'],
            'city' => $organizationVals['City'],
            'state' => $organizationVals['State'],
            'zip' => $organizationVals['Zip'],
            'phone' => $organizationVals['OfficePhone'],
            'phone2' => $organizationVals['CellPhone'],
            'email' => $organizationVals['Email'],
            'numRadios' => $organizationVals['RadioNum'],
            'numLicensedBeds' => $organizationVals['LicBedsNum'],
            'numResidentialUnits' => $organizationVals['ResUnitsNum'],
            'howLearn' => $organizationVals['HowLearn'],
            'status' => 'Applicant', // Default
            'type' => 'Organization', // Default
            'medium' => 'Radio', // Default
            'signature' => $statementVals['Signature'],
            'dateSigned' => date("Y-m-d"),
            'notes' => '',
        ));
    }

    public function insertIndividualRecord($listenerVals, $contactVals, $otherInfoVals, $statementVals) {
        $user = new Application_Model_User('user');

        // convert date to db format --- refactor later
        $bday = strtotime($listenerVals['Birthdate']);
        $bdayFormat = date("Y-m-d", $bday);
        // ============================================
        
        $user->createUser(array(
            'dateRegistered' => '0000-00-00', // Default
            'ipRegistered' => '', // Default
            'firstName' => $listenerVals['FirstName'],
            'lastName' => $listenerVals['LastName'],
            'birthday' => $listenerVals['Birthdate'],
            'birthday' => $bdayFormat,
            'street' => $listenerVals['Address'],
            'streetLine2' => $listenerVals['AlternativeAddress'],
            'phone' => $listenerVals['HomePhone'],
            'phone2' => $listenerVals['CellPhone'],
            'city' => $listenerVals['City'],
            'state' => $listenerVals['State'],
            'zip' => $listenerVals['Zip'],
            'email' => $listenerVals['Email'],
            'contactFirstName' => $contactVals['FirstName'],
            'contactLastName' => $contactVals['LastName'],
            'contactRelationship' => $contactVals['Relationship'],
            'contactStreet' => $contactVals['Address'],
            'contactStreetLine2' => $contactVals['AlternativeAddress'],
            'contactPhone' => $contactVals['HomePhone'],
            'contactPhone2' => $contactVals['CellPhone'],
            'contactCity' => $contactVals['City'],
            'contactState' => $contactVals['State'],
            'contactZip' => $contactVals['Zip'],
            'contactEmail' => $contactVals['Email'],
            'disability' => $listenerVals['Disability'],
            'otherDisability' => $listenerVals['OtherDisability'],
            'howLearn' => $listenerVals['HowLearn'],
            'race' => $listenerVals['Race'],
            'income' => $listenerVals['Income'],
            'inHomeNum' => $listenerVals['NumberInHome'],
            'status' => 'Applicant', // Default
            'type' => 'Individual', // Default
            'medium' => 'Radio', // Default
            'signature' => $statementVals['Signature'],
            'dateSigned' => date("Y-m-d"),
            'mailTo' => $otherInfoVals['MailTo'],
            'notes' => '',
        ));
    }

}
