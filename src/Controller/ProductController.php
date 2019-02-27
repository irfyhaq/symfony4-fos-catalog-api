<?php

namespace App\Controller;

use App\Entity\Product;
use App\Form\ProductType;
use App\Repository\ProductRepository;
use Doctrine\ORM\EntityManagerInterface;
use FOS\RestBundle\Controller\Annotations as Rest;
use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Routing\ClassResourceInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;


/**
 * Class ProductController
 * @package App\Controller
 * @Rest\RouteResource("Product", pluralize=false)
 */
class ProductController extends AbstractFOSRestController implements ClassResourceInterface
{
    /**
     * @var EntityManagerInterface
     */
    private $entityManager;

    /**
     * @var productRepository
     */
    private $productRepository;

    public function __construct(
        EntityManagerInterface $entityManager,
        ProductRepository $productRepository
    )
    {
        $this->entityManager = $entityManager;
        $this->productRepository = $productRepository;
    }

    public function getAction(string $id){
        return $this->view(
            $this->findProductById($id)
        );
    }

    public function cgetAction(){
        return $this->view(
            $this->productRepository->findAll()
        );
    }

    public function postAction(Request $request)
    {
        $form = $this->createForm(ProductType::class, new Product());
        $form->submit(
            $request->request->all()
        );

        if(false === $form->isValid()){
            return $this->view(
                $form
            );
        }

        $this->entityManager->persist($form->getData());
        $this->entityManager->flush();

        return $this->view(
                [
                    'status' => 'ok'
                ],
               Response::HTTP_CREATED
        );
    }

    public function putAction(Request $request, string $id)
    {
        $existingProduct = $this->findProductById($id);

        $form = $this->createForm(ProductType::class, $existingProduct);

        $form->submit($request->request->all());

        if (false === $form->isValid()) {
            return $this->view($form);
        }

        $this->entityManager->flush();

        return $this->view(null, Response::HTTP_NO_CONTENT);
    }

    public function patchAction(Request $request, string $id)
    {
        $existingProduct = $this->findProductById($id);

        $form = $this->createForm(ProductType::class, $existingProduct);

        $form->submit($request->request->all(), false);

        if (false === $form->isValid()) {
            return $this->view($form);
        }

        $this->entityManager->flush();

        return $this->view(null, Response::HTTP_NO_CONTENT);
    }

    public function deleteAction(string $id)
    {
        $product = $this->findProductById($id);
        $this->entityManager->remove($product);
        $this->entityManager->flush();
        return $this->view(null, Response::HTTP_NO_CONTENT);
    }

    /**
     * @param $id
     *
     * @return Product|null
     * @throws \Symfony\Component\HttpKernel\Exception\NotFoundHttpException
     */
    private function findProductById($id)
    {
        $product = $this->productRepository->find($id);

        if (null === $product) {
            throw new NotFoundHttpException();
        }
        return $product;
    }
}
