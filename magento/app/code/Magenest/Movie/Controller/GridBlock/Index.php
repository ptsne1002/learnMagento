<?php

namespace Magenest\Movie\Controller\GridBlock;

use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;

class Index extends \Magento\Framework\App\Action\Action
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
        $resultPage = $this->resultPageFactory->create();
        $resultPage ->setActiveMenu('VendorName_DotokiModule::subscription');
        $resultPage->addBreadcrumb(__('DotokiMoudle'), __('Dotoki-Module'));
        $resultPage->addBreadcrumb(__('ManageSubscriptions'), __('Manage Subscriptions'));
        $resultPage->getConfig()->getTitle() ->prepend(__('Subscriptions'));
        return $resultPage;
    }

    protected function _isAllowed()
    {
        return $this->_authorization ->isAllowed('VendorName_DotokiModule::subscription');
    }
}
