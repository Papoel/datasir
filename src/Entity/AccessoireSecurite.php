<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Repository\AccessoireSecuriteRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'ACCESSOIRE_SECURITE')]
#[ORM\Index(columns: ['RF', 'ID_ESP_DIRECTEUR'], name: 'IndexAccSec1')]
#[ORM\Entity(repositoryClass: AccessoireSecuriteRepository::class)]
class AccessoireSecurite
{
    use IdTrait;

    #[ORM\Column(name: 'RF', type: 'text', length: 0, nullable: true)]
    private ?string $rf;

    #[ORM\Column(name: 'TYPE_ACC_SECU', type: 'text', length: 0, nullable: true)]
    private ?string $typeAccSecu;

    #[ORM\Column(name: 'CATEGORIE_RISQUE', type: 'text', length: 0, nullable: true)]
    private ?string $categorieRisque;

    #[ORM\Column(name: 'PRESSION_TARAGE', type: 'text', length: 0, nullable: true)]
    private ?string $pressionTarage;

    #[ORM\Column(name: 'CARACTERISTIQUE', type: 'text', length: 0, nullable: true)]
    private ?string $caracteristique;

    #[ORM\Column(name: 'FLUIDE_CONTROLE', type: 'text', length: 0, nullable: true)]
    private ?string $fluideControle;

    #[ORM\Column(name: 'FABRICANT', type: 'text', length: 0, nullable: true)]
    private ?string $fabricant;

    #[ORM\Column(name: 'TYPE_NR_FABRICATION', type: 'text', length: 0, nullable: true)]
    private ?string $typeNrFabrication;

    #[ORM\Column(name: 'BLN_TARAGE_RP', type: 'integer', nullable: true)]
    private ?int $blnTarageRp;

    #[ORM\Column(name: 'DECRET_CONSTRUCTION', type: 'text', length: 0, nullable: true)]
    private ?string $decretConstruction;

    #[ORM\Column(name: 'BLN_VERIFICATION_CONCOMITANTE_RP', type: 'integer', nullable: true)]
    private ?int $blnVerificationConcomitanteRp;

    #[ORM\Column(name: 'PERIODICITE_MANOEUVRABILITE', type: 'text', length: 0, nullable: true)]
    private ?string $periodiciteManoeuvrabilite;

    #[ORM\Column(name: 'DATE_DERNIERE_MANOEUVRABILITE', type: 'text', length: 0, nullable: true)]
    private ?string $dateDerniereManoeuvrabilite;

    #[ORM\Column(name: 'DATE_PROCHAINE_MANOEUVRABILITE', type: 'text', length: 0, nullable: true)]
    private ?string $dateProchaineManoeuvrabilite;

    #[ORM\Column(name: 'PERIODICITE_TARAGE_REGLAGE', type: 'text', length: 0, nullable: true)]
    private ?string $periodiciteTarageReglage;

    #[ORM\Column(name: 'DATE_DERNIERE_TARAGE_REGLAGE', type: 'text', length: 0, nullable: true)]
    private ?string $dateDerniereTarageReglage;

    #[ORM\Column(name: 'DATE_PROCHAINE_TARAGE_REGLAGE', type: 'text', length: 0, nullable: true)]
    private ?string $dateProchaineTarageReglage;

    #[ORM\Column(name: 'ID_ESP_DIRECTEUR', type: 'integer', nullable: true)]
    private ?int $idEspDirecteur;

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

    public function getTypeAccSecu(): ?string
    {
        return $this->typeAccSecu;
    }

    public function setTypeAccSecu(?string $typeAccSecu): static
    {
        $this->typeAccSecu = $typeAccSecu;

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

    public function getPressionTarage(): ?string
    {
        return $this->pressionTarage;
    }

    public function setPressionTarage(?string $pressionTarage): static
    {
        $this->pressionTarage = $pressionTarage;

        return $this;
    }

    public function getCaracteristique(): ?string
    {
        return $this->caracteristique;
    }

    public function setCaracteristique(?string $caracteristique): static
    {
        $this->caracteristique = $caracteristique;

        return $this;
    }

    public function getFluideControle(): ?string
    {
        return $this->fluideControle;
    }

    public function setFluideControle(?string $fluideControle): static
    {
        $this->fluideControle = $fluideControle;

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

    public function getTypeNrFabrication(): ?string
    {
        return $this->typeNrFabrication;
    }

    public function setTypeNrFabrication(?string $typeNrFabrication): static
    {
        $this->typeNrFabrication = $typeNrFabrication;

        return $this;
    }

    public function getBlnTarageRp(): ?int
    {
        return $this->blnTarageRp;
    }

    public function setBlnTarageRp(?int $blnTarageRp): static
    {
        $this->blnTarageRp = $blnTarageRp;

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

    public function getBlnVerificationConcomitanteRp(): ?int
    {
        return $this->blnVerificationConcomitanteRp;
    }

    public function setBlnVerificationConcomitanteRp(?int $blnVerificationConcomitanteRp): static
    {
        $this->blnVerificationConcomitanteRp = $blnVerificationConcomitanteRp;

        return $this;
    }

    public function getPeriodiciteManoeuvrabilite(): ?string
    {
        return $this->periodiciteManoeuvrabilite;
    }

    public function setPeriodiciteManoeuvrabilite(?string $periodiciteManoeuvrabilite): static
    {
        $this->periodiciteManoeuvrabilite = $periodiciteManoeuvrabilite;

        return $this;
    }

    public function getDateDerniereManoeuvrabilite(): ?string
    {
        return $this->dateDerniereManoeuvrabilite;
    }

    public function setDateDerniereManoeuvrabilite(?string $dateDerniereManoeuvrabilite): static
    {
        $this->dateDerniereManoeuvrabilite = $dateDerniereManoeuvrabilite;

        return $this;
    }

    public function getDateProchaineManoeuvrabilite(): ?string
    {
        return $this->dateProchaineManoeuvrabilite;
    }

    public function setDateProchaineManoeuvrabilite(?string $dateProchaineManoeuvrabilite): static
    {
        $this->dateProchaineManoeuvrabilite = $dateProchaineManoeuvrabilite;

        return $this;
    }

    public function getPeriodiciteTarageReglage(): ?string
    {
        return $this->periodiciteTarageReglage;
    }

    public function setPeriodiciteTarageReglage(?string $periodiciteTarageReglage): static
    {
        $this->periodiciteTarageReglage = $periodiciteTarageReglage;

        return $this;
    }

    public function getDateDerniereTarageReglage(): ?string
    {
        return $this->dateDerniereTarageReglage;
    }

    public function setDateDerniereTarageReglage(?string $dateDerniereTarageReglage): static
    {
        $this->dateDerniereTarageReglage = $dateDerniereTarageReglage;

        return $this;
    }

    public function getDateProchaineTarageReglage(): ?string
    {
        return $this->dateProchaineTarageReglage;
    }

    public function setDateProchaineTarageReglage(?string $dateProchaineTarageReglage): static
    {
        $this->dateProchaineTarageReglage = $dateProchaineTarageReglage;

        return $this;
    }

    public function getIdEspDirecteur(): ?int
    {
        return $this->idEspDirecteur;
    }

    public function setIdEspDirecteur(?int $idEspDirecteur): static
    {
        $this->idEspDirecteur = $idEspDirecteur;

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
