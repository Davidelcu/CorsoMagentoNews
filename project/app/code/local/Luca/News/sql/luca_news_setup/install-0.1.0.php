<?php
/**
 * Luca News Install
 */

/**
 * Luca News Installer
 *
 * MySQL installer
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @version 0.1.0
 * @package Cms
 */

/** @var Mage_Core_Model_Resource_Setup $installer */
$installer = $this;
$installer->startSetup();

//prepare table for luca_news_category
$tableCategory = $installer->getConnection()->newTable($installer->getTable('luca_news/category'));

$tableCategory->addColumn(
    'category_id',
    Varien_Db_Ddl_Table::TYPE_INTEGER,
    null,
    array('primary' => true, 'identity' => true, 'nullable' => false),
    'Category ID'
)->addColumn(
    'code',
    Varien_Db_Ddl_Table::TYPE_TEXT,
    64,
    array('nullable' => false),
    'Category Code'
)->addColumn(
    'name',
    Varien_Db_Ddl_Table::TYPE_TEXT,
    64,
    array('nullable' => false),
    'Category Name'
)->addColumn(
    'status',
    Varien_Db_Ddl_Table::TYPE_BOOLEAN,
    null,
    array('nullable' => false),
    'Category Status'
)->addColumn(
    'created_at',
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null,
    array('default' => Varien_Db_Ddl_Table::TIMESTAMP_INIT),
    'Category Created At'
)->addColumn(
    'updated_at',
    Varien_Db_Ddl_Table::TYPE_TIMESTAMP,
    null,
    array('default' => Varien_Db_Ddl_Table::TIMESTAMP_INIT_UPDATE),
    'Category Updated At'
);

// create tables
$installer->getConnection()->createTable($tableCategory);

$installer->endSetup();
