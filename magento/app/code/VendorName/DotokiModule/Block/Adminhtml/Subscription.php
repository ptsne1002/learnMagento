<?php

namespace VendorName\DotokiModule\Block\Adminhtml;
class Subscription extends
    \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'VendorName_DotokiModule';
        $this->_controller = 'adminhtml_subscription';
        parent::_construct();
    }
}
