<?php

class Bootstrap extends Zend_Application_Bootstrap_Bootstrap {

    protected function _initMysql() {
        $this->bootstrap('db');
        switch (APPLICATION_ENV) {

            case 'development' :
                // this allows you to profile your queries through the firebug console 
                $profiler = new Zend_Db_Profiler_Firebug('System Queries');
                $profiler->setEnabled(true);
                $this->getPluginResource('db')->getDbAdapter()->setProfiler($profiler);
                break;

            case 'production' :
                // if you use meta caching in production, which you should :)
                // Zend_Db_Table_Abstract::setDefaultMetadataCache($this->_cache);
                break;
        }
    }

}
