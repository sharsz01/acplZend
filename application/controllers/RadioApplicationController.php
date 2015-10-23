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

                $user = new Application_Model_User();

                // ==============================================
                // temp - refactor to diff method
                dbPostUser($user, $request);
                
                // ==============================================
                //$user->createUser($request->getPost());
                //return $this->_helper->redirector('index');
            }
        }
        $this->view->form = $form;
    }

    // temp finished - adds new user record for the radio application form
    // will need to modify when the database table for users is changed to use
    // the new form fields that were added
    public function dbPostUser($user, $request) {
        $listenerVals = $request->getPost()['listener'];
        $contactVals = $request->getPost()['contact'];
        $otherInfoVals = $request->getPost()['otherInfo'];
        $statementVals = $request->getPost()['statement'];

        $user->createUser(array(
            'name' => $listenerVals['firstName'],
            'birthday' => $listenerVals['birthdate'],
            'street' => $listenerVals['address'],
            'phone' => $listenerVals['primaryPhone'],
            'city' => $listenerVals['city'],
            'state' => $listenerVals['state'],
            'zip' => $contactVals['zip'],
            'contactName' => $contactVals['firstName'],
            'contactRelationship' => $contactVals['relationship'],
            'contactStreet' => $contactVals['address'],
            'contactPhone' => $contactVals['primaryPhone'],
            'contactCity' => $contactVals['city'],
            'contactState' => $contactVals['state'],
            'contactZip' => $contactVals['zip'],
            'contactEmail' => $contactVals['email'],
            'disability' => $otherInfoVals['disability'],
            'howLearn' => $otherInfoVals['howLearn'],
            'race' => $otherInfoVals['race'],
            'income' => $otherInfoVals['income'],
            'inHomeNum' => $otherInfoVals['numInHome'],
            'signature' => $statementVals['signature'],
            'dateSigned' => $statementVals['signatureDate'],
            'mailTo' => $otherInfoVals['mailTo'],
        ));
    }
}
