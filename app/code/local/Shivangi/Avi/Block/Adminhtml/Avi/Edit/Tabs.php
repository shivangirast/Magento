<?php

class Shivangi_Avi_Block_Adminhtml_Avi_Edit_Tabs extends Mage_Adminhtml_Block_Widget_Tabs
{

  public function __construct()
  {
      parent::__construct();
      $this->setId('avi_tabs');
      $this->setDestElementId('edit_form');
      $this->setTitle(Mage::helper('avi')->__('Item Information'));
  }

  protected function _beforeToHtml()
  {
      $this->addTab('form_section', array(
          'label'     => Mage::helper('avi')->__('Item Information'),
          'title'     => Mage::helper('avi')->__('Item Information'),
          'content'   => $this->getLayout()->createBlock('avi/adminhtml_avi_edit_tab_form')->toHtml(),
      ));
     
      return parent::_beforeToHtml();
  }
}