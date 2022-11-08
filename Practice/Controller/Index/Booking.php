<?php

namespace Hello\Practice\Controller\Index;


use Magento\Framework\App\Action\Action;
use Magento\Framework\App\Action\Context;
use Magento\Framework\App\ResponseInterface;
use Hello\Practice\Model\View;
use Hello\Practice\Model\ResourceModel\View as ViewResource;

class Booking extends Action
{
    
    private $view;
    
    private $viewResource;

   
    public function __construct(
        Context $context,
        View $view,
        ViewResource $viewResource
    )
    {
        parent::__construct($context);
        $this->view = $view;
        $this->viewResource = $viewResource;
    }

    /**
     * Execute action based on request and return result
     *
     * Note: Request will be added as operation argument in future
     *
     * @return \Magento\Framework\Controller\ResultInterface|ResponseInterface
     * @throws \Magento\Framework\Exception\NotFoundException
     */
    public function execute()
    {
        /* Get the post data */
        $data = $this->getRequest()->getParams();

        /* Set the data in the model */
        $viewModel = $this->view;
        $viewModel->setData($data);

        try {
            /* Use the resource model to save the model in the DB */
            $this->viewResource->save($viewModel);
            $this->messageManager->addSuccessMessage("Data saved successfully!");
        } catch (\Exception $exception) {
            $this->messageManager->addErrorMessage(__("Error saving data"));
        }

        /* Redirect back to cars page */
        $redirect = $this->resultRedirectFactory->create();
        $redirect->setPath('practice/next/next');
        return $redirect;
    }
}