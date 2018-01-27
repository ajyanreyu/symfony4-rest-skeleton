<?php

namespace App\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use FOS\RestBundle\View\View;
use FOS\RestBundle\Controller\Annotations as Rest;

use Symfony\Component\HttpFoundation\Response;

class ExampleController extends FOSRestController
{
    /**
     * @Rest\Get("/example", name="example")
     */
    public function index()
    {
        return new View(['message' => 'Hello Symfony 4'], Response::HTTP_OK);
    }
}
