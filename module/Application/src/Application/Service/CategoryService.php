<?php
namespace Application\Service;

use WPBase\Service\AbstractWPService;
use Doctrine\ORM\EntityManager;

class CategoryService extends AbstractWPService
{
    public function __construct(EntityManager $em)
    {
        $this->entity = 'Application\Entity\Category';
        parent::__construct($em);
    }

}