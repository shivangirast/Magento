<?php
/**
 * Created by PhpStorm.
 * User: shivangi
 * Date: 6/18/2018
 * Time: 10:28 AM
 */

class Company_Demo_Model_Company extends Mage_Core_Model_Abstract{

    public function _construct()
    {
        $this->_init('company/company');
    }

}