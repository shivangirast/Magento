<?php
/**
 * Created by PhpStorm.
 * User: shivangi
 * Date: 6/18/2018
 * Time: 10:39 AM
 */

class Company_Demo_Model_Resource_Company_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * Initialize resource
     *
     */
    public function _construct()
    {
        $this->_init('company/company');
    }
}