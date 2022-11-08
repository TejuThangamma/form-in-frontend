<?php
namespace Hello\Practice\Block;


use Magento\Framework\View\Element\Template;
use Hello\Practice\Model\ResourceModel\View\Collection;

class Book extends Template
{
    /**
     * @var Collection
     */
    private $collection;

    /**
     * Book constructor.
     * @param Template\Context $context
     * @param Collection $collection
     * @param array $data
     */
    public function __construct(
        Template\Context $context,
        Collection $collection,
        array $data = []
    )
    {
        parent::__construct($context, $data);
        $this->collection = $collection;
    }

    public function getAllBook() {
        return $this->collection->getData();
    }

    public function getFormAction(){
        return $this->getUrl('practice/index/booking');
        
    }

}


