<?php

namespace App\Controller\AccessoiresSecurite;

use App\Entity\AccessoireSecurite;
use App\Form\AccessoireSecuriteType;
use App\Repository\AccessoireSecuriteRepository;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/accessoire-securite')]
class AccessoireSecuriteController extends AbstractController
{
    public function __construct(
        private readonly AccessoireSecuriteRepository $accessoireSecuriteRepository
    ) {
    }

    #[Route('/', name: 'app_accessoire_securite_index', methods: ['GET'])]
    public function index(Request $request): Response
    {
        return $this->render(view: 'accessoire_securite/index.html.twig', parameters: [
            'accessoire_securites' => $this->accessoireSecuriteRepository->findAccessoiresSecuritePaginated(
                page: $request->query->getInt(key: 'page', default: 1)
            ),
        ]);
    }

    #[Route('/new', name: 'app_accessoire_securite_new', methods: ['GET', 'POST'])]
    public function new(Request $request, EntityManagerInterface $entityManager): Response
    {
        $accessoireSecurite = new AccessoireSecurite();
        $form = $this->createForm(type: AccessoireSecuriteType::class, data: $accessoireSecurite, options: [
            'disable_id_esp_directeur' => false,
        ]);

        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->persist($accessoireSecurite);
            $entityManager->flush();

            return $this->redirectToRoute(route: 'app_accessoire_securite_index', parameters: [], status: Response::HTTP_SEE_OTHER);
        }

        return $this->render(view: 'accessoire_securite/new.html.twig', parameters: [
            'accessoire_securite' => $accessoireSecurite,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_accessoire_securite_show', methods: ['GET'])]
    public function show(AccessoireSecurite $accessoireSecurite): Response
    {
        return $this->render(view: 'accessoire_securite/show.html.twig', parameters: [
            'accessoire_securite' => $accessoireSecurite,
        ]);
    }

    #[Route('/{id}/edit', name: 'app_accessoire_securite_edit', methods: ['GET', 'POST'])]
    public function edit(Request $request, AccessoireSecurite $accessoireSecurite, EntityManagerInterface $entityManager): Response
    {
        $form = $this->createForm(type: AccessoireSecuriteType::class, data: $accessoireSecurite, options: [
            'disable_id_esp_directeur' => true,
        ]);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $entityManager->flush();

            return $this->redirectToRoute(route: 'app_accessoire_securite_index', parameters: [], status: Response::HTTP_SEE_OTHER);
        }

        return $this->render(view: 'accessoire_securite/edit.html.twig', parameters: [
            'accessoire_securite' => $accessoireSecurite,
            'form' => $form->createView(),
        ]);
    }

    #[Route('/{id}', name: 'app_accessoire_securite_delete', methods: ['POST'])]
    public function delete(
        Request $request,
        AccessoireSecurite $accessoireSecurite,
        EntityManagerInterface $entityManager,
    ): Response {
        /* @phpstan-ignore-next-line */
        if ($this->isCsrfTokenValid(id: 'delete'.$accessoireSecurite->getId(), token: $request->request->get(key: '_token'))) {
            $entityManager->remove($accessoireSecurite);
            $entityManager->flush();
        }

        return $this->redirectToRoute(route: 'app_accessoire_securite_index', parameters: [], status: Response::HTTP_SEE_OTHER);
    }
}
