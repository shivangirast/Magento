<?php
class Shivangi_Avi_Block_Avi extends Mage_Core_Block_Template
{
	public function _prepareLayout()
    {
		return parent::_prepareLayout();
    }
    
     public function getAvi()     
     { 
        if (!$this->hasData('avi')) {
            $this->setData('avi', Mage::registry('avi'));
        }
        return $this->getData('avi');
        
    }
}