<?php

namespace VendorName\DotokiModule\Controller\Adminhtml\Index;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index2 extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;

    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }

    public function execute()
    {
        echo "this page of Backend :))";
    }

    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('VendorName_DotokiModule::index2');
    }
}
