<?php 
namespace Hello\Practice\Controller\Next;

use Magento\Framework\App\Action\Context;
class  Next extends \Magento\Framework\App\Action\Action
{
    protected $_resultPageFactory;

public function __construct(Context $context,
\Magento\Framework\View\Result\PageFactory $resultPageFactory)
{
    $this->_resultPageFactory = $resultPageFactory;
     parent::__construct($context);
}
public function execute()
    {
      
        return $this->_resultPageFactory->create();
    
    }
}