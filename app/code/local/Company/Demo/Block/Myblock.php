<?php
/**
 * Created by PhpStorm.
 * User: shivangi
 * Date: 6/17/2018
 * Time: 8:48 PM
 */

class Company_Demo_Block_Myblock extends Mage_Core_Block_Template{

public function getName(){
    return "Shivangi" ;
}
public function getFormActionURL(){
    return Mage::getUrl('avi/index/save');
}
}