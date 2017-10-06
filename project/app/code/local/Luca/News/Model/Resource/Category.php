<?php
/**
 * Luca News
 */

/**
 * Luca News Resource Category
 *
 * Category Resource Model
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Luca_News_Model_Resource_Category extends Mage_Core_Model_Resource_Db_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('luca_news/category', 'category_id');
    }
}