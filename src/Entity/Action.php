<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Repository\ActionRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'ACTION')]
#[ORM\Index(columns: ['ID_ESP'], name: 'IndexAction1')]
#[ORM\Entity(repositoryClass: ActionRepository::class)]
class Action
{
    use idTrait;

    #[ORM\Column(name: 'ID_ESP', type: 'integer', nullable: true)]
    private ?int $idEsp;

    #[ORM\Column(name: 'NOM', type: 'text', length: 0, nullable: true)]
    private ?string $nom;

    #[ORM\Column(name: 'DESCRIPTION', type: 'text', length: 0, nullable: true)]
    private ?string $description;

    #[ORM\Column(name: 'DATE_BUTEE', type: 'text', length: 0, nullable: true)]
    private ?string $dateButee;

    #[ORM\Column(name: 'STATUT', type: 'text', length: 0, nullable: true)]
    private ?string $statut;

    #[ORM\Column(name: 'COMMENTAIRE', type: 'text', length: 0, nullable: true)]
    private ?string $commentaire;

    #[ORM\Column(name: 'SERVICE_EN_CHARGE', type: 'text', length: 0, nullable: true)]
    private ?string $serviceEnCharge;

    #[ORM\Column(name: 'DATE_MAJ_MANUELLE_UTILISATEUR', type: 'text', length: 0, nullable: true)]
    private ?string $dateMajManuelleUtilisateur;

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

    public function getNom(): ?string
    {
        return $this->nom;
    }

    public function setNom(?string $nom): static
    {
        $this->nom = $nom;

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

    public function getDateButee(): ?string
    {
        return $this->dateButee;
    }

    public function setDateButee(?string $dateButee): static
    {
        $this->dateButee = $dateButee;

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

    public function getCommentaire(): ?string
    {
        return $this->commentaire;
    }

    public function setCommentaire(?string $commentaire): static
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    public function getServiceEnCharge(): ?string
    {
        return $this->serviceEnCharge;
    }

    public function setServiceEnCharge(?string $serviceEnCharge): static
    {
        $this->serviceEnCharge = $serviceEnCharge;

        return $this;
    }

    public function getDateMajManuelleUtilisateur(): ?string
    {
        return $this->dateMajManuelleUtilisateur;
    }

    public function setDateMajManuelleUtilisateur(?string $dateMajManuelleUtilisateur): static
    {
        $this->dateMajManuelleUtilisateur = $dateMajManuelleUtilisateur;

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
