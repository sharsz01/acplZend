<?php

class AdminController extends Zend_Controller_Action
{

    public function init()
    {
        /* Initialize action controller here */
    }

    public function adminAction()
    {
        // action body
        $this->_redirect('../../application/admin/admin.php');
        
    }


}



