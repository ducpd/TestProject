<?php

class Ducpd_Vendors_Block_ListProduct extends Mage_Catalog_Block_Product_List
{
    public function _construct()
    {
        $product = Mage::getModel('catalog/product')
            ->getCollection()
            ->addAttributeToSelect('*')
            ->addFieldToFilter('vendor_id', $this->getRequest()->getParam('id'));
        $this->_productCollection = $product;
    }
}