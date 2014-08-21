<?php
namespace Application\Form;

use WPBase\Form\AbstractWPFormHandle;

use DoctrineORMModule\Form\Annotation\AnnotationBuilder;

use Application\Entity\Category;
use Application\Service\CategoryService;

class CategoryForm extends AbstractWPFormHandle
{
    
    public function __construct($em) {
        
        $builder = new AnnotationBuilder($em);
        $entity = new Category();
        $service = new CategoryService($em);
        parent::__construct($builder, $entity, $service);
                
    }

}
