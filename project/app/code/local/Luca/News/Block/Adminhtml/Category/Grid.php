<?php
/**
 * Luca News
 */

/**
 * Luca News Category Grid Block
 *
 * Adminhtml block for category grid
 * @author Davide Luca <davide.luca@thinkopen.it>
 * @version 0.2.0
 * @package Cms
 */
class Luca_News_Block_Adminhtml_Category_Grid extends Mage_Adminhtml_Block_Widget_Grid
{
    /**
     *Luca_News_Block_Adminhtml_Category_Grid constructor
     */
    public function __construct()
    {
        $this->setId('category_id');
        $this->setDefaultSort('category_id');
        $this->setDefaultDir('asc');
        $this->setSaveParametersInSession(true);
        parent::__construct();
    }

    /**
     * _prepareCollection
     * @return Mage_Adminhtml_Block_Widget_Grid
     */
    protected function _prepareCollection()
    {
        $collection = Mage::getModel('luca_news/category')->getCollection();
        $this->setCollection($collection);
        return parent::_prepareCollection();
    }

    /**
     * _prepareColumn
     * @return $this
     */
    protected function _prepareColumns()
    {
        //adding columns
        $this->addColumn(
            'category_id',
            array(
                'index' => 'category_id',
                'header' => $this->__('ID'),
                'width' => 50,
                'type' => 'number',
            )
        );

        $this->addColumn(
            'code',
            array(
                'index' => 'code',
                'header' => $this->__('Code'),
                'width' => 200,
            )
        );

        $this->addColumn(
            'name',
            array(
                'index' => 'name',
                'header' => $this->__('Name'),
            )
        );

        $this->addColumn(
            'status',
            array(
                'index' => 'status',
                'header' => $this->__('Status'),
                'width' => 250,
                'type' => 'options',
                'options' => Mage::getModel('luca_news/source_status')->toOptionArray(),
                'renderer' => 'luca_news/adminhtml_category_grid_renderer_status',
            )
        );

        //add actions to the last column
        $this->addColumn(
            'actions',
            array(
                'header' => $this->__('Actions'),
                'width' => 100,
                'type' => 'action',
                'getter' => 'getId',
                'actions' => array(
                    array(
                        'caption' => $this->__('Edit'),
                        'url' => array('base' => '*/*/edit'),
                        'field' => 'category_id'
                    ),
                    array(
                        'caption' => $this->__('Delete'),
                        'url' => array('base' => '*/*/delete'),
                        'field' => 'category_id',
                        'confirm' => $this->__('Are you sure to delete this?'),
                    )
                ),
                'filter' => false,
                'sortable' => false,
                'index' => 'stores',
                'is_system' => true,
            )
        );


        return parent::_prepareColumns();
    }
}
