<?php

namespace Magenest\Movie\Model\ResourceModel\GridUIComponent;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    protected $_idFieldName = 'movie_id';

    protected function _construct()
    {
        $this->_init('Magenest\Movie\Model\GridUIComponent', 'Magenest\Movie\Model\ResourceModel\GridUIComponent');
    }
}
