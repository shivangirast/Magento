<?php
/**
 * Created by PhpStorm.
 * User: shivangi
 * Date: 6/21/2018
 * Time: 6:56 PM
 */

class Company_Demo_Model_Observer extends Varien_Event_Observer {

    public function functionName($observer)
    {
        Mage::log("Observer callled");
        $customer = $observer->getCustomer();
        Mage::log($customer->getData());
    }

    public function observerFunction($observer)
    {
        Mage::log("Product Observer callled");

        $product = $observer->getProduct();
        Mage::log($product->getId());
        Mage::log($product->getName());
    }
}