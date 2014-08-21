<?php
namespace Application\Controller;

use WPBase\Controller\AbstractWPController;

class IndexController extends AbstractWPController
{
    
    public function __construct() {
        $this->service = "Application\Service\CategoryService";
        $this->itensPerPage = 20;
        $this->controller = "Application\Controller\IndexController";
        $this->route = "application";
        $this->form = "Application\Form\CategoryForm";

    }
    
    public function remove($id)
    {
        $this->redirect()->toRoute($this->route, array('controller' => $this->controller, 'action' => 'index'));
        parent::deleteAction();
        
    }
    
//    public function editarAction()
//    {
//        if($this->getRequest()->isPost()){
//            print_r($this->getRequest()); die;
//        }
//        parent::editarAction();
//    }
    
//    public function indexAction()
//    {
//        return new ViewModel();
//    }
}
