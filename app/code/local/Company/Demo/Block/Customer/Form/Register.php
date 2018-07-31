<?php
/**
 * Created by PhpStorm.
 * User: shivangi
 * Date: 6/20/2018
 * Time: 8:53 PM
 */ 
class Company_Demo_Block_Customer_Form_Register extends Mage_Customer_Block_Form_Register {

   /* public function getPostActionUrl()
    {
        return "www.abc.com";
    }*/

    public function isNewsletterEnabled()
    {
        return false;
    }

}