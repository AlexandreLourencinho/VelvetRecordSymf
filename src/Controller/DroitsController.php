<?php

namespace App\Controller;

use App\Entity\Droits;
use App\Form\DroitsType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/droits")
 */
class DroitsController extends AbstractController
{
    /**
     * @Route("/", name="droits_index", methods={"GET"})
     */
    public function index(): Response
    {
        $droits = $this->getDoctrine()
            ->getRepository(Droits::class)
            ->findAll();

        return $this->render('droits/index.html.twig', [
            'droits' => $droits,
        ]);
    }

    /**
     * @Route("/new", name="droits_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $droit = new Droits();
        $form = $this->createForm(DroitsType::class, $droit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($droit);
            $entityManager->flush();

            return $this->redirectToRoute('droits_index');
        }

        return $this->render('droits/new.html.twig', [
            'droit' => $droit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{droitsId}", name="droits_show", methods={"GET"})
     */
    public function show(Droits $droit): Response
    {
        return $this->render('droits/show.html.twig', [
            'droit' => $droit,
        ]);
    }

    /**
     * @Route("/{droitsId}/edit", name="droits_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Droits $droit): Response
    {
        $form = $this->createForm(DroitsType::class, $droit);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('droits_index');
        }

        return $this->render('droits/edit.html.twig', [
            'droit' => $droit,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{droitsId}", name="droits_delete", methods={"POST"})
     */
    public function delete(Request $request, Droits $droit): Response
    {
        if ($this->isCsrfTokenValid('delete'.$droit->getDroitsId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($droit);
            $entityManager->flush();
        }

        return $this->redirectToRoute('droits_index');
    }
}
