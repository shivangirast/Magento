<?php
/**
 * Created by PhpStorm.
 * User: shivangi
 * Date: 6/27/2018
 * Time: 7:56 PM
 */

class Company_Demo_Adminhtml_IndexController extends Mage_Adminhtml_Controller_Action{

    public function indexAction()
    {
        $this->_title($this->__('Customers'))->_title($this->__('Manage Customers'));

        if ($this->getRequest()->getQuery('ajax')) {
            $this->_forward('grid');
            return;
        }
        $this->loadLayout();

        /**
         * Set active menu item
         */
        $this->_setActiveMenu('customer/manage');

        /**
         * Append customers block to content
         */
        $this->_addContent(
            $this->getLayout()->createBlock('adminhtml/customer', 'customer')
        );

        /**
         * Add breadcrumb item
         */
        $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Customers'), Mage::helper('adminhtml')->__('Customers'));
        $this->_addBreadcrumb(Mage::helper('adminhtml')->__('Manage Customers'), Mage::helper('adminhtml')->__('Manage Customers'));

        $this->renderLayout();
    }

}