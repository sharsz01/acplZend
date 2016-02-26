<?php

class ReturnRadioController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function returnAction()
    {
        $request = $this->getRequest();
        $form = new Application_Form_Returns();

        if ($this->getRequest()->isPost()) {
            
            if ($form->isValid($request->getPost())) {

                // if form is valid, then save submitted data in a session
                $addRadioFormNamespace = new Zend_Session_Namespace('data');
                $addRadioFormNamespace->postData = $form->getValues();
                $addRadioFormNamespace->lock();

                // redirect to the second stage
                //return $this->_redirect('radio-application/confirm');
            }
            else{
                
            }
        }
        $this->view->form = $form;
    }


}



