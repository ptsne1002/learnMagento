<?php

namespace TestParttime\PromoNotification\Controller\Adminhtml\GridNotification;

use Magento\Framework\View\Result\PageFactory;
use Magento\Backend\App\Action;

class AddNew extends \Magento\Backend\App\Action
{
    protected $_pageFactory;

    public function __construct(Action\Context $context, PageFactory $pageFactory)
    {
        $this->_pageFactory = $pageFactory;
        parent::__construct($context);
    }

    public function execute()
    {
        $resultPage = $this->_pageFactory->create();
        $resultPage->getConfig()->getTitle()->prepend(__('Add New Post'));
        return $resultPage;
    }
}
