<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Repository\EnsembleOuFonctionEspRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'ENSEMBLE_OU_FONCTION_ESP')]
#[ORM\Index(columns: ['ID_ESP'], name: 'IndexEnsFctEsp2')]
#[ORM\Index(columns: ['ID_ENSEMBLE_OU_FONCTION'], name: 'IndexEnsFctEsp1')]
#[ORM\Entity(repositoryClass: EnsembleOuFonctionEspRepository::class)]
class EnsembleOuFonctionEsp
{
    use idTrait;

    #[ORM\Column(name: 'ID_ENSEMBLE_OU_FONCTION', type: 'integer', nullable: true)]
    private ?int $idEnsembleOuFonction;

    #[ORM\Column(name: 'ID_ESP', type: 'integer', nullable: true)]
    private ?int $idEsp;

    #[ORM\Column(name: 'DATE_MAJ', type: 'text', length: 0, nullable: true)]
    private ?string $dateMaj;

    public function getIdEnsembleOuFonction(): ?int
    {
        return $this->idEnsembleOuFonction;
    }

    public function setIdEnsembleOuFonction(?int $idEnsembleOuFonction): static
    {
        $this->idEnsembleOuFonction = $idEnsembleOuFonction;

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
