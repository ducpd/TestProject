<?php

$installer = $this;
$installer->startSetup();
echo 'pikachu';
/* @var $installer Mage_Eav_Model_Entity */

$table = $installer->getConnection()->newTable($installer->getTable('ducpd_vendors/vendor'))
    ->addColumn('vendor_id', Varien_Db_Ddl_Table::TYPE_INTEGER, null, array(
        'unsigned' => true,
        'nullable' => false,
        'primary' => true,
        'identity' => true,
    ), 'Vendor ID')
    ->addColumn('name', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => false,
    ), 'Vendor Name')
    ->addColumn('email', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => true,
    ), 'Vendor Email')
    ->addColumn('contact', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => true,
    ), 'Vendor contact')
    ->addColumn('description', Varien_Db_Ddl_Table::TYPE_TEXT, null, array(
        'nullable' => true,
    ), 'Vendor Description');
$installer->getConnection()->createTable($table);
$installer->endSetup();
