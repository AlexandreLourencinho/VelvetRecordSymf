<?php


namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


/**
 * Class AcceuilController
 * @package App\Controller
 * @Route("/")
 */
class AcceuilController extends AbstractController
{

    /**
     * @return Response
     * @Route ("/", name="accueil")
     */
    public function index():Response {
        return $this->render('accueil/accueil.html.twig');
    }


}