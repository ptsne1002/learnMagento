<?php

namespace VendorName\DotokiModule\Block\Adminhtml\MovieBlock;

use Magento\Backend\Block\Widget\Grid as WidgetGrid;

class Grid extends
    \Magento\Backend\Block\Widget\Grid\Extended
{
    /**
     * @var \VendorName\DotokiModule\Model\Resource\GridMovie\
     * Collection
     */
    protected $_subscriptionCollection;
    /**
     * @param \Magento\Backend\Block\Template\Context
    $context
     * @param \Magento\Backend\Helper\Data $backendHelper
     * @param \VendorName\DotokiModule\Model\ResourceModel\
    Subscription\Collection $subscriptionCollection
     * @param array $data
     */
    public function __construct(
        \Magento\Backend\Block\Template\Context $context,
        \Magento\Backend\Helper\Data $backendHelper,
        \VendorName\DotokiModule\Model\ResourceModel\Subscription\Collection
        $subscriptionCollection,
        array $data = []
    ) {
        $this->_subscriptionCollection = $subscriptionCollection;
        parent::__construct($context, $backendHelper, $data);
        $this->setEmptyText(__('No Subscriptions Found'));
    }
    /**
     * Initialize the subscription collection
     *
     * @return WidgetGrid
     */
    protected function _prepareCollection()
    {
        $this->setCollection($this->_subscriptionCollection);
        return parent::_prepareCollection();
    }
    /**
     * Prepare grid columns
     *
     * @return $this
     */
    protected function _prepareColumns()
    {
        $this->addColumn('movie_id',
            ['header' => __('ID'), 'index' => 'movie_id',]);
        $this->addColumn('movie_name',
            ['header' => __('movie Name'), 'index' => 'movie_name',]);
        $this->addColumn('description',
            ['header' => __('Description'), 'index' => 'description',]);
        $this->addColumn('director_id',
            ['header' => __('Director Id'), 'index' => 'director_id',]);
        $this->addColumn('director_name',
            ['header' => __('Director Name'), 'index' => 'status',]);
        return $this;
    }
    public function decorateStatus($value) {
        $class = '';
        switch ($value) {
            case 'pending':
                $class = 'grid-severity-minor';
                break;
            case 'approved':
                $class = 'grid-severity-notice';
                break;
            case 'declined':
            default:
                $class = 'grid-severity-critical';
                break;
        }
        return '<span class="' . $class . '"><span>' . $value . '</span></span>';
    }

}
