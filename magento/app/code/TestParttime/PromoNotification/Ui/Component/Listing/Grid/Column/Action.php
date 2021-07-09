<?php

namespace TestParttime\PromoNotification\Ui\Component\Listing\Grid\Column;

use Magento\Ui\Component\Listing\Columns\Column;

class Action extends Column
{
    /**
     * Prepare Data Source
     *
     * @param array $dataSource
     * @return array
     */
    public function prepareDataSource(array $dataSource)
    {
        $obj = \Magento\Framework\App\ObjectManager::getInstance();
        $store = $obj->create('\Magento\Store\Model\StoreManagerInterface');
        $url = $store->getStore()->getBaseUrl();
        if (isset($dataSource['data']['items'])) {
            foreach ($dataSource['data']['items'] as & $item) {
                $item[$this->getData('name')] = ['edit' => ['href' => $url . 'admin/promo/gridnotification/addnew/id/' . $item["entity_id"], 'label' => __('Edit')]];
            }
        }

        return $dataSource;
    }
}
