<?php

namespace App\Controller;

use Doctrine\DBAL\Connection;
use Doctrine\DBAL\Exception;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class HomeController extends AbstractController
{
    /**
     * @throws Exception
     */
    #[Route('/', name: 'app_home')]
    public function index(Connection $connection): Response
    {
        // Extraire les données de la base de données var/database/sir.db3
        $sql = 'SELECT * FROM esp';
        $stmt = $connection->executeQuery($sql);

        // Récupérer les données dans un tableau associatif
        $dataEsp = $stmt->fetchAllAssociative();

        // Max 50 résultats
        $sirs = array_slice(array: $dataEsp, offset: 0, length: 50);

        return $this->render('home/index.html.twig', [
            'controller_name' => 'HomeController',
            'dataEsp' => $dataEsp,
        ]);
    }
}
