<?php

namespace VendorName\DotokiModule\Model\ResourceModel\Subscription;

/**
 * Subscription Collection
 */
class Collection extends
    \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Initialize resource collection
     *
     * @return void
     */
    public function _construct()
    {
        $this->_init('VendorName\DotokiModule\Model\Subscription',
            'VendorName\DotokiModule\Model\ResourceModel\Subscription');
    }
}
