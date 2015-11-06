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

                // redirect to the second stage
                return $this->_redirect('radio-application/confirm');
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

        // convert to date format -- refactor to method later **
        $bday = $listenerVals['birthdate']['year'] . '/' . $listenerVals['birthdate']['month'] . '/' . $listenerVals['birthdate']['day'];
        $signDay = $statementVals['signatureDate']['year'] . '/' . $statementVals['signatureDate']['month'] . '/' . $statementVals['signatureDate']['day'];

        $time1 = strtotime($bday);
        $time2 = strtotime($signDay);

        $f1 = date('Y-m-d', $time1);
        $f2 = date('Y-m-d', $time2);
        // =============================================================

        $user->createUser(array(
            'firstName' => $listenerVals['firstName'],
            'lastName' => $listenerVals['lastName'],
            'birthday' => $f1,
            'street' => $listenerVals['address'],
            'streetLine2' => $listenerVals['address2'],
            'phone' => $listenerVals['primaryPhone'],
            'altPhone' => $listenerVals['secondaryPhone'],
            'city' => $listenerVals['city'],
            'state' => $listenerVals['state'],
            'zip' => $listenerVals['zip'],
            'email' => $listenerVals['email'],
            'contactName' => $contactVals['firstName'],
            'contactRelationship' => $contactVals['relationship'],
            'contactStreet' => $contactVals['address'],
            'contactStreetLine2' => $contactVals['address2'],
            'contactPhone' => $contactVals['primaryPhone'],
            'contactAltPhone' => $contactVals['secondaryPhone'],
            'contactCity' => $contactVals['city'],
            'contactState' => $contactVals['state'],
            'contactZip' => $contactVals['zip'],
            'contactEmail' => $contactVals['email'],
            'disability' => $listenerVals['disability'],
            'howLearn' => $listenerVals['howLearn'],
            'race' => $listenerVals['race'],
            'income' => $listenerVals['income'],
            'inHomeNum' => $listenerVals['numInHome'],
            'signature' => $statementVals['signature'],
            'dateSigned' => $f2,
            'mailTo' => $otherInfoVals['mailTo'],
        ));
    }
}