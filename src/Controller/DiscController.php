<?php

namespace App\Controller;

use App\Entity\Disc;
use App\Form\DiscType;
use App\Repository\DiscRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\File\UploadedFile;
use Symfony\Component\HttpFoundation\File\Exception\FileException;


/**
 * @Route("/disc")
 */
class DiscController extends AbstractController
{
    /**
     * @Route("/", name="disc_index", methods={"GET"})
     */
    public function index(): Response
    {
        $discs = $this->getDoctrine()
            ->getRepository(Disc::class)
            ->findAll();
        $nombre = $this->getDoctrine()->getRepository(Disc::class)->compteurDisques();

        return $this->render('disc/index.html.twig', [
            'discs' => $discs, 'nombre'=>$nombre[0]
        ]);
    }

    /**
     * @Route("/new", name="disc_new", methods={"GET","POST"})
     */
    public function new(Request $request): Response
    {
        $disc = new Disc();
        $form = $this->createForm(DiscType::class, $disc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $discFile */
            $discFile = $form->get('discPicture')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($discFile) {
                $originalFilename = pathinfo($discFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$discFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $discFile->move(
                        $this->getParameter('disc_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $disc->setDiscPicture($newFilename);
            }
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->persist($disc);
            $entityManager->flush();

            return $this->redirectToRoute('disc_index');
        }

        return $this->render('disc/new.html.twig', [
            'disc' => $disc,
            'form' => $form->createView(),
        ]);
    }


    /**
     * @Route("/{discId}", name="disc_show", methods={"GET"})
     */
    public function show(Disc $disc): Response
    {
        return $this->render('disc/show.html.twig', [
            'disc' => $disc,
        ]);
    }

    /**
     * @Route("/{discId}/edit", name="disc_edit", methods={"GET","POST"})
     */
    public function edit(Request $request, Disc $disc): Response
    {
        $form = $this->createForm(DiscType::class, $disc);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            /** @var UploadedFile $discFile */
            $discFile = $form->get('discPicture')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($discFile) {
                $originalFilename = pathinfo($discFile->getClientOriginalName(), PATHINFO_FILENAME);
                // this is needed to safely include the file name as part of the URL
                $safeFilename = transliterator_transliterate('Any-Latin; Latin-ASCII; [^A-Za-z0-9_] remove; Lower()', $originalFilename);
                $newFilename = $safeFilename.'-'.uniqid().'.'.$discFile->guessExtension();

                // Move the file to the directory where brochures are stored
                try {
                    $discFile->move(
                        $this->getParameter('disc_directory'),
                        $newFilename
                    );
                } catch (FileException $e) {
                    // ... handle exception if something happens during file upload
                }

                // updates the 'brochureFilename' property to store the PDF file name
                // instead of its contents
                $disc->setDiscPicture($newFilename);
            }
            $this->getDoctrine()->getManager()->flush();

            return $this->redirectToRoute('disc_index');
        }

        return $this->render('disc/edit.html.twig', [
            'disc' => $disc,
            'form' => $form->createView(),
        ]);
    }

    /**
     * @Route("/{discId}", name="disc_delete", methods={"POST"})
     */
    public function delete(Request $request, Disc $disc): Response
    {
        if ($this->isCsrfTokenValid('delete'.$disc->getDiscId(), $request->request->get('_token'))) {
            $entityManager = $this->getDoctrine()->getManager();
            $entityManager->remove($disc);
            $entityManager->flush();
        }

        return $this->redirectToRoute('disc_index');
    }
}
