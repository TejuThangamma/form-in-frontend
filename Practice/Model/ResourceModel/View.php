<?php

namespace Hello\Practice\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;

class View extends AbstractDb
{
    protected function _construct()
    {
        $this->_init('practice', 'id_column');
    }
}