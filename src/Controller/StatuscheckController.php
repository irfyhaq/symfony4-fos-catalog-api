<?php

namespace App\Controller;

use FOS\RestBundle\Controller\AbstractFOSRestController;
use FOS\RestBundle\Controller\Annotations;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class StatuscheckController extends AbstractFOSRestController
{
    /**
     * @Annotations\Get(path="/ping")
     */
    public function ping()
    {
        return new JsonResponse(
            'pong'
        );
    }
}
