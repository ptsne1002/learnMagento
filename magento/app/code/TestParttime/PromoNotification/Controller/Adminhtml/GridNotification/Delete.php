<?php

namespace TestParttime\PromoNotification\Controller\Adminhtml\GridNotification;

use Magento\Backend\App\Action;
use TestParttime\PromoNotification\Model\ResourceModel\GridNotification\CollectionFactory;
use TestParttime\PromoNotification\Model\GridNotificationFactory;
use Magento\Ui\Component\MassAction\Filter;
use Magento\Backend\Model\View\Result\RedirectFactory;

class Delete extends Action
{
    private $PromoFactory;
    private $filter;
    private $collectionFactory;
    private $resultRedirect;

    public function __construct(
        Action\Context $context,
        GridNotificationFactory $PromoFactory,
        Filter $filter,
        CollectionFactory $collectionFactory,
        RedirectFactory $redirectFactory
    )
    {
        parent::__construct($context);
        $this->PromoFactory = $PromoFactory;
        $this->filter = $filter;
        $this->collectionFactory = $collectionFactory;
        $this->resultRedirect = $redirectFactory;
    }

    public function execute()
    {
        $collection = $this->filter->getCollection($this->collectionFactory->create());
        $total = 0;
        $err = 0;
        foreach ($collection->getItems() as $item) {
            $deletePost = $this->PromoFactory->create()->load($item->getData('entity_id'));
            try {
                $deletePost->delete();
                $total++;
            } catch (LocalizedException $exception) {
                $err++;
            }
        }

        if ($total) {
            $this->messageManager->addSuccessMessage(
                __('A total of %1 record(s) have been deleted.', $total)
            );
        }

        if ($err) {
            $this->messageManager->addErrorMessage(
                __(
                    'A total of %1 record(s) haven\'t been deleted. Please see server logs for more details.',
                    $err
                )
            );
        }
        return $this->resultRedirect->create()->setPath('promo/gridnotification/index');
    }
}
