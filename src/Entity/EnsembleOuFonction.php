<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Entity\Traits\PiTrait;
use App\Repository\EnsembleOuFonctionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'ENSEMBLE_OU_FONCTION')]
#[ORM\Index(columns: ['RF'], name: 'IndexEnsFct2')]
#[ORM\Index(columns: ['TYPE_ENSEMBLE_OU_FONCTION', 'RF'], name: 'IndexEnsFct1')]
#[ORM\Entity(repositoryClass: EnsembleOuFonctionRepository::class)]
class EnsembleOuFonction
{
    use idTrait;
    use PiTrait;

    #[ORM\Column(name: 'TYPE_ENSEMBLE_OU_FONCTION', type: 'integer', nullable: true)]
    private ?int $typeEnsembleOuFonction;

    #[ORM\Column(name: 'RF', type: 'text', length: 0, nullable: true)]
    private ?string $rf;

    #[ORM\Column(name: 'NR_FABRICATION', type: 'text', length: 0, nullable: true)]
    private ?string $nrFabrication;

    #[ORM\Column(name: 'FABRICANT', type: 'text', length: 0, nullable: true)]
    private ?string $fabricant;

    #[ORM\Column(name: 'DESIGNATION', type: 'text', length: 0, nullable: true)]
    private ?string $designation;

    #[ORM\Column(name: 'ROLE', type: 'text', length: 0, nullable: true)]
    private ?string $role;

    #[ORM\Column(name: 'STATUT', type: 'text', length: 0, nullable: true)]
    private ?string $statut;

    #[ORM\Column(name: 'RF_SUIVI_PARAMETRE_FONCTIONNEMENT', type: 'text', length: 0, nullable: true)]
    private ?string $rfSuiviParametreFonctionnement;

    #[ORM\Column(name: 'SEUIL_UNITE', type: 'text', length: 0, nullable: true)]
    private ?string $seuilUnite;

    #[ORM\Column(name: 'COCL', type: 'text', length: 0, nullable: true)]
    private ?string $cocl;

    #[ORM\Column(name: 'OBSERVATION_SUIVI_FONCTIONNEMENT', type: 'text', length: 0, nullable: true)]
    private ?string $observationSuiviFonctionnement;

    #[ORM\Column(name: 'DATE_MAJ', type: 'text', length: 0, nullable: true)]
    private ?string $dateMaj;

    public function getTypeEnsembleOuFonction(): ?int
    {
        return $this->typeEnsembleOuFonction;
    }

    public function setTypeEnsembleOuFonction(?int $typeEnsembleOuFonction): static
    {
        $this->typeEnsembleOuFonction = $typeEnsembleOuFonction;

        return $this;
    }

    public function getRf(): ?string
    {
        return $this->rf;
    }

    public function setRf(?string $rf): static
    {
        $this->rf = $rf;

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

    public function getFabricant(): ?string
    {
        return $this->fabricant;
    }

    public function setFabricant(?string $fabricant): static
    {
        $this->fabricant = $fabricant;

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

    public function getRole(): ?string
    {
        return $this->role;
    }

    public function setRole(?string $role): static
    {
        $this->role = $role;

        return $this;
    }

    public function getStatut(): ?string
    {
        return $this->statut;
    }

    public function setStatut(?string $statut): static
    {
        $this->statut = $statut;

        return $this;
    }

    public function getRfSuiviParametreFonctionnement(): ?string
    {
        return $this->rfSuiviParametreFonctionnement;
    }

    public function setRfSuiviParametreFonctionnement(?string $rfSuiviParametreFonctionnement): static
    {
        $this->rfSuiviParametreFonctionnement = $rfSuiviParametreFonctionnement;

        return $this;
    }

    public function getSeuilUnite(): ?string
    {
        return $this->seuilUnite;
    }

    public function setSeuilUnite(?string $seuilUnite): static
    {
        $this->seuilUnite = $seuilUnite;

        return $this;
    }

    public function getCocl(): ?string
    {
        return $this->cocl;
    }

    public function setCocl(?string $cocl): static
    {
        $this->cocl = $cocl;

        return $this;
    }

    public function getObservationSuiviFonctionnement(): ?string
    {
        return $this->observationSuiviFonctionnement;
    }

    public function setObservationSuiviFonctionnement(?string $observationSuiviFonctionnement): static
    {
        $this->observationSuiviFonctionnement = $observationSuiviFonctionnement;

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
