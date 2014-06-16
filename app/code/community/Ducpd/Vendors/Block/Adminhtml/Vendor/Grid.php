<?php

class Ducpd_Vendors_Block_Adminhtml_Vendor_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    public function _construct()
    {
        $this->setDefaultSort('name');
        $this->setId('vendor_id');
        $this->setDefaultDir('asc');

        $this->setSaveParametersInSession(true);
    }

    protected function _prepareCollection()
    {
        $collection = Mage::getModel('ducpd_vendors/vendor')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    protected function _prepareColumns()
    {
        $this->addColumn('vendor_id',
            array(
                'header' => 'ID',
                'align' => 'right',
                'width' => '50px',
                'index' => 'vendor_id'
            ));
        $this->addColumn('name',
            array(
                'header' => 'Name',
                'align' => 'left',
                'width' => '100px',
                'index' => 'name'
            ));
        $this->addColumn('email',
            array(
                'header' => 'Email',
                'align' => 'center',
                'width' => '100px',
                'index' => 'email'
            ));
        $this->addColumn('contact',
            array(
                'header' => 'Contact',
                'align' => 'center',
                'width' => '50px',
                'index' => 'contact'
            ));
        $this->addColumn('description',
            array(
                'header' => 'Description',
                'align' => 'left',
                'width' => '200px',
                'index' => 'description'
            ));
        return parent::_prepareColumns();
    }

    public function _getRowUrl($row)
    {
        return $this->getUrl('*/*/edit', array('id' => $row->getId()));
    }
}