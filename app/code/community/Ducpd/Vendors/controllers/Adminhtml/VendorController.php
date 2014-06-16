<?php

class Ducpd_Vendors_Adminhtml_VendorController extends Mage_Adminhtml_Controller_Action
{
    public function indexAction()
    {
        $this->loadLayout()
            ->_addContent($this->getLayout()->createBlock('ducpd_vendors/adminhtml_vendor'))
            ->renderLayout();
    }
}