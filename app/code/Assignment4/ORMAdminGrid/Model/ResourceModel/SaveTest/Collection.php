<?php
namespace Assignment4\ORMAdminGrid\Model\ResourceModel\Savetest;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * Define model & resource model
     */
    protected function _construct()
    {
        $this->_init(
            'Assignment4\ORMAdminGrid\Model\Savetest',
            'Assignment4\ORMAdminGrid\Model\ResourceModel\Savetest'
        );
    }
}