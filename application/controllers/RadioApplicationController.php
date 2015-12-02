<?php

class RadioApplicationController extends Zend_Controller_Action {

    public function init() {
        /* Initialize action controller here */
    }

    public function indexAction() {
        // action body
    }
    
    public function organizationFormAction(){
        $request = $this->getRequest();
        $form = new Application_Form_OrganizationForm();
        
        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {

                // if form is valid, then save submitted data in a session
                $addRadioFormNamespace = new Zend_Session_Namespace('data');
                $addRadioFormNamespace->postData = $form->getValues();
                $addRadioFormNamespace->lock();

                // redirect to the second stage
                return $this->_redirect('radio-application/confirm');
            }
            else{
                
            }
        }
        $this->view->form = $form;
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

                // redirect to the second stage
                return $this->_redirect('radio-application/confirm');
            }
            else{
                
            }
        }
        $this->view->form = $form;
    }

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
                $listenerVals = $sessionData->postData['listener'];
                $contactVals = $sessionData->postData['contact'];
                $otherInfoVals = $sessionData->postData['otherInfo'];
                $statementVals = $sessionData->postData['statement'];

                $this->insertRecord($listenerVals, $contactVals, $otherInfoVals, $statementVals);

                // don't need session namespace anymore so delete
                Zend_Session::namespaceUnset('data');

                // redirect to success confirmation page
                return $this->_redirect('radio-application/success');
            }
        }

        $this->view->form = $form;
    }

    public function successAction() {
        // returns the success message upon form submission
    }

    
    // ========================================================== helper methods
    
    
    public function insertRecord($listenerVals, $contactVals, $otherInfoVals, $statementVals) {
        
        $user = new Application_Model_User();

        

        $user->createUser(array(
            'firstName' => $listenerVals['FirstName'],
            'lastName' => $listenerVals['LastName'],
            'birthday' => $listenerVals['Birthdate'],
            'street' => $listenerVals['Address'],
            'streetLine2' => $listenerVals['AlternativeAddress'],
            'phone' => $listenerVals['HomePhone'],
            'altPhone' => $listenerVals['CellPhone'],
            'city' => $listenerVals['City'],
            'state' => $listenerVals['State'],
            'zip' => $listenerVals['Zip'],
            'email' => $listenerVals['Email'],
            'contactName' => $contactVals['FirstName'],
            'contactRelationship' => $contactVals['Relationship'],
            'contactStreet' => $contactVals['Address'],
            'contactStreetLine2' => $contactVals['AlternativeAddress'],
            'contactPhone' => $contactVals['HomePhone'],
            'contactAltPhone' => $contactVals['CellPhone'],
            'contactCity' => $contactVals['City'],
            'contactState' => $contactVals['State'],
            'contactZip' => $contactVals['Zip'],
            'contactEmail' => $contactVals['Email'],
            'disability' => $listenerVals['Disability'],
            'howLearn' => $listenerVals['HowLearn'],
            'race' => $listenerVals['Race'],
            'income' => $listenerVals['Income'],
            'inHomeNum' => $listenerVals['NumberInHome'],
            'signature' => $statementVals['Signature'],
            'dateSigned' => $statementVals['SignatureDate'],
            'mailTo' => $otherInfoVals['MailTo'],
        ));
    }
}