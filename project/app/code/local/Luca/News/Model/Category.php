<?php
/**
 * Luca News
 */

/**
 * Luca News Model Category
 *
 * Category Model
 * @method Luca_News_Model_Category getCode()
 * @method setCode(string $code)
 * @method Luca_News_Model_Category getName()
 * @method setName(string $name)
 * @method Luca_News_Model_Category getStatus()
 * @method setStatus(bool $status)
 * @method Luca_News_Model_Category getCreatedAt()
 * @method Luca_News_Model_Category getUpdatedAt()
 * @method setUpdatedAt(string $updatedAt)
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Luca_News_Model_Category extends Mage_Core_Model_Abstract
{
    /**
     * _construct
     */
    protected function _construct()
    {
        $this->_init('luca_news/category');
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
}
