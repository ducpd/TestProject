<?php

class Ducpd_Vendors_VendorController extends Mage_Core_Controller_Front_Action
{
    public function indexAction()
    {
        $this->loadLayout('ducpd_vendors_index_handle');
        $this->renderLayout();
    }

    public function createAction()
    {
        $this->loadLayout('ducpd_vendors_create_handle');
        $this->renderLayout();
    }

    public function saveAction()
    {
        //get Post data
        $params = $this->getRequest()->getParams();

        //save it
        $vendorModel = Mage::getModel('ducpd_vendors/vendor');
        $vendorModel->setData('name',$params['txtName']);
        $vendorModel->setData('email',$params['txtEmail']);
        $vendorModel->setData('description',$params['txtDescription']);
        $vendorModel->setData('contact',$params['txtContact']);
        $vendorModel->save();

        //back to list page
        $this->_redirect('vendors/vendor/index');
    }
}