<?php

class Shivangi_Avi_Block_Adminhtml_Avi_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
  public function __construct()
  {
      parent::__construct();
      $this->setId('aviGrid');
      $this->setDefaultSort('avi_id');
      $this->setDefaultDir('ASC');
      $this->setSaveParametersInSession(true);
  }

  protected function _prepareCollection()
  {
      $collection = Mage::getModel('avi/avi')->getCollection();
      $this->setCollection($collection);
      return parent::_prepareCollection();
  }

  protected function _prepareColumns()
  {
      $this->addColumn('avi_id', array(
          'header'    => Mage::helper('avi')->__('ID'),
          'align'     =>'right',
          'width'     => '50px',
          'index'     => 'avi_id',
      ));

      $this->addColumn('title', array(
          'header'    => Mage::helper('avi')->__('Title'),
          'align'     =>'left',
          'index'     => 'title',
      ));
      $this->addColumn('age', array(
          'header'    => Mage::helper('avi')->__('Age'),
          'align'     =>'left',
          'index'     => 'age',
      ));

	  /*
      $this->addColumn('content', array(
			'header'    => Mage::helper('avi')->__('Item Content'),
			'width'     => '150px',
			'index'     => 'content',
      ));
	  */

      $this->addColumn('status', array(
          'header'    => Mage::helper('avi')->__('Status'),
          'align'     => 'left',
          'width'     => '80px',
          'index'     => 'status',
          'type'      => 'options',
          'options'   => array(
              1 => 'Enabled',
              2 => 'Disabled',
          ),
      ));
	  
        $this->addColumn('action',
            array(
                'header'    =>  Mage::helper('avi')->__('Action'),
                'width'     => '100',
                'type'      => 'action',
                'getter'    => 'getId',
                'actions'   => array(
                    array(
                        'caption'   => Mage::helper('avi')->__('Edit'),
                        'url'       => array('base'=> '*/*/edit'),
                        'field'     => 'id'
                    )
                ),
                'filter'    => false,
                'sortable'  => false,
                'index'     => 'stores',
                'is_system' => true,
        ));
		
		$this->addExportType('*/*/exportCsv', Mage::helper('avi')->__('CSV'));
		$this->addExportType('*/*/exportXml', Mage::helper('avi')->__('XML'));
	  
      return parent::_prepareColumns();
  }

    protected function _prepareMassaction()
    {
        $this->setMassactionIdField('avi_id');
        $this->getMassactionBlock()->setFormFieldName('avi');

        $this->getMassactionBlock()->addItem('delete', array(
             'label'    => Mage::helper('avi')->__('Delete'),
             'url'      => $this->getUrl('*/*/massDelete'),
             'confirm'  => Mage::helper('avi')->__('Are you sure?')
        ));

        $statuses = Mage::getSingleton('avi/status')->getOptionArray();

        array_unshift($statuses, array('label'=>'', 'value'=>''));
        $this->getMassactionBlock()->addItem('status', array(
             'label'=> Mage::helper('avi')->__('Change status'),
             'url'  => $this->getUrl('*/*/massStatus', array('_current'=>true)),
             'additional' => array(
                    'visibility' => array(
                         'name' => 'status',
                         'type' => 'select',
                         'class' => 'required-entry',
                         'label' => Mage::helper('avi')->__('Status'),
                         'values' => $statuses
                     )
             )
        ));
        return $this;
    }

  public function getRowUrl($row)
  {
      return $this->getUrl('*/*/edit', array('id' => $row->getId()));
  }

}