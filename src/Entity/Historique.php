<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Repository\HistoriqueRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'HISTORIQUE')]
#[ORM\Index(columns: ['ID_ESP'], name: 'IndexHisto1')]
#[ORM\Index(columns: ['ID_ESP', 'REFERENCE_DOCUMENT'], name: 'IndexHisto2')]
#[ORM\Entity(repositoryClass: HistoriqueRepository::class)]
class Historique
{
    use idTrait;

    #[ORM\Column(name: 'ID_ESP', type: 'integer', nullable: true)]
    private ?int $idEsp;

    #[ORM\Column(name: 'DATE_CONTROLE', type: 'text', length: 0, nullable: true)]
    private ?string $dateControle;

    #[ORM\Column(name: 'TYPE_CONTROLE', type: 'text', length: 0, nullable: true)]
    private ?string $typeControle;

    #[ORM\Column(name: 'DESCRIPTION', type: 'text', length: 0, nullable: true)]
    private ?string $description;

    #[ORM\Column(name: 'NOM_INSPECTEUR', type: 'text', length: 0, nullable: true)]
    private ?string $nomInspecteur;

    #[ORM\Column(name: 'REFERENCE_DOCUMENT', type: 'text', length: 0, nullable: true)]
    private ?string $referenceDocument;

    #[ORM\Column(name: 'DATE_MAJ', type: 'text', length: 0, nullable: true)]
    private ?string $dateMaj;

    public function getIdEsp(): ?int
    {
        return $this->idEsp;
    }

    public function setIdEsp(?int $idEsp): static
    {
        $this->idEsp = $idEsp;

        return $this;
    }

    public function getDateControle(): ?string
    {
        return $this->dateControle;
    }

    public function setDateControle(?string $dateControle): static
    {
        $this->dateControle = $dateControle;

        return $this;
    }

    public function getTypeControle(): ?string
    {
        return $this->typeControle;
    }

    public function setTypeControle(?string $typeControle): static
    {
        $this->typeControle = $typeControle;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getNomInspecteur(): ?string
    {
        return $this->nomInspecteur;
    }

    public function setNomInspecteur(?string $nomInspecteur): static
    {
        $this->nomInspecteur = $nomInspecteur;

        return $this;
    }

    public function getReferenceDocument(): ?string
    {
        return $this->referenceDocument;
    }

    public function setReferenceDocument(?string $referenceDocument): static
    {
        $this->referenceDocument = $referenceDocument;

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
