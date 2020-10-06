<?php
namespace Assignment4\ORMAdminGrid\Model;
use Magento\Framework\Model\AbstractModel;
class Savetest extends AbstractModel
{
    /**
     * Define resource model
     */
    protected function _construct()
    {
        $this->_init('Assignment4\ORMAdminGrid\Model\ResourceModel\Savetest');
    }
}