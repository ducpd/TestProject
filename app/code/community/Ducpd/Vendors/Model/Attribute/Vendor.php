<?php

class Ducpd_Vendors_Model_Attribute_Vendor extends Mage_Eav_Model_Entity_Attribute_Source_Abstract
{
    public function getAllOptions()
    {
        $model = Mage::getModel('ducpd_vendors/vendor');
        $data = $model->getCollection();
        $vendor_select = array();
        foreach ($data as $vendor) {
            $vendor_select[] = array('label' => $vendor['name'], 'value' => $vendor['vendor_id']);
        }
        return $vendor_select;
    }
}
