<?php
namespace VendorName\DotokiModule\Controller\Adminhtml\Component;
use Magento\Backend\App\Action\Context;
use Magento\Framework\View\Result\PageFactory;
class Index extends \Magento\Backend\App\Action
{
    protected $resultPageFactory;
    public function __construct(
        Context $context,
        PageFactory $resultPageFactory
    ) {
        parent::__construct($context);
        $this->resultPageFactory = $resultPageFactory;
    }
    public function execute()
    {
        $resultPage = $this->resultPageFactory->create();
        $resultPage->setActiveMenu('VendorName_DotokiModule::component');
        $resultPage->addBreadcrumb(__('HelloWorld'), __('HelloWorld'));
        $resultPage->addBreadcrumb(__('Components'), __('Components'));
        $resultPage->getConfig()->getTitle()->prepend(__('Components'));
        return $resultPage;
}
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('VendorName_DotokiModule::helloworld');
}
}
