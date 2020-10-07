<?php
namespace Assignment4\ORMAdminGrid\Model;
use Magento\Framework\Model\AbstractModel;
class Savetest extends AbstractModel implements \Magento\Framework\DataObject\IdentityInterface
{
    /**
     * Define resource model
     */

    const CACHE_TAG = 'assignment4_contactus';

    protected $_cacheTag = 'assignment4_contactus';
    
    protected $_eventPrefix = 'assignment4_contactus';

    protected function _construct()
    {
        $this->_init('Assignment4\ORMAdminGrid\Model\ResourceModel\Savetest');
    }

    public function getIdentities()
    {
    return [self::CACHE_TAG . '_' . $this->getId()];
    }

    public function getDefaultValues()
    {
    $values = [];
    return $values;
    }
}
