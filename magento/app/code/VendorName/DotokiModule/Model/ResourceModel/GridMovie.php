<?php

namespace VendorName\DotokiModule\Model\ResourceModel;
class GridMovie extends
    \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('magenest_movie', 'movie_id');
    }
}
