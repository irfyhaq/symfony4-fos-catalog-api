<?php

namespace App\Controller;

use App\Form\CategoryType;
use App\Repository\CategoryRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


/**
 * Class CategoryController
 * @package App\Controller
 * @Rest\RouteResource("Category", pluralize=false)
 */
class CategoryController extends AbstractFOSRestController implements ClassResourceInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var CategoryRepository
     */
    private $categoryRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        CategoryRepository $categoryRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->categoryRepository = $categoryRepository;
    }

    public function getAction(string $id){
        return $this->view(
            $this->findCategoryById($id)
        );
    }

    public function cgetAction(){
        return $this->view(
            $this->categoryRepository->findAll()
        );
    }

    /**
     * @param $id
     *
     * @return Category|null
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    private function findCategoryById($id)
    {
        $category = $this->categoryRepository->find($id);

        if (null === $category) {
            throw new NotFoundHttpException();
        }
        return $category;
    }
}
