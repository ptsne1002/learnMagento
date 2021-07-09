<?php

namespace VendorName\DotokiModule\Model\ResourceModel\GridMovie;

use Magento\Catalog\Model\Product;
use Magento\Framework\Data\Collection\Db\FetchStrategyInterface as FetchStrategy;
use Magento\Framework\Data\Collection\EntityFactoryInterface as EntityFactory;
use Magento\Framework\Event\ManagerInterface as EventManager;
use Psr\Log\LoggerInterface as Logger;
use VendorName\DotokiModule\Model\ResourceModel\Subscription;
use Magento\Eav\Model\ResourceModel\Entity\Attribute;
use Magento\Sales\Model\Order;
use Magento\Sales\Model\Order\Item as ItemOrder;

class Collection extends \Magento\Framework\View\Element\UiComponent\DataProvider\SearchResult
{
    private $eavAttribute;

    protected $itemOrder;

    /**
     * @var \Magento\Ui\DataProvider\AddFilterToCollectionInterface[]
     */
    protected $addFilterStrategies;

    public function __construct(
        Attribute $eavAttribute,
        ItemOrder $itemOrder,
        EntityFactory $entityFactory,
        Logger $logger,
        FetchStrategy $fetchStrategy,
        EventManager $eventManager,
        array $addFilterStrategies = [],
        $mainTable = 'magenest_movie',
        $resourceModel = Subscription::class,
        $identifierName = null,
        $connectionName = null
    )
    {
        $this->addFilterStrategies = $addFilterStrategies;
        $this->itemOrder = $itemOrder;
        $this->eavAttribute = $eavAttribute;
        parent::__construct($entityFactory, $logger, $fetchStrategy, $eventManager, $mainTable, $resourceModel, $identifierName, $connectionName);
    }

    protected function _initSelect()
    {
        parent::_initSelect();
        $this->getSelect()->join(
                ['magenest_director' => $this->getTable('magenest_director')],
                'main_table.director_id = magenest_director.director_id',
                 ['dirname'=>'magenest_director.name']);

        return $this;
    }

}
