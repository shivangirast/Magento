<?php
class Shivangi_Avi_IndexController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
    	
    	/*
    	 * Load an object by id 
    	 * Request looking like:
    	 * http://site.com/avi?id=15 
    	 *  or
    	 * http://site.com/avi/id/15 	
    	 */
    	/* 
		$avi_id = $this->getRequest()->getParam('id');

  		if($avi_id != null && $avi_id != '')	{
			$avi = Mage::getModel('avi/avi')->load($avi_id)->getData();
		} else {
			$avi = null;
		}	
		*/
		
		 /*
    	 * If no param we load a the last created item
    	 */ 
    	/*
    	if($avi == null) {
			$resource = Mage::getSingleton('core/resource');
			$read= $resource->getConnection('core_read');
			$aviTable = $resource->getTableName('avi');
			
			$select = $read->select()
			   ->from($aviTable,array('avi_id','title','content','status'))
			   ->where('status',1)
			   ->order('created_time DESC') ;
			   
			$avi = $read->fetchRow($select);
		}
		Mage::register('avi', $avi);
		*/

			
		$this->loadLayout();     
		$this->renderLayout();
    }
}