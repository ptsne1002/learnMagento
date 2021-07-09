<?php

namespace VendorName\DotokiModule\Model\ResourceModel\GridUiComponent;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'subscription_id';

    protected function _construct()
    {
        $this->_init('VendorName\DotokiModule\Model\GridUiComponent', 'VendorName\DotokiModule\Model\ResourceModel\GridNotification');
    }
}
