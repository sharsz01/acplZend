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

        $listenerVals = $request->getPost()['listener'];
        $contactVals = $request->getPost()['contact'];
        $otherInfoVals = $request->getPost()['otherInfo'];
        $statementVals = $request->getPost()['statement'];

        if ($this->getRequest()->isPost()) {
            if ($form->isValid($request->getPost())) {

                $user = new Application_Model_User();

                header("confirmation.phtml");

                // ==============================================
                // temp - refactor to diff method
                //dbPostUser($user, $request);
                // =============================================================
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

                // ==============================================
                //$user->createUser($request->getPost());
                //return $this->_helper->redirector('confirmation');
                return $this->_helper->redirector('radio-form');
            } else {
                //return $this->_helper->redirector('confirmation');
            }
        }
        $this->view->form = $form;
    }

    public function confirmationAction() {
        
    }

}
