<?php

class Ducpd_Vendors_Block_Adminhtml_Vendor extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    public function _construct()
    {
        $this->_blockGroup = 'ducpd_vendors';
        $this->_controller = 'adminhtml_vendor';
        $this->_headerText = $this->__('vendor');

        parent::_construct();
    }
}