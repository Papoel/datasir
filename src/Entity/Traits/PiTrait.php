<?php

declare(strict_types=1);

namespace App\Entity\Traits;

use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

trait PiTrait
{
    #[ORM\Column(name: 'REFERENCE_PI', type: Types::TEXT, length: 0, nullable: true)]
    private ?string $referencePi;

    #[ORM\Column(name: 'INDICE_PI', type: Types::TEXT, length: 0, nullable: true)]
    private ?string $indicePi;

    #[ORM\Column(name: 'CONSERVATION_PI', type: Types::TEXT, length: 0, nullable: true)]
    private ?string $conservationPi;

    #[ORM\Column(name: 'DIFFUSION_PI', type: Types::TEXT, length: 0, nullable: true)]
    private ?string $diffusionPi;

    #[ORM\Column(name: 'JUSTIFICATION_MONTEE_INDICE_PI', type: Types::TEXT, length: 0, nullable: true)]
    private ?string $justificationMonteeIndicePi;

    #[ORM\Column(name: 'REDACTEUR_PI', type: Types::TEXT, length: 0, nullable: true)]
    private ?string $redacteurPi;

    #[ORM\Column(name: 'GUIDE_SPECIFIQUE_PI', type: Types::TEXT, length: 0, nullable: true)]
    private ?string $guideSpecifiquePi;

    #[ORM\Column(name: 'REFERENCE_NOTE_ETUDE', type: Types::TEXT, length: 0, nullable: true)]
    private ?string $referenceNoteEtude;

    #[ORM\Column(name: 'OBSERVATION_PROCEDURES_APPLICABLES_PI', type: Types::TEXT, length: 0, nullable: true)]
    private ?string $observationProceduresApplicablesPi;

    public function getReferencePi(): ?string
    {
        return $this->referencePi;
    }

    public function setReferencePi(?string $referencePi): static
    {
        $this->referencePi = $referencePi;

        return $this;
    }

    public function getIndicePi(): ?string
    {
        return $this->indicePi;
    }

    public function setIndicePi(?string $indicePi): static
    {
        $this->indicePi = $indicePi;

        return $this;
    }

    public function getConservationPi(): ?string
    {
        return $this->conservationPi;
    }

    public function setConservationPi(?string $conservationPi): static
    {
        $this->conservationPi = $conservationPi;

        return $this;
    }

    public function getDiffusionPi(): ?string
    {
        return $this->diffusionPi;
    }

    public function setDiffusionPi(?string $diffusionPi): static
    {
        $this->diffusionPi = $diffusionPi;

        return $this;
    }

    public function getJustificationMonteeIndicePi(): ?string
    {
        return $this->justificationMonteeIndicePi;
    }

    public function setJustificationMonteeIndicePi(?string $justificationMonteeIndicePi): static
    {
        $this->justificationMonteeIndicePi = $justificationMonteeIndicePi;

        return $this;
    }

    public function getRedacteurPi(): ?string
    {
        return $this->redacteurPi;
    }

    public function setRedacteurPi(?string $redacteurPi): static
    {
        $this->redacteurPi = $redacteurPi;

        return $this;
    }

    public function getGuideSpecifiquePi(): ?string
    {
        return $this->guideSpecifiquePi;
    }

    public function setGuideSpecifiquePi(?string $guideSpecifiquePi): static
    {
        $this->guideSpecifiquePi = $guideSpecifiquePi;

        return $this;
    }

    public function getReferenceNoteEtude(): ?string
    {
        return $this->referenceNoteEtude;
    }

    public function setReferenceNoteEtude(?string $referenceNoteEtude): static
    {
        $this->referenceNoteEtude = $referenceNoteEtude;

        return $this;
    }

    public function getObservationProceduresApplicablesPi(): ?string
    {
        return $this->observationProceduresApplicablesPi;
    }

    public function setObservationProceduresApplicablesPi(?string $observationProceduresApplicablesPi): static
    {
        $this->observationProceduresApplicablesPi = $observationProceduresApplicablesPi;

        return $this;
    }
}
