<?php


namespace TestParttime\PromoNotification\Model;

class GridNotification extends \Magento\Framework\Model\AbstractModel
{
    protected function _construct()
    {
        $this->_init('TestParttime\PromoNotification\Model\ResourceModel\GridNotification');
    }
}
