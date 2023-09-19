<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Repository\ParametresRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'PARAMETRES')]
#[ORM\Entity(repositoryClass: ParametresRepository::class)]
class Parametres
{
    use idTrait;

    #[ORM\Column(name: 'NOM', type: 'text', length: 0, nullable: true)]
    private ?string $nom;

    #[ORM\Column(name: 'VALEUR', type: 'text', length: 0, nullable: true)]
    private ?string $valeur;

    #[ORM\Column(name: 'DATE_MAJ', type: 'text', length: 0, nullable: true)]
    private ?string $dateMaj;

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

        return $this;
    }

    public function getValeur(): ?string
    {
        return $this->valeur;
    }

    public function setValeur(?string $valeur): static
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getDateMaj(): ?string
    {
        return $this->dateMaj;
    }

    public function setDateMaj(?string $dateMaj): static
    {
        $this->dateMaj = $dateMaj;

        return $this;
    }
}
