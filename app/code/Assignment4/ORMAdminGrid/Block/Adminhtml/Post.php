<?php
namespace Assignment4\ORMAdminGrid\Block\Adminhtml;

class Post extends \Magento\Backend\Block\Widget\Grid\Container
{

	protected function _construct()
	{
		$this->_controller = 'adminhtml_post';
		$this->_blockGroup = 'Assignment4_ORMAdminGrid';
		$this->_headerText = __('Contacted People');
		$this->_addButtonLabel = __('Create New');
		parent::_construct();
	}
}