<?php
/**
 * Created by PhpStorm.
 * User: shivangi
 * Date: 6/17/2018
 * Time: 7:40 PM
 */

class Company_Demo_IndexController extends Mage_Core_Controller_Front_Action{
    public function babyAction() {

     $this->loadLayout()->renderLayout();

    }

    public function saveAction(){

        //echo "<pre>";
        $collection = Mage::getModel('customer/customer')->load(1);
        //print_r($collection->getData());
        $collection->delete();

        echo "Success";

    }

    public function checkAction(){


    }
}