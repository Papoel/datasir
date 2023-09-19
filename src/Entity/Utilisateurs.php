<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Repository\UtilisateursRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'UTILISATEURS')]
#[ORM\Index(columns: ['PROFIL'], name: 'IndexUser2')]
#[ORM\Index(columns: ['IDENTIFIANT', 'PROFIL'], name: 'IndexUser1')]
#[ORM\Entity(repositoryClass: UtilisateursRepository::class)]
class Utilisateurs
{
    use idTrait;

    #[ORM\Column(name: 'IDENTIFIANT', type: 'text', length: 0, nullable: true)]
    private ?string $identifiant;

    #[ORM\Column(name: 'MOT_DE_PASSE', type: 'text', length: 0, nullable: true)]
    private ?string $motDePasse;

    #[ORM\Column(name: 'NOM', type: 'text', length: 0, nullable: true)]
    private ?string $nom;

    #[ORM\Column(name: 'PRENOM', type: 'text', length: 0, nullable: true)]
    private ?string $prenom;

    #[ORM\Column(name: 'PROFIL', type: 'integer', nullable: true)]
    private ?int $profil;

    #[ORM\Column(name: 'BLN_MDP_PROVISOIRE', type: 'integer', nullable: true)]
    private ?int $blnMdpProvisoire;

    #[ORM\Column(name: 'DATE_MAJ', type: 'text', length: 0, nullable: true)]
    private ?string $dateMaj;

    public function getIdentifiant(): ?string
    {
        return $this->identifiant;
    }

    public function setIdentifiant(?string $identifiant): static
    {
        $this->identifiant = $identifiant;

        return $this;
    }

    public function getMotDePasse(): ?string
    {
        return $this->motDePasse;
    }

    public function setMotDePasse(?string $motDePasse): static
    {
        $this->motDePasse = $motDePasse;

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

    public function getPrenom(): ?string
    {
        return $this->prenom;
    }

    public function setPrenom(?string $prenom): static
    {
        $this->prenom = $prenom;

        return $this;
    }

    public function getProfil(): ?int
    {
        return $this->profil;
    }

    public function setProfil(?int $profil): static
    {
        $this->profil = $profil;

        return $this;
    }

    public function getBlnMdpProvisoire(): ?int
    {
        return $this->blnMdpProvisoire;
    }

    public function setBlnMdpProvisoire(?int $blnMdpProvisoire): static
    {
        $this->blnMdpProvisoire = $blnMdpProvisoire;

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
