<?php

class Application_Model_User
{
    private $_dbTable;
    
    public function __construct($table) {
        if(strcmp($table, "user") == 0){
            $this->_dbTable = new Application_Model_DbTable_User();
        }
        else{
            $this->_dbTable = new Application_Model_DbTable_Organization();
        }
        
    }
    
    public function createUser($array){
        $this->_dbTable->insert($array);
    }
    
    public function updateUser($array, $id){
        $this->_dbTable->update($array, "userid = $id");
    }
}

