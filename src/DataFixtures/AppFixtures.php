<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBagInterface;
use Symfony\Component\Finder\Finder;

class AppFixtures extends Fixture
{
    public function __construct(private ParameterBagInterface $params)
    {
    }

    public function load(ObjectManager $manager): void
    {
        // Obtenir le chemin vers le répertoire du projet
        $projectDir = $this->params->get('kernel.project_dir');

        // Le répertoire SQL
        /** @phpstan-ignore-next-line */
        $sqlDirectory = $projectDir.'/var/database/SQL';

        // Utilisation de Finder pour trouver les fichiers SQL
        $finder = new Finder();
        $finder->in($sqlDirectory)->files()->name('*.sql');

        foreach ($finder as $file) {
            // Exécutez chaque fichier SQL
            $sql = $file->getContents();

            // Vérifiez si la requête SQL est vide
            if (!empty($sql)) {
                // Affichez le nom du fichier SQL (pour le débogage)
                echo 'Exécution du fichier SQL : '.$file->getRealPath()."\n";

                // Exécutez la requête SQL
                /* @phpstan-ignore-next-line */
                $manager->getConnection()->exec($sql);

                // Enregistrez en base de données
                $manager->flush();
            } else {
                echo 'Le fichier SQL est vide : '.$file->getRealPath()."\n";
            }
        }
    }
}
