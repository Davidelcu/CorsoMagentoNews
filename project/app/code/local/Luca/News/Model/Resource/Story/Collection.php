<?php
/**
 * Luca News
 */

/**
 * Luca News Model Resource Story Collection
 *
 * Collection Story Resource Model
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Luca_News_Model_Resource_Story_Collection extends Mage_Core_Model_Resource_Db_Collection_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('luca_news/story');
    }
}
