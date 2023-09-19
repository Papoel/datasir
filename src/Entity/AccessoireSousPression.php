<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Repository\AccessoireSousPressionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'ACCESSOIRE_SOUS_PRESSION')]
#[ORM\Index(columns: ['RF', 'ID_ESP'], name: 'IndexAccPres1')]
#[ORM\Entity(repositoryClass: AccessoireSousPressionRepository::class)]
class AccessoireSousPression
{
    use IdTrait;

    #[ORM\Column(name: 'RF', type: 'text', length: 0, nullable: true)]
    private ?string $rf;

    #[ORM\Column(name: 'TYPE_ACC_SOUS_PRESSION', type: 'text', length: 0, nullable: true)]
    private ?string $typeAccSousPression;

    #[ORM\Column(name: 'CATEGORIE_RISQUE', type: 'text', length: 0, nullable: true)]
    private ?string $categorieRisque;

    #[ORM\Column(name: 'FABRICANT', type: 'text', length: 0, nullable: true)]
    private ?string $fabricant;

    #[ORM\Column(name: 'NR_FABRICATION', type: 'text', length: 0, nullable: true)]
    private ?string $nrFabrication;

    #[ORM\Column(name: 'DECRET_CONSTRUCTION', type: 'text', length: 0, nullable: true)]
    private ?string $decretConstruction;

    #[ORM\Column(name: 'ID_ESP', type: 'integer', nullable: true)]
    private ?int $idEsp;

    #[ORM\Column(name: 'DATE_MAJ', type: 'text', length: 0, nullable: true)]
    private ?string $dateMaj;

    public function getRf(): ?string
    {
        return $this->rf;
    }

    public function setRf(?string $rf): static
    {
        $this->rf = $rf;

        return $this;
    }

    public function getTypeAccSousPression(): ?string
    {
        return $this->typeAccSousPression;
    }

    public function setTypeAccSousPression(?string $typeAccSousPression): static
    {
        $this->typeAccSousPression = $typeAccSousPression;

        return $this;
    }

    public function getCategorieRisque(): ?string
    {
        return $this->categorieRisque;
    }

    public function setCategorieRisque(?string $categorieRisque): static
    {
        $this->categorieRisque = $categorieRisque;

        return $this;
    }

    public function getFabricant(): ?string
    {
        return $this->fabricant;
    }

    public function setFabricant(?string $fabricant): static
    {
        $this->fabricant = $fabricant;

        return $this;
    }

    public function getNrFabrication(): ?string
    {
        return $this->nrFabrication;
    }

    public function setNrFabrication(?string $nrFabrication): static
    {
        $this->nrFabrication = $nrFabrication;

        return $this;
    }

    public function getDecretConstruction(): ?string
    {
        return $this->decretConstruction;
    }

    public function setDecretConstruction(?string $decretConstruction): static
    {
        $this->decretConstruction = $decretConstruction;

        return $this;
    }

    public function getIdEsp(): ?int
    {
        return $this->idEsp;
    }

    public function setIdEsp(?int $idEsp): static
    {
        $this->idEsp = $idEsp;

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
