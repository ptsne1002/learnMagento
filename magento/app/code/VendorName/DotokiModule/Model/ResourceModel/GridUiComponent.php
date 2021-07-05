<?php

namespace VendorName\DotokiModule\Model\ResourceModel;

class GridUiComponent extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    protected function _construct()
    {
        $this->_init('vendorname_dotokimodule_subscription', 'subscription_id');
    }
}
