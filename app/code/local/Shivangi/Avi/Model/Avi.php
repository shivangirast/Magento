<?php

class Shivangi_Avi_Model_Avi extends Mage_Core_Model_Abstract
{
    public function _construct()
    {
        parent::_construct();
        $this->_init('avi/avi');
    }
}