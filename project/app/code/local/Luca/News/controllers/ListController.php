<?php
/**
 * Luca News
 */

/**
 * Luca News Adminhtml Controller
 *
 * Backend Category Controller
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Luca_News_ListController extends Mage_Core_Controller_Front_Action
{
    /**
     * indexAction
     */
    public function indexAction()
    {
        $this->loadLayout();
        $this->renderLayout();
    }
}
