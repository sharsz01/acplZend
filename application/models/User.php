<?php

class Application_Model_User
{
    private $_dbTable;
    
    public function __construct($table) {
        // Determine if to use the 'user' table or 'organization' table
        if(strcmp($table, "user") == 0){
            $this->_dbTable = new Application_Model_DbTable_User();
        }
        else{
            $this->_dbTable = new Application_Model_DbTable_Organization();
        }
        
    }
    
    // Insert record to table
    public function createUser($array){
        $this->_dbTable->insert($array);
    }
    
    // Update record in table
    public function updateUser($array, $id){
        $this->_dbTable->update($array, "userid = $id");
    }
}

