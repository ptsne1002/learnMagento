<?php

namespace Magenest\Movie\Model\ResourceModel;

class GridUIComponent extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('magenest_movie', 'movie_id');
    }
}
