<?php

class Shivangi_Avi_Block_Adminhtml_Avi_Edit_Tab_Form extends Mage_Adminhtml_Block_Widget_Form
{
  protected function _prepareForm()
  {
      $form = new Varien_Data_Form();
      $this->setForm($form);
      $fieldset = $form->addFieldset('avi_form', array('legend'=>Mage::helper('avi')->__('Item information')));
     
      $fieldset->addField('title', 'text', array(
          'label'     => Mage::helper('avi')->__('Title'),
          'class'     => 'required-entry',
          'required'  => true,
          'name'      => 'title',
      ));

      $fieldset->addField('filename', 'file', array(
          'label'     => Mage::helper('avi')->__('File'),
          'required'  => false,
          'name'      => 'filename',
	  ));
		
      $fieldset->addField('status', 'select', array(
          'label'     => Mage::helper('avi')->__('Status'),
          'name'      => 'status',
          'values'    => array(
              array(
                  'value'     => 1,
                  'label'     => Mage::helper('avi')->__('Enabled'),
              ),

              array(
                  'value'     => 2,
                  'label'     => Mage::helper('avi')->__('Disabled'),
              ),
          ),
      ));
     
      $fieldset->addField('content', 'editor', array(
          'name'      => 'content',
          'label'     => Mage::helper('avi')->__('Content'),
          'title'     => Mage::helper('avi')->__('Content'),
          'style'     => 'width:700px; height:500px;',
          'wysiwyg'   => false,
          'required'  => true,
      ));
     
      if ( Mage::getSingleton('adminhtml/session')->getAviData() )
      {
          $form->setValues(Mage::getSingleton('adminhtml/session')->getAviData());
          Mage::getSingleton('adminhtml/session')->setAviData(null);
      } elseif ( Mage::registry('avi_data') ) {
          $form->setValues(Mage::registry('avi_data')->getData());
      }
      return parent::_prepareForm();
  }
}