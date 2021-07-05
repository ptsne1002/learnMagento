<?php
namespace VendorName\DotokiModule\Model\Config\Source;
class Relation implements \Magento\Framework\Option\ArrayInterface
{
    public function toOptionArray()
    {
        return [
            [
                'value' => null,
                'label' => __('--Please Select--')
            ],
            [
                'value' => 'Value1',
                'label' => __('Gia Tri 1')
            ],
            [
                'value' => 'Value2',
                'label' => __('Gia Tri 2')
            ],
            [
                'value' => 'Value3',
                'label' => __('Gia Tri 3')
            ],
        ];
    }
}
