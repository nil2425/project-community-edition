<?php
namespace Assignment4\ORMAdminGrid\Model\ResourceModel;
class Savetest extends \Magento\Framework\Model\ResourceModel\Db\AbstractDb
{
    /**
     * Define main table
     */
    protected function _construct()
    {
        $this->_init('assignment4_contactus','user_id');   //here "assignment4_contactus" is table name 
    }
}