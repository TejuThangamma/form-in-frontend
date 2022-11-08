<?php

namespace Hello\Practice\Model;

use Magento\Framework\Model\AbstractModel;
use Hello\Practice\Model\ResourceModel\View as ResourceModel;

class View extends AbstractModel
{
    protected function _construct()
    {
        $this->_init(ResourceModel::class);
    }
}