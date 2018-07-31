<?php
class Shivangi_Avi_Block_Adminhtml_Avi extends Mage_Adminhtml_Block_Widget_Grid_Container
{
  public function __construct()
  {
    $this->_controller = 'adminhtml_avi';
    $this->_blockGroup = 'avi';
    $this->_headerText = Mage::helper('avi')->__('Item Manager');
    $this->_addButtonLabel = Mage::helper('avi')->__('Add Item');
    parent::__construct();
  }
}