<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    /**
     * @Route("/main", name="main")
     */
    public function index(): Response
    {
        return $this->render('main/index.html.twig');
    }

    /**
     * @Route("/cardetails/{nr}", name="cardetails", requirements={"nr"="\d+"})
     */
    public function carDetais(int $nr = null): Response
    {
        $file = $nr ? 'cars/car'.$nr : 'main/index2';
        return $this->render($file.'.html.twig');
    }
}
