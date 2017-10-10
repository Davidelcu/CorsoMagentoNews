<?php
/**
 * Luca News
 */

/**
 * Luca News Model Story
 *
 * Category Model
 * @method Luca_News_Model_Story getTitle()
 * @method setTitle(string $title)
 * @method Luca_News_Model_Story getContent()
 * @method setContent(string $content)
 * @method Luca_News_Model_Story getStatus()
 * @method setStatus(bool $status)
 * @method Luca_News_Model_Story getCategoryId()
 * @method setCategoryId(int $categoryId)
 * @method Luca_News_Model_Story getCreatedAt()
 * @method Luca_News_Model_Story getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Luca_News_Model_Story extends Mage_Core_Model_Abstract
{
    /**
     * $_eventPrefix
     * @var string
     */
    protected $_eventPrefix = 'luca_news_story';

    /**
     * $_eventObject
     * @var string
     */
    protected $_eventObject = 'story';

    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('luca_news/story');
    }

    /**
     * _beforeSave
     * @return Mage_Core_Model_Abstract
     */
    protected function _beforeSave()
    {
        return parent::_beforeSave();
        $this->setUpdatedAt(Mage::getSingleton('core/date')->gmtDate());
        return $this;
    }

    /**
     * getCategory
     *
     * Get category object
     * @return bool|Luca_News_Model_Category|Mage_Core_Model_Abstract
     */
    public function getCategory()
    {
        $category = Mage::getModel('luca_news/category')->load($this->getData('category_id'));

        if ($category && $category->getId()) {
           return $category;
        } else {
            return false;
        }
    }

    /**
     * setCategory
     *
     * Set Category Id from Category object
     * @param Luca_News_Model_Category $category
     */
    public function setCategory(Luca_News_Model_Category $category)
    {
        $this->setData('category_id', $category->getId());
    }
}
