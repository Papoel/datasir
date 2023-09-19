<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Repository\ReferencesValeursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'REFERENCES_VALEURS')]
#[ORM\Entity(repositoryClass: ReferencesValeursRepository::class)]
class ReferencesValeurs
{
    use idTrait;

    #[ORM\Column(name: 'LIBELLE', type: 'text', length: 0, nullable: true)]
    private ?string $libelle;

    #[ORM\Column(name: 'VALEUR', type: 'text', length: 0, nullable: true)]
    private ?string $valeur;

    #[ORM\Column(name: 'DATE_MAJ', type: 'text', length: 0, nullable: true)]
    private ?string $dateMaj;

    public function getLibelle(): ?string
    {
        return $this->libelle;
    }

    public function setLibelle(?string $libelle): static
    {
        $this->libelle = $libelle;

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
