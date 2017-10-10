<?php

require_once('app/Mage.php');
Varien_Profiler::enable();
Mage::setIsDeveloperMode(true);
ini_set('display_errors', 1);
umask(0);
Mage::app();

// create a category
//$category = Mage::getModel('luca_news/category');
//$category->setCode('top');
//$category->setName('Think Open');
//$category->setStatus(true);
//$category->save();

//load the category
/*$category = Mage::getModel('luca_news/category')->load(1);
echo 'Category<hr>';
Zend_Debug::dump($category);
echo '<hr>';

//create story
$story = Mage::getModel('luca_news/story');
$story->setTitle('La mia storia 2');
$story->setContent('Lorem Ipsum 2');
$story->setStatus(1);
$story->setCategory($category);
$story->save();

echo '<hr>story<hr><pre>';

Zend_Debug::dump($story);

echo '<hr>';
echo 'Category Name =' . $story->getCategory()->getName(); */

/* //preparing resources
$resource = Mage::getSingleton('core/resource');
$read = $resource->getConnection('core/read');
$write = $resource->getConnection('core/write');

//getting table name
$table1 = $resource->getTableName('luca_news/category');
$table2 = $resource->getTableName('luca_news/story');

//exercise 1
$query = "SELECT * FROM {table1}";
$result = $read->fetchAll($query);
*/
