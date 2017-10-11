<?php
/**
 * Luca News
 */

/**
 * Luca News Category Block
 *
 * Adminhtml block for category grid
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Luca_News_Block_Adminhtml_Category extends Mage_Adminhtml_Block_Widget_Grid_Container
{
    /**
     *Luca_News_Block_Adminhtml_Category constructor
     */
    public function __construct()
    {
        $this->_blockGroup = 'luca_news';
        $this->_controller = 'adminhtml_category';
        $this->_headerText = $this->__('News Categories');
        parent::__construct();
    }
}
