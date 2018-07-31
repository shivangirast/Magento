<?php

class Shivangi_Avi_Model_Mysql4_Avi_Collection extends Mage_Core_Model_Mysql4_Collection_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('avi/avi');
    }
}