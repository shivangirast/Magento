<?php

class Shivangi_Avi_Block_Adminhtml_Avi_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    public function __construct()
    {
        parent::__construct();
                 
        $this->_objectId = 'id';
        $this->_blockGroup = 'avi';
        $this->_controller = 'adminhtml_avi';
        
        $this->_updateButton('save', 'label', Mage::helper('avi')->__('Save Item'));
        $this->_updateButton('delete', 'label', Mage::helper('avi')->__('Delete Item'));
		
        $this->_addButton('saveandcontinue', array(
            'label'     => Mage::helper('adminhtml')->__('Save And Continue Edit'),
            'onclick'   => 'saveAndContinueEdit()',
            'class'     => 'save',
        ), -100);

        $this->_formScripts[] = "
            function toggleEditor() {
                if (tinyMCE.getInstanceById('avi_content') == null) {
                    tinyMCE.execCommand('mceAddControl', false, 'avi_content');
                } else {
                    tinyMCE.execCommand('mceRemoveControl', false, 'avi_content');
                }
            }

            function saveAndContinueEdit(){
                editForm.submit($('edit_form').action+'back/edit/');
            }
        ";
    }

    public function getHeaderText()
    {
        if( Mage::registry('avi_data') && Mage::registry('avi_data')->getId() ) {
            return Mage::helper('avi')->__("Edit Item '%s'", $this->htmlEscape(Mage::registry('avi_data')->getTitle()));
        } else {
            return Mage::helper('avi')->__('Add Item');
        }
    }
}