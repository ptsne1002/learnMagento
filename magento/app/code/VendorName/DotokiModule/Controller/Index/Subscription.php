<?php
namespace VendorName\DotokiModule\Controller\Index;
class Subscription extends \Magento\Framework\App\Action\Action {

    public function execute() {
        $subscription = $this->_objectManager->create('VendorName\DotokiModule\Model\Subscription');
        $subscription->setFirstname('Pham');
        $subscription->setLastname('Tien Sy2');
        $subscription->setEmail('pts.ne@example.com');
        $subscription->setMessage('Pts is Pham Tien Sy');
        $subscription->setStatus('approved');
        $subscription->save();
        $this->getResponse()->setBody('success');}
}
