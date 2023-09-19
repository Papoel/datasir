<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'ZONES_SENSIBLES')]
#[ORM\Index(columns: ['ID_ESP'], name: 'IndexZS1')]
#[ORM\Entity]
class ZonesSensibles
{
    use idTrait;

    #[ORM\Column(name: 'ID_ESP', type: 'integer', nullable: true)]
    private ?int $idEsp;

    #[ORM\Column(name: 'REFERENCE_ZS', type: 'text', length: 0, nullable: true)]
    private ?string $referenceZs;

    #[ORM\Column(name: 'DESIGNATION', type: 'text', length: 0, nullable: true)]
    private ?string $designation;

    #[ORM\Column(name: 'BLN_ZS_ANALOGUE', type: 'integer', nullable: true)]
    private ?int $blnZsAnalogue;

    #[ORM\Column(name: 'DATE_DERNIER_CONTROLE_EZS', type: 'text', length: 0, nullable: true)]
    private ?string $dateDernierControleEzs;

    #[ORM\Column(name: 'PERIODICITE_EZS', type: 'text', length: 0, nullable: true)]
    private ?string $periodiciteEzs;

    #[ORM\Column(name: 'DATE_PROCHAIN_CONTROLE_EZS', type: 'text', length: 0, nullable: true)]
    private ?string $dateProchainControleEzs;

    #[ORM\Column(name: 'TYPE_CONTROLE', type: 'text', length: 0, nullable: true)]
    private ?string $typeControle;

    #[ORM\Column(name: 'MODE_DEGRADATION', type: 'text', length: 0, nullable: true)]
    private ?string $modeDegradation;

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

    public function getReferenceZs(): ?string
    {
        return $this->referenceZs;
    }

    public function setReferenceZs(?string $referenceZs): static
    {
        $this->referenceZs = $referenceZs;

        return $this;
    }

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): static
    {
        $this->designation = $designation;

        return $this;
    }

    public function getBlnZsAnalogue(): ?int
    {
        return $this->blnZsAnalogue;
    }

    public function setBlnZsAnalogue(?int $blnZsAnalogue): static
    {
        $this->blnZsAnalogue = $blnZsAnalogue;

        return $this;
    }

    public function getDateDernierControleEzs(): ?string
    {
        return $this->dateDernierControleEzs;
    }

    public function setDateDernierControleEzs(?string $dateDernierControleEzs): static
    {
        $this->dateDernierControleEzs = $dateDernierControleEzs;

        return $this;
    }

    public function getPeriodiciteEzs(): ?string
    {
        return $this->periodiciteEzs;
    }

    public function setPeriodiciteEzs(?string $periodiciteEzs): static
    {
        $this->periodiciteEzs = $periodiciteEzs;

        return $this;
    }

    public function getDateProchainControleEzs(): ?string
    {
        return $this->dateProchainControleEzs;
    }

    public function setDateProchainControleEzs(?string $dateProchainControleEzs): static
    {
        $this->dateProchainControleEzs = $dateProchainControleEzs;

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

    public function getModeDegradation(): ?string
    {
        return $this->modeDegradation;
    }

    public function setModeDegradation(?string $modeDegradation): static
    {
        $this->modeDegradation = $modeDegradation;

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
