<?php

class Ducpd_Vendors_Block_Grid extends Mage_Core_Block_Template
{
    public function bindData()
    {
        $collection = Mage::getModel('ducpd_vendors/vendor')->getCollection()->getData();
        return $collection;
    }
}