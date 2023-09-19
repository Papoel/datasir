<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Repository\PlanRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Table(name: 'PLAN')]
#[ORM\Index(columns: ['DOC_PATH'], name: 'IndexPlan2')]
#[ORM\Index(columns: ['RF_OBJET_ASSOCIE', 'BLN_AVEC_ZS'], name: 'IndexPlan1')]
#[ORM\Entity(repositoryClass: PlanRepository::class)]
class Plan
{
    use idTrait;

    #[ORM\Column(name: 'RF_OBJET_ASSOCIE', type: 'text', length: 0, nullable: true)]
    private ?string $rfObjetAssocie;

    #[ORM\Column(name: 'DOC_PATH', type: 'text', length: 0, nullable: true)]
    private ?string $docPath;

    #[ORM\Column(name: 'DOC_NOM_A_AFFICHER', type: 'text', length: 0, nullable: true)]
    private ?string $docNomAAfficher;

    #[ORM\Column(name: 'BLN_AVEC_ZS', type: 'integer', nullable: true)]
    private ?int $blnAvecZs;

    #[ORM\Column(name: 'BLN_SELECTIONNE_POUR_PI', type: 'integer', nullable: true)]
    private ?int $blnSelectionnePourPi;

    public function getRfObjetAssocie(): ?string
    {
        return $this->rfObjetAssocie;
    }

    public function setRfObjetAssocie(?string $rfObjetAssocie): static
    {
        $this->rfObjetAssocie = $rfObjetAssocie;

        return $this;
    }

    public function getDocPath(): ?string
    {
        return $this->docPath;
    }

    public function setDocPath(?string $docPath): static
    {
        $this->docPath = $docPath;

        return $this;
    }

    public function getDocNomAAfficher(): ?string
    {
        return $this->docNomAAfficher;
    }

    public function setDocNomAAfficher(?string $docNomAAfficher): static
    {
        $this->docNomAAfficher = $docNomAAfficher;

        return $this;
    }

    public function getBlnAvecZs(): ?int
    {
        return $this->blnAvecZs;
    }

    public function setBlnAvecZs(?int $blnAvecZs): static
    {
        $this->blnAvecZs = $blnAvecZs;

        return $this;
    }

    public function getBlnSelectionnePourPi(): ?int
    {
        return $this->blnSelectionnePourPi;
    }

    public function setBlnSelectionnePourPi(?int $blnSelectionnePourPi): static
    {
        $this->blnSelectionnePourPi = $blnSelectionnePourPi;

        return $this;
    }
}
