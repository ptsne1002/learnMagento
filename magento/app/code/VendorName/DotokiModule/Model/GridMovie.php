<?php

namespace VendorName\DotokiModule\Model;

class GridMovie extends
    \Magento\Framework\Model\AbstractModel
{
const STATUS_PENDING = 'pending';
const STATUS_APPROVED = 'approved';
const STATUS_DECLINED = 'declined';
    public function __construct(
        \Magento\Framework\Model\Context $context,
        \Magento\Framework\Registry $registry,
        \Magento\Framework\Model\ResourceModel\AbstractResource $resource = null,
        \Magento\Framework\Data\Collection\AbstractDb $resourceCollection = null,
        array $data = []){
        parent::__construct($context, $registry, $resource,
        $resourceCollection, $data);
    }
    public function _construct() {
        $this->_init
        ('VendorName\DotokiModule\Model\ResourceModel\GridMovie');
    }
}
