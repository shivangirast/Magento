<?php

class Shivangi_Avi_Model_Mysql4_Avi extends Mage_Core_Model_Mysql4_Abstract
{
    public function _construct()
    {    
        // Note that the avi_id refers to the key field in your database table.
        $this->_init('avi/avi', 'avi_id');
    }
}