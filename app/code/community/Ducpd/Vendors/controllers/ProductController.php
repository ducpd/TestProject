<?php

class Ducpd_Vendors_ProductController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout('ducpd_vendors_addProduct_handle');
        $this->renderLayout();
    }

    public function saveAction()
    {
        /* @var $productModel Mage_Catalog_Model_Product */
        //get posted Data
        $params = $this->getRequest()->getParams();

        //setData
        $productModel = new Mage_Catalog_Model_Product();
        $productModel
            ->setName($params['txtName'])
            ->setSku($params['txtSku'])
            ->setPrice((int)$params['txtPrice'])
            ->setDescription($params['txtDescription'])
            ->setShortDescription($params['txtDescription'])
            ->setUrlKey($params['txtName'])
            ->setTypeId(Mage_Catalog_Model_Product_Type::TYPE_SIMPLE)
            ->setCategoryIds(array(Mage::app()->getStore()->getRootCategoryId()))
            ->setWebsiteIDs(array(Mage::app()->getWebsite()->getId()))
            ->setWeight(0.0000)
            ->setVisibility(Mage_Catalog_Model_Product_Visibility::VISIBILITY_BOTH)
            ->setStatus(1)
            ->setTaxClassId(0)
            ->setStockData(array(
                'manage_stock' => 0,
                'is_in_stock' => 1,
                'use_config_manage_stock' => 0
            ))
            ->setCreatedAt(strtotime('now'))
            ->setAttributeSetId(4);
        Zend_Debug::dump($productModel);
        //die;
        $productModel->save();

        //redirect
        $this->_redirect('vendors/vendor');


    }

    public function listAction()
    {
        /* @var $product Mage_Reports_Model_Mysql4_Product_Index_Collection_Abstract */
//        $product = Mage::getModel('catalog/product')
//            ->getCollection()
//            ->addAttributeToSelect('*')
//            ->addFieldToFilter('vendor_id', 1);
//
//        foreach ($product as $value) {
//            Zend_Debug::dump($value['name']);
//        }
        $this->loadLayout('ducpd_vendors_listProduct_handle');
        $this->renderLayout();

    }

}