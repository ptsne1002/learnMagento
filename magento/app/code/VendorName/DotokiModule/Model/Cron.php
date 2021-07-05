<?php
namespace VendorName\DotokiModule\Model;
class Cron {
    /** @var \Psr\Log\LoggerInterface $logger */
    protected $logger;
    /** @var \Magento\Framework\ObjectManagerInterface */
    protected $objectManager;
    public function __construct(
        \Psr\Log\LoggerInterface $logger,
        \Magento\Framework\ObjectManagerInterface
        $objectManager) {
        $this->logger = $logger;
        $this->objectManager = $objectManager;
    }
    public function checkSubscriptions() {
        $subscription = $this->objectManager->create('VendorName\DotokiModule\Model\Subscription');
        $subscription->setFirstname('Pham');
        $subscription->setLastname('Tien SY Cron');
        $subscription->setEmail('pts.ne@example.com');
        $subscription->setMessage('this is test create cron in magento');
        $subscription->setStatus('approved');
        $subscription->save();
        $this->logger->debug('Test subscription added');
 }
}
