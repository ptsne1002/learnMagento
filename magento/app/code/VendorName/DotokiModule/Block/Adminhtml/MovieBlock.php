<?php

namespace VendorName\DotokiModule\Block\Adminhtml;
class MovieBlock extends
    \Magento\Backend\Block\Widget\Grid\Container
{
    protected function _construct()
    {
        $this->_blockGroup = 'VendorName_DotokiModule';
        $this->_controller = 'adminhtml_movieblock';
        parent::_construct();
    }
}
