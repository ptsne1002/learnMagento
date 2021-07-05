<?php

namespace VendorName\DotokiModule\Controller\Adminhtml\Config;

use Magento\Backend\App\Action;
use Magento\Framework\App\Config\ScopeConfigInterface;
use Magento\Store\Model\ScopeInterface;

class Index extends \Magento\Backend\App\Action
{

    const ENABLE = "helloworld/hellopage/is_enabled";
    const DISPLAY_TEXT = "helloworld/hellopage/header_title";

    protected $scopeConfig;

    public function __construct(
        Action\Context $context,
        ScopeConfigInterface  $scopeConfig
    )
    {
        $this->scopeConfig = $scopeConfig;
        parent::__construct($context);
    }

    public function execute()
    {
        echo "PTS";
        $enable = $this->scopeConfig->getValue(self::ENABLE, ScopeInterface::SCOPE_STORE);
        $displayText = $this->scopeConfig->getValue(self::DISPLAY_TEXT, ScopeInterface::SCOPE_STORE);
        //echo $enable;
        echo "<br>";
        echo $displayText;
    }
}
