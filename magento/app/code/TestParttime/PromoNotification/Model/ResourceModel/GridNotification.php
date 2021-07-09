<?php

namespace TestParttime\PromoNotification\Model\ResourceModel;

class GridNotification extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('promo_notification', 'entity_id');
    }
}
