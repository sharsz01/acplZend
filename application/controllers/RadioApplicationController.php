<?php

class RadioApplicationController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function indexAction()
    {
        // action body
        
    }
    
    public function radioFormAction(){
        $request = $this->getRequest();
        $form = new Application_Form_RadioApplicationForm();
        
        if($this->getRequest()->isPost()){
            if($form->isValid($request->getPost())){
                
                return $this->_helper->redirector('index');
            }
        }
        
        $this->view->form = $form;
    }
}

