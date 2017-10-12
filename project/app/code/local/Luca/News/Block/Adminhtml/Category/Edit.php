<?php
/**
* Luca News
*/

/**
* Luca News Adminhtml Edit Block
*
* Category Edit Block
* @author Davide Luca <davide.luca@thinkopen.it>
* @version 0.2.0
* @package Cms
*/
class Luca_News_Block_Adminhtml_Category_Edit extends Mage_Adminhtml_Block_Widget_Form_Container
{
    /**
     * Luca_News_Block_Adminhtml_Category_Edit constructor.
     */
    public function __construct()
    {
        $this->_objectId = 'category_id';
        $this->_blockGroup = 'luca_news';
        $this->_controller = 'adminhtml_category';
        parent::__construct();
    }

    public function getHeaderText()
    {
        return $this->__('Category Details');
    }
}
