<?php
/**
 * Luca News
 */

/**
 * Luca News Status Model
 *
 * Option to status
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Luca_News_Model_Source_Status
{
    /**
     * toOptionArray
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array('value' => 0, 'label' => Mage::helper('luca_news')->__('Disabled')),
            array('value' => 1, 'label' => Mage::helper('luca_news')->__('Enabled')),
        );
    }

    /**
     * toGridArray
     *
     * returns toOptionArray method as options to grid column
     * @return array
     */
    public function  toGridArray()
    {
        $array = array();
        foreach ($this->toOptionArray() as $option) {
            $array[$option['value']] = $option ['label'];
        }
        return $array;
    }
}
