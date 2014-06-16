<?php

class Ducpd_Vendors_Block_Product extends Mage_Core_Block_Template
{
    public function getListVendor()
    {
        return Mage::getModel('ducpd_vendors/vendor')->getCollection()->getData();
    }
}