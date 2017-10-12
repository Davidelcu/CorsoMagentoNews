<?php
/**
 * Luca News
 */

/**
 * Luca News Story Block
 *
 * Story Block
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Luca_News_Block_Story extends Mage_Core_Block_Template
{
    /**
     * getStories
     * @return Luca_News_Model_Resource_Story_Collection|Mage_Eav_Model_Entity_Collection_Abstract
     */
    public function getStories()
    {
        //control if there are filter parameters
        if ($this->getRequest()->getParam('category')) {
            $stories = Mage::getModel('luca_news/story')->getCollection()
                ->addFieldToFilter('status', array('eq' => 1))
                ->addFieldToFilter('category_id', array('eq' => $this->getRequest()->getParam('category')));
        } else {
            $stories = Mage::getModel('luca_news/story')->getCollection()
            ->addFieldToFilter('status', array('eq' => 1));

        }

        //return object
        return $stories;
    }
}
