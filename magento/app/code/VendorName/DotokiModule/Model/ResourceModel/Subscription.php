<?php

namespace VendorName\DotokiModule\Model\ResourceModel;
class Subscription extends
    \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    public function _construct()
    {
        $this->_init('vendorname_dotokimodule_subscription', 'subscription_id');
    }
}
