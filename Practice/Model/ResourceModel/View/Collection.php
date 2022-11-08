<?php
namespace Hello\Practice\Model\ResourceModel\View;

use Hello\Practice\Model\View as Model;
use Hello\Practice\Model\ResourceModel\View as ResourceModel;
use Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    protected function _construct()
    {
       
       $this->_init(Model::class, ResourceModel::class);
    }
}