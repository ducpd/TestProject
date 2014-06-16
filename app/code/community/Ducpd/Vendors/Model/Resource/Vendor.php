<?php

class Ducpd_Vendors_Model_Resource_Vendor extends Mage_Core_Model_Resource_Db_Abstract
{
    protected function _construct()
    {
        $this->_init('ducpd_vendors/vendor', 'vendor_id');
    }
}