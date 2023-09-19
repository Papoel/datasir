<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Repository\SitesRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'SITES')]
#[ORM\Entity(repositoryClass: SitesRepository::class)]
class Sites
{
    use idTrait;

    #[ORM\Column(name: 'SITE', type: 'text', length: 0, nullable: true)]
    private ?string $site;

    #[ORM\Column(name: 'ADRESSE', type: 'text', length: 0, nullable: true)]
    private ?string $adresse;

    #[ORM\Column(name: 'UNITE', type: 'text', length: 0, nullable: true)]
    private ?string $unite;

    #[ORM\Column(name: 'TRIGRAMME', type: 'text', length: 0, nullable: true)]
    private ?string $trigramme;

    #[ORM\Column(name: 'TELEPHONE', type: 'text', length: 0, nullable: true)]
    private ?string $telephone;

    #[ORM\Column(name: 'TELECOPIE', type: 'text', length: 0, nullable: true)]
    private ?string $telecopie;

    #[ORM\Column(name: 'PROCEDURE_INSPECTION', type: 'text', length: 0, nullable: true)]
    private ?string $procedureInspection;

    #[ORM\Column(name: 'BLN_SELECTIONNE', type: 'integer', nullable: true)]
    private ?int $blnSelectionne;

    #[ORM\Column(name: 'DATE_MAJ', type: 'text', length: 0, nullable: true)]
    private ?string $dateMaj;

    public function getSite(): ?string
    {
        return $this->site;
    }

    public function setSite(?string $site): static
    {
        $this->site = $site;

        return $this;
    }

    public function getAdresse(): ?string
    {
        return $this->adresse;
    }

    public function setAdresse(?string $adresse): static
    {
        $this->adresse = $adresse;

        return $this;
    }

    public function getUnite(): ?string
    {
        return $this->unite;
    }

    public function setUnite(?string $unite): static
    {
        $this->unite = $unite;

        return $this;
    }

    public function getTrigramme(): ?string
    {
        return $this->trigramme;
    }

    public function setTrigramme(?string $trigramme): static
    {
        $this->trigramme = $trigramme;

        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): static
    {
        $this->telephone = $telephone;

        return $this;
    }

    public function getTelecopie(): ?string
    {
        return $this->telecopie;
    }

    public function setTelecopie(?string $telecopie): static
    {
        $this->telecopie = $telecopie;

        return $this;
    }

    public function getProcedureInspection(): ?string
    {
        return $this->procedureInspection;
    }

    public function setProcedureInspection(?string $procedureInspection): static
    {
        $this->procedureInspection = $procedureInspection;

        return $this;
    }

    public function getBlnSelectionne(): ?int
    {
        return $this->blnSelectionne;
    }

    public function setBlnSelectionne(?int $blnSelectionne): static
    {
        $this->blnSelectionne = $blnSelectionne;

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
