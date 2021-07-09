<?php

namespace TestParttime\PromoNotification\Model\ResourceModel\GridNotification;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'entity_id';

    protected function _construct()
    {
        $this->_init('TestParttime\PromoNotification\Model\GridNotification', 'TestParttime\PromoNotification\Model\ResourceModel\GridNotification');
    }
}
