<?php

namespace App\Controller;

use App\Entity\Wedstrijd;
use App\Form\WedstrijdType;
use App\Repository\WedstrijdRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="default")
     */
    public function index(WedstrijdRepository $wedstrijdRepository): Response
    {
        return $this->render('default/index.html.twig', [
            'wedstrijds' => $wedstrijdRepository->findAll(),
        ]);
    }
}
