<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class NotFoundController extends AbstractController
{
    /**
     * @Route("/not/found/404", name="not_found")
     */
    public function index()
    {
        return $this->render('not_found/index.html.twig', [
            'controller_name' => 'NotFoundController',
        ]);
    }
}
