<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{
    /**
     * @Route("/", name="dashboard")
     */
    public function index(): \Symfony\Component\HttpFoundation\Response
    {
        return $this->render('dashboard/index.html.twig' , [
            'controller_name'=> 'DashboardController',
        ]);
    }
}
