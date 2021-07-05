<?php
//
//namespace VendorName\DotokiModule\Controller\Adminhtml\GridUiComponent;
//
//use Magento\Backend\App\Action;
//use VendorName\DotokiModule\Model\GridUiComponentFactory;
//use Magento\Backend\Model\View\Result\RedirectFactory;
//
//class Save extends Action
//{
//    private $resultRedirect;
//    private $postFactory;
//
//    public function __construct(
//        Action\Context $context,
//        GridUiConponentFactory $postFactory,
//        RedirectFactory $redirectFactory
//    )
//    {
//        parent::__construct($context);
//        $this->postFactory = $postFactory;
//        $this->resultRedirect = $redirectFactory;
//    }
//
//    public function execute()
//    {
//        $data = $this->getRequest()->getPostValue();
//        $id = !empty($data['subscription_id']) ? $data['subscription_id'] : null;
//
//        $newData = [
//            'firstname' => $data['fristname'],
//            'lastname' => $data['lastname'],
//            'status' => $data['status'],
//            'messager' => $data['messager'],
//        ];
//
//        $post = $this->postFactory->create();
//        if ($id) {
//            $post->load($id);
//            $this->getMessageManager()->addSuccessMessage(__('Edit thành công'));
//        } else {
//            $this->getMessageManager()->addSuccessMessage(__('Save thành công.'));
//        }
//        try{
//            $post->addData($newData);
//            $post->save();
//            return $this->resultRedirect->create()->setPath('dotokimodule/griduicomponent/index');
//        }catch (\Exception $e){
//            $this->getMessageManager()->addErrorMessage(__('Save thất bại.'));
//        }
//    }
//}


namespace VendorName\DotokiModule\Controller\Adminhtml\GridUiComponent;

use Magento\Backend\App\Action;
use VendorName\DotokiModule\Model\GridUiComponentFactory;
use Magento\Backend\Model\View\Result\RedirectFactory;

class Save extends Action
{
    private $resultRedirect;
    private $postFactory;

    public function __construct(
        Action\Context $context,
        GridUiComponentFactory $postFactory,
        RedirectFactory $redirectFactory
    )
    {
        parent::__construct($context);
        $this->postFactory = $postFactory;
        $this->resultRedirect = $redirectFactory;
    }

    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        $id = !empty($data['subscription_id']) ? $data['subscription_id'] : null;

        $newData = [
            'firstname' => $data['firstname'],
            'lastname' => $data['lastname'],
            'status' => $data['status'],
            'message' => $data['message'],
        ];

        $post = $this->postFactory->create();
        if ($id) {
            $post->load($id);
            $this->getMessageManager()->addSuccessMessage(__('Edit thành công'));
        } else {
            $this->getMessageManager()->addSuccessMessage(__('Save thành công.'));
        }
        try {
            $post->addData($newData);
            $post->save();
            return $this->resultRedirect->create()->setPath('dotokimodule/griduicomponent/index');
        } catch (\Exception $e) {
            $this->getMessageManager()->addErrorMessage(__('Save thất bại.'));
        }
    }
}
