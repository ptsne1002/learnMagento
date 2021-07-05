<?php
namespace Magenest\Movie\Controller\GridBlock;


class Index extends \Magento\Framework\App\Action\Action
{ViMagento/HelloWorld/Controller/Adminhtml/Post/Index.php


    protected $resultPageFactory;

    public function __construct(
        \Magento\Framework\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $pageFactory
    )
    {
        parent::__construct($context);
        $this->resultPageFactory = $pageFactory;
    }

    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('VendorName_DotokiModule::subscription');
        $resultPage->addBreadcrumb(__('DotokiMoudle'), __('Dotoki-Module'));
        $resultPage->addBreadcrumb(__('ManageSubscriptions'), __('Manage Subscriptions'));
        $resultPage->getConfig()->getTitle()->prepend(__('Subscriptions'));
        return $resultPage;
    }
}


