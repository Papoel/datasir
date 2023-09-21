<?php

namespace App\Controller;

use App\Repository\AccessoireSecuriteRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    public function __construct(
        private readonly AccessoireSecuriteRepository $accessoireSecuriteRepository
    ) {
    }

    #[Route('/', name: 'app_home')]
    public function index(Request $request): Response
    {
        return $this->render(view: 'home/index.html.twig', parameters: [
            'accessoireSecurite' => $this->accessoireSecuriteRepository->findAccessoiresSecuritePaginated(
                page: $request->query->getInt(key: 'page', default: 1)
            ),
        ]);
    }
}
