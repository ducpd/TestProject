<?php
/* @var $installer Mage_Eav_Model_Entity */
$installer = $this;
$installer->startSetup();
$installer->addAttribute(Mage_Catalog_Model_Product::ENTITY, 'vendor_id', array(
    'group' => 'General',
    'user_define' => 1,
    'type' => 'int',
    'backend' => '',
    'frontend' => '',
    'label' => 'Vendor name',
    'input' => 'select',
    'class' => '',
    'source' => 'ducpd_vendors/attribute_vendor',
    'global' => Mage_Catalog_Model_Resource_Eav_Attribute::SCOPE_GLOBAL,
    'visible' => true,
    'required' => true,
    'unique' => false,
    'used_in_product_listing' => true,
    'is_configurable' => true
));
$installer->endSetup();