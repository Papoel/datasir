<?php

namespace App\Entity;

use App\Entity\Traits\IdTrait;
use App\Entity\Traits\PiTrait;
use App\Repository\EspRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * TODO: A Factoriser !
 * Nombre de colonnes : 98.
 */
#[ORM\Table(name: 'ESP')]
#[ORM\Index(columns: ['TYPE_ESP'], name: 'IndexEsp2')]
#[ORM\Index(columns: ['RF', 'BLN_ESPDIRECTEUR'], name: 'IndexEsp1')]
#[ORM\Entity(repositoryClass: EspRepository::class)]
class Esp
{
    use idTrait;
    use PiTrait;

    #[ORM\Column(name: 'TYPE_ESP', type: 'text', length: 0, nullable: true)]
    private ?string $typeEsp;

    #[ORM\Column(name: 'RF', type: 'text', length: 0, nullable: true)]
    private ?string $rf;

    #[ORM\Column(name: 'DESIGNATION', type: 'text', length: 0, nullable: true)]
    private ?string $designation;

    #[ORM\Column(name: 'LOCALISATION', type: 'text', length: 0, nullable: true)]
    private ?string $localisation;

    #[ORM\Column(name: 'NIVEAU', type: 'text', length: 0, nullable: true)]
    private ?string $niveau;

    #[ORM\Column(name: 'BLN_ESSV', type: 'integer', nullable: true)]
    private ?int $blnEssv;

    #[ORM\Column(name: 'BLN_REEVALUATION_PERIODIQUE', type: 'integer', nullable: true)]
    private ?int $blnReevaluationPeriodique;

    #[ORM\Column(name: 'BLN_ESPN', type: 'integer', nullable: true)]
    private ?int $blnEspn;

    #[ORM\Column(name: 'NIVEAU_ESPN', type: 'text', length: 0, nullable: true)]
    private ?string $niveauEspn;

    #[ORM\Column(name: 'CLASSEMENT_EIP', type: 'text', length: 0, nullable: true)]
    private ?string $classementEip;

    #[ORM\Column(name: 'NR_FABRICATION', type: 'text', length: 0, nullable: true)]
    private ?string $nrFabrication;

    #[ORM\Column(name: 'TENANT', type: 'text', length: 0, nullable: true)]
    private ?string $tenant;

    #[ORM\Column(name: 'ABOUTISSANT', type: 'text', length: 0, nullable: true)]
    private ?string $aboutissant;

    #[ORM\Column(name: 'FABRICANT', type: 'text', length: 0, nullable: true)]
    private ?string $fabricant;

    #[ORM\Column(name: 'ETAT', type: 'text', length: 0, nullable: true)]
    private ?string $etat;

    #[ORM\Column(name: 'ANNEE_FABRICATION', type: 'text', length: 0, nullable: true)]
    private ?string $anneeFabrication;

    #[ORM\Column(name: 'DECRET_CONSTRUCTION', type: 'text', length: 0, nullable: true)]
    private ?string $decretConstruction;

    #[ORM\Column(name: 'REGLEMENTATION_1', type: 'text', length: 0, nullable: true)]
    private ?string $reglementation1;

    #[ORM\Column(name: 'REGLEMENTATION_2', type: 'text', length: 0, nullable: true)]
    private ?string $reglementation2;

    #[ORM\Column(name: 'REGLEMENTATION_3', type: 'text', length: 0, nullable: true)]
    private ?string $reglementation3;

    #[ORM\Column(name: 'VOLUME', type: 'text', length: 0, nullable: true)]
    private ?string $volume;

    #[ORM\Column(name: 'DN', type: 'text', length: 0, nullable: true)]
    private ?string $dn;

    #[ORM\Column(name: 'NATURE_FLUIDE', type: 'text', length: 0, nullable: true)]
    private ?string $natureFluide;

    #[ORM\Column(name: 'GROUPE_FLUIDE', type: 'text', length: 0, nullable: true)]
    private ?string $groupeFluide;

    #[ORM\Column(name: 'BLN_MODELISE_BRT_CICERO', type: 'integer', nullable: true)]
    private ?int $blnModeliseBrtCicero;

    #[ORM\Column(name: 'CATEGORIE_RISQUE', type: 'text', length: 0, nullable: true)]
    private ?string $categorieRisque;

    #[ORM\Column(name: 'PS', type: 'text', length: 0, nullable: true)]
    private ?string $ps;

    #[ORM\Column(name: 'P_FONCTIONNEMENT', type: 'text', length: 0, nullable: true)]
    private ?string $pFonctionnement;

    #[ORM\Column(name: 'TS', type: 'text', length: 0, nullable: true)]
    private ?string $ts;

    #[ORM\Column(name: 'T_FONCTIONNEMENT', type: 'text', length: 0, nullable: true)]
    private ?string $tFonctionnement;

    #[ORM\Column(name: 'BLN_REQUALIF_PERIODIQUE', type: 'integer', nullable: true)]
    private ?int $blnRequalifPeriodique;

    #[ORM\Column(name: 'REVETEMENT', type: 'text', length: 0, nullable: true)]
    private ?string $revetement;

    #[ORM\Column(name: 'BLN_REPRESENTATIF_DECALORIFUGEAGE', type: 'integer', nullable: true)]
    private ?int $blnRepresentatifDecalorifugeage;

    #[ORM\Column(name: 'RF_ESP_REPRESENTATIF_DECALORIFUGEAGE', type: 'text', length: 0, nullable: true)]
    private ?string $rfEspRepresentatifDecalorifugeage;

    #[ORM\Column(name: 'BLN_ESPDIRECTEUR', type: 'integer', nullable: true)]
    private ?int $blnEspdirecteur;

    #[ORM\Column(name: 'RF_ESP_DIRECTEUR', type: 'text', length: 0, nullable: true)]
    private ?string $rfEspDirecteur;

    #[ORM\Column(name: 'PRESSION_EPREUVE', type: 'text', length: 0, nullable: true)]
    private ?string $pressionEpreuve;

    #[ORM\Column(name: 'STATUT', type: 'text', length: 0, nullable: true)]
    private ?string $statut;

    #[ORM\Column(name: 'CRITERE_PLANIFICATION', type: 'text', length: 0, nullable: true)]
    private ?string $criterePlanification;

    #[ORM\Column(name: 'SERVICE_PROPRIETAIRE', type: 'text', length: 0, nullable: true)]
    private ?string $serviceProprietaire;

    #[ORM\Column(name: 'BLN_DECLARATION_MES', type: 'integer', nullable: true)]
    private ?int $blnDeclarationMes;

    #[ORM\Column(name: 'RF_SUIVI_PARAMETRE', type: 'text', length: 0, nullable: true)]
    private ?string $rfSuiviParametre;

    #[ORM\Column(name: 'SEUIL_UNITE', type: 'text', length: 0, nullable: true)]
    private ?string $seuilUnite;

    #[ORM\Column(name: 'COCL', type: 'text', length: 0, nullable: true)]
    private ?string $cocl;

    #[ORM\Column(name: 'OBSERVATION_PARAMETRE', type: 'text', length: 0, nullable: true)]
    private ?string $observationParametre;

    #[ORM\Column(name: 'DONNEES_NOMENCLATURES_REPERE', type: 'text', length: 0, nullable: true)]
    private ?string $donneesNomenclaturesRepere;

    #[ORM\Column(name: 'DONNEES_NOMENCLATURES_DESIGNATION', type: 'text', length: 0, nullable: true)]
    private ?string $donneesNomenclaturesDesignation;

    #[ORM\Column(name: 'DONNEES_NOMENCLATURES_NUANCE', type: 'text', length: 0, nullable: true)]
    private ?string $donneesNomenclaturesNuance;

    #[ORM\Column(name: 'DONNEES_NOMENCLATURES_DIAM_EXTERNE', type: 'text', length: 0, nullable: true)]
    private ?string $donneesNomenclaturesDiamExterne;

    #[ORM\Column(name: 'DONNEES_NOMENCLATURES_EPAISSEUR_NOMINALE', type: 'text', length: 0, nullable: true)]
    private ?string $donneesNomenclaturesEpaisseurNominale;

    #[ORM\Column(name: 'DONNEES_NOMENCLATURES_EPAISSEUR_CALC', type: 'text', length: 0, nullable: true)]
    private ?string $donneesNomenclaturesEpaisseurCalc;

    #[ORM\Column(name: 'DONNEES_NOMENCLATURES_EPAISSEUR_ALERTE', type: 'text', length: 0, nullable: true)]
    private ?string $donneesNomenclaturesEpaisseurAlerte;

    #[ORM\Column(name: 'OBSERVATION_NOMENCLATURE', type: 'text', length: 0, nullable: true)]
    private ?string $observationNomenclature;

    #[ORM\Column(name: 'RF_SUPPORTAGE', type: 'text', length: 0, nullable: true)]
    private ?string $rfSupportage;

    #[ORM\Column(name: 'TYPE_SUPPORTAGE', type: 'text', length: 0, nullable: true)]
    private ?string $typeSupportage;

    #[ORM\Column(name: 'TYPE_LIAISON', type: 'text', length: 0, nullable: true)]
    private ?string $typeLiaison;

    #[ORM\Column(name: 'PERIODICITE_IP', type: 'text', length: 0, nullable: true)]
    private ?string $periodiciteIp;

    #[ORM\Column(name: 'DATE_DERNIERE_ECHEANCE_IP', type: 'text', length: 0, nullable: true)]
    private ?string $dateDerniereEcheanceIp;

    #[ORM\Column(name: 'DATE_PROCHAINE_ECHEANCE_IP', type: 'text', length: 0, nullable: true)]
    private ?string $dateProchaineEcheanceIp;

    #[ORM\Column(name: 'PERIODICITE_RP', type: 'text', length: 0, nullable: true)]
    private ?string $periodiciteRp;

    #[ORM\Column(name: 'DATE_DERNIERE_ECHEANCE_RP', type: 'text', length: 0, nullable: true)]
    private ?string $dateDerniereEcheanceRp;

    #[ORM\Column(name: 'DATE_PROCHAINE_ECHEANCE_RP', type: 'text', length: 0, nullable: true)]
    private ?string $dateProchaineEcheanceRp;

    #[ORM\Column(name: 'PERIODICITIE_IP_SANS_SIR', type: 'text', length: 0, nullable: true)]
    private ?string $periodicitieIpSansSir;

    #[ORM\Column(name: 'PERIODICITIE_RP_SANS_SIR', type: 'text', length: 0, nullable: true)]
    private ?string $periodicitieRpSansSir;

    #[ORM\Column(name: 'OBSERVATION_ACC_SEC_PI', type: 'text', length: 0, nullable: true)]
    private ?string $observationAccSecPi;

    #[ORM\Column(name: 'OBSERVATION_ACC_SEC_RI', type: 'text', length: 0, nullable: true)]
    private ?string $observationAccSecRi;

    #[ORM\Column(name: 'VERIFICATION_CONCOMITANTE_RP', type: 'integer', nullable: true)]
    private ?int $verificationConcomitanteRp;

    #[ORM\Column(name: 'PERIODICITE_MANOEUV', type: 'text', length: 0, nullable: true)]
    private ?string $periodiciteManoeuv;

    #[ORM\Column(name: 'DATE_DERNIERE_ECHEANCE_MANOEUV', type: 'text', length: 0, nullable: true)]
    private ?string $dateDerniereEcheanceManoeuv;

    #[ORM\Column(name: 'DATE_PROCHAINE_ECHEANCE_MANOEUV', type: 'text', length: 0, nullable: true)]
    private ?string $dateProchaineEcheanceManoeuv;

    #[ORM\Column(name: 'TARAGE_RP', type: 'integer', nullable: true)]
    private ?int $tarageRp;

    #[ORM\Column(name: 'PERIODICITE_TARAGE', type: 'text', length: 0, nullable: true)]
    private ?string $periodiciteTarage;

    #[ORM\Column(name: 'DATE_DERNIERE_ECHEANCE_TARAGE', type: 'text', length: 0, nullable: true)]
    private ?string $dateDerniereEcheanceTarage;

    #[ORM\Column(name: 'DATE_PROCHAINE_ECHEANCE_TARAGE', type: 'text', length: 0, nullable: true)]
    private ?string $dateProchaineEcheanceTarage;

    #[ORM\Column(name: 'OBSERVATION_EZS_PI', type: 'text', length: 0, nullable: true)]
    private ?string $observationEzsPi;

    #[ORM\Column(name: 'PERIODICITE_SF', type: 'text', length: 0, nullable: true)]
    private ?string $periodiciteSf;

    #[ORM\Column(name: 'DATE_DERNIERE_SF', type: 'text', length: 0, nullable: true)]
    private ?string $dateDerniereSf;

    #[ORM\Column(name: 'DATE_PROCHAINE_SF', type: 'text', length: 0, nullable: true)]
    private ?string $dateProchaineSf;

    #[ORM\Column(name: 'OBSERVATION_SF', type: 'text', length: 0, nullable: true)]
    private ?string $observationSf;

    #[ORM\Column(name: 'SERVICE_PROPRIETAIRE_SOUPAPES', type: 'text', length: 0, nullable: true)]
    private ?string $serviceProprietaireSoupapes;

    #[ORM\Column(name: 'SERVICE_PROPRIETAIRE_CHAINE_PROTECTION', type: 'text', length: 0, nullable: true)]
    private ?string $serviceProprietaireChaineProtection;

    #[ORM\Column(name: 'PERIODICITE_ECS', type: 'text', length: 0, nullable: true)]
    private ?string $periodiciteEcs;

    #[ORM\Column(name: 'DATE_DERNIERE_ECHEANCE_ECS', type: 'text', length: 0, nullable: true)]
    private ?string $dateDerniereEcheanceEcs;

    #[ORM\Column(name: 'DATE_PROCHAINE_ECHEANCE_ECS', type: 'text', length: 0, nullable: true)]
    private ?string $dateProchaineEcheanceEcs;

    #[ORM\Column(name: 'VERIFICATION_CONCOMITANTE_ECS', type: 'integer', nullable: true)]
    private ?int $verificationConcomitanteEcs;

    #[ORM\Column(name: 'COMPLEMENT_ECS_PI', type: 'text', length: 0, nullable: true)]
    private ?string $complementEcsPi;

    #[ORM\Column(name: 'OBSERVATION_IP_RP_PI', type: 'text', length: 0, nullable: true)]
    private ?string $observationIpRpPi;

    #[ORM\Column(name: 'DATE_MAJ', type: 'text', length: 0, nullable: true)]
    private ?string $dateMaj;

    public function getTypeEsp(): ?string
    {
        return $this->typeEsp;
    }

    public function setTypeEsp(?string $typeEsp): static
    {
        $this->typeEsp = $typeEsp;

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

    public function getDesignation(): ?string
    {
        return $this->designation;
    }

    public function setDesignation(?string $designation): static
    {
        $this->designation = $designation;

        return $this;
    }

    public function getLocalisation(): ?string
    {
        return $this->localisation;
    }

    public function setLocalisation(?string $localisation): static
    {
        $this->localisation = $localisation;

        return $this;
    }

    public function getNiveau(): ?string
    {
        return $this->niveau;
    }

    public function setNiveau(?string $niveau): static
    {
        $this->niveau = $niveau;

        return $this;
    }

    public function getBlnEssv(): ?int
    {
        return $this->blnEssv;
    }

    public function setBlnEssv(?int $blnEssv): static
    {
        $this->blnEssv = $blnEssv;

        return $this;
    }

    public function getBlnReevaluationPeriodique(): ?int
    {
        return $this->blnReevaluationPeriodique;
    }

    public function setBlnReevaluationPeriodique(?int $blnReevaluationPeriodique): static
    {
        $this->blnReevaluationPeriodique = $blnReevaluationPeriodique;

        return $this;
    }

    public function getBlnEspn(): ?int
    {
        return $this->blnEspn;
    }

    public function setBlnEspn(?int $blnEspn): static
    {
        $this->blnEspn = $blnEspn;

        return $this;
    }

    public function getNiveauEspn(): ?string
    {
        return $this->niveauEspn;
    }

    public function setNiveauEspn(?string $niveauEspn): static
    {
        $this->niveauEspn = $niveauEspn;

        return $this;
    }

    public function getClassementEip(): ?string
    {
        return $this->classementEip;
    }

    public function setClassementEip(?string $classementEip): static
    {
        $this->classementEip = $classementEip;

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

    public function getTenant(): ?string
    {
        return $this->tenant;
    }

    public function setTenant(?string $tenant): static
    {
        $this->tenant = $tenant;

        return $this;
    }

    public function getAboutissant(): ?string
    {
        return $this->aboutissant;
    }

    public function setAboutissant(?string $aboutissant): static
    {
        $this->aboutissant = $aboutissant;

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

    public function getEtat(): ?string
    {
        return $this->etat;
    }

    public function setEtat(?string $etat): static
    {
        $this->etat = $etat;

        return $this;
    }

    public function getAnneeFabrication(): ?string
    {
        return $this->anneeFabrication;
    }

    public function setAnneeFabrication(?string $anneeFabrication): static
    {
        $this->anneeFabrication = $anneeFabrication;

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

    public function getReglementation1(): ?string
    {
        return $this->reglementation1;
    }

    public function setReglementation1(?string $reglementation1): static
    {
        $this->reglementation1 = $reglementation1;

        return $this;
    }

    public function getReglementation2(): ?string
    {
        return $this->reglementation2;
    }

    public function setReglementation2(?string $reglementation2): static
    {
        $this->reglementation2 = $reglementation2;

        return $this;
    }

    public function getReglementation3(): ?string
    {
        return $this->reglementation3;
    }

    public function setReglementation3(?string $reglementation3): static
    {
        $this->reglementation3 = $reglementation3;

        return $this;
    }

    public function getVolume(): ?string
    {
        return $this->volume;
    }

    public function setVolume(?string $volume): static
    {
        $this->volume = $volume;

        return $this;
    }

    public function getDn(): ?string
    {
        return $this->dn;
    }

    public function setDn(?string $dn): static
    {
        $this->dn = $dn;

        return $this;
    }

    public function getNatureFluide(): ?string
    {
        return $this->natureFluide;
    }

    public function setNatureFluide(?string $natureFluide): static
    {
        $this->natureFluide = $natureFluide;

        return $this;
    }

    public function getGroupeFluide(): ?string
    {
        return $this->groupeFluide;
    }

    public function setGroupeFluide(?string $groupeFluide): static
    {
        $this->groupeFluide = $groupeFluide;

        return $this;
    }

    public function getBlnModeliseBrtCicero(): ?int
    {
        return $this->blnModeliseBrtCicero;
    }

    public function setBlnModeliseBrtCicero(?int $blnModeliseBrtCicero): static
    {
        $this->blnModeliseBrtCicero = $blnModeliseBrtCicero;

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

    public function getPs(): ?string
    {
        return $this->ps;
    }

    public function setPs(?string $ps): static
    {
        $this->ps = $ps;

        return $this;
    }

    public function getPFonctionnement(): ?string
    {
        return $this->pFonctionnement;
    }

    public function setPFonctionnement(?string $pFonctionnement): static
    {
        $this->pFonctionnement = $pFonctionnement;

        return $this;
    }

    public function getTs(): ?string
    {
        return $this->ts;
    }

    public function setTs(?string $ts): static
    {
        $this->ts = $ts;

        return $this;
    }

    public function getTFonctionnement(): ?string
    {
        return $this->tFonctionnement;
    }

    public function setTFonctionnement(?string $tFonctionnement): static
    {
        $this->tFonctionnement = $tFonctionnement;

        return $this;
    }

    public function getBlnRequalifPeriodique(): ?int
    {
        return $this->blnRequalifPeriodique;
    }

    public function setBlnRequalifPeriodique(?int $blnRequalifPeriodique): static
    {
        $this->blnRequalifPeriodique = $blnRequalifPeriodique;

        return $this;
    }

    public function getRevetement(): ?string
    {
        return $this->revetement;
    }

    public function setRevetement(?string $revetement): static
    {
        $this->revetement = $revetement;

        return $this;
    }

    public function getBlnRepresentatifDecalorifugeage(): ?int
    {
        return $this->blnRepresentatifDecalorifugeage;
    }

    public function setBlnRepresentatifDecalorifugeage(?int $blnRepresentatifDecalorifugeage): static
    {
        $this->blnRepresentatifDecalorifugeage = $blnRepresentatifDecalorifugeage;

        return $this;
    }

    public function getRfEspRepresentatifDecalorifugeage(): ?string
    {
        return $this->rfEspRepresentatifDecalorifugeage;
    }

    public function setRfEspRepresentatifDecalorifugeage(?string $rfEspRepresentatifDecalorifugeage): static
    {
        $this->rfEspRepresentatifDecalorifugeage = $rfEspRepresentatifDecalorifugeage;

        return $this;
    }

    public function getBlnEspdirecteur(): ?int
    {
        return $this->blnEspdirecteur;
    }

    public function setBlnEspdirecteur(?int $blnEspdirecteur): static
    {
        $this->blnEspdirecteur = $blnEspdirecteur;

        return $this;
    }

    public function getRfEspDirecteur(): ?string
    {
        return $this->rfEspDirecteur;
    }

    public function setRfEspDirecteur(?string $rfEspDirecteur): static
    {
        $this->rfEspDirecteur = $rfEspDirecteur;

        return $this;
    }

    public function getPressionEpreuve(): ?string
    {
        return $this->pressionEpreuve;
    }

    public function setPressionEpreuve(?string $pressionEpreuve): static
    {
        $this->pressionEpreuve = $pressionEpreuve;

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

    public function getCriterePlanification(): ?string
    {
        return $this->criterePlanification;
    }

    public function setCriterePlanification(?string $criterePlanification): static
    {
        $this->criterePlanification = $criterePlanification;

        return $this;
    }

    public function getServiceProprietaire(): ?string
    {
        return $this->serviceProprietaire;
    }

    public function setServiceProprietaire(?string $serviceProprietaire): static
    {
        $this->serviceProprietaire = $serviceProprietaire;

        return $this;
    }

    public function getBlnDeclarationMes(): ?int
    {
        return $this->blnDeclarationMes;
    }

    public function setBlnDeclarationMes(?int $blnDeclarationMes): static
    {
        $this->blnDeclarationMes = $blnDeclarationMes;

        return $this;
    }

    public function getRfSuiviParametre(): ?string
    {
        return $this->rfSuiviParametre;
    }

    public function setRfSuiviParametre(?string $rfSuiviParametre): static
    {
        $this->rfSuiviParametre = $rfSuiviParametre;

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

    public function getObservationParametre(): ?string
    {
        return $this->observationParametre;
    }

    public function setObservationParametre(?string $observationParametre): static
    {
        $this->observationParametre = $observationParametre;

        return $this;
    }

    public function getDonneesNomenclaturesRepere(): ?string
    {
        return $this->donneesNomenclaturesRepere;
    }

    public function setDonneesNomenclaturesRepere(?string $donneesNomenclaturesRepere): static
    {
        $this->donneesNomenclaturesRepere = $donneesNomenclaturesRepere;

        return $this;
    }

    public function getDonneesNomenclaturesDesignation(): ?string
    {
        return $this->donneesNomenclaturesDesignation;
    }

    public function setDonneesNomenclaturesDesignation(?string $donneesNomenclaturesDesignation): static
    {
        $this->donneesNomenclaturesDesignation = $donneesNomenclaturesDesignation;

        return $this;
    }

    public function getDonneesNomenclaturesNuance(): ?string
    {
        return $this->donneesNomenclaturesNuance;
    }

    public function setDonneesNomenclaturesNuance(?string $donneesNomenclaturesNuance): static
    {
        $this->donneesNomenclaturesNuance = $donneesNomenclaturesNuance;

        return $this;
    }

    public function getDonneesNomenclaturesDiamExterne(): ?string
    {
        return $this->donneesNomenclaturesDiamExterne;
    }

    public function setDonneesNomenclaturesDiamExterne(?string $donneesNomenclaturesDiamExterne): static
    {
        $this->donneesNomenclaturesDiamExterne = $donneesNomenclaturesDiamExterne;

        return $this;
    }

    public function getDonneesNomenclaturesEpaisseurNominale(): ?string
    {
        return $this->donneesNomenclaturesEpaisseurNominale;
    }

    public function setDonneesNomenclaturesEpaisseurNominale(?string $donneesNomenclaturesEpaisseurNominale): static
    {
        $this->donneesNomenclaturesEpaisseurNominale = $donneesNomenclaturesEpaisseurNominale;

        return $this;
    }

    public function getDonneesNomenclaturesEpaisseurCalc(): ?string
    {
        return $this->donneesNomenclaturesEpaisseurCalc;
    }

    public function setDonneesNomenclaturesEpaisseurCalc(?string $donneesNomenclaturesEpaisseurCalc): static
    {
        $this->donneesNomenclaturesEpaisseurCalc = $donneesNomenclaturesEpaisseurCalc;

        return $this;
    }

    public function getDonneesNomenclaturesEpaisseurAlerte(): ?string
    {
        return $this->donneesNomenclaturesEpaisseurAlerte;
    }

    public function setDonneesNomenclaturesEpaisseurAlerte(?string $donneesNomenclaturesEpaisseurAlerte): static
    {
        $this->donneesNomenclaturesEpaisseurAlerte = $donneesNomenclaturesEpaisseurAlerte;

        return $this;
    }

    public function getObservationNomenclature(): ?string
    {
        return $this->observationNomenclature;
    }

    public function setObservationNomenclature(?string $observationNomenclature): static
    {
        $this->observationNomenclature = $observationNomenclature;

        return $this;
    }

    public function getRfSupportage(): ?string
    {
        return $this->rfSupportage;
    }

    public function setRfSupportage(?string $rfSupportage): static
    {
        $this->rfSupportage = $rfSupportage;

        return $this;
    }

    public function getTypeSupportage(): ?string
    {
        return $this->typeSupportage;
    }

    public function setTypeSupportage(?string $typeSupportage): static
    {
        $this->typeSupportage = $typeSupportage;

        return $this;
    }

    public function getTypeLiaison(): ?string
    {
        return $this->typeLiaison;
    }

    public function setTypeLiaison(?string $typeLiaison): static
    {
        $this->typeLiaison = $typeLiaison;

        return $this;
    }

    public function getPeriodiciteIp(): ?string
    {
        return $this->periodiciteIp;
    }

    public function setPeriodiciteIp(?string $periodiciteIp): static
    {
        $this->periodiciteIp = $periodiciteIp;

        return $this;
    }

    public function getDateDerniereEcheanceIp(): ?string
    {
        return $this->dateDerniereEcheanceIp;
    }

    public function setDateDerniereEcheanceIp(?string $dateDerniereEcheanceIp): static
    {
        $this->dateDerniereEcheanceIp = $dateDerniereEcheanceIp;

        return $this;
    }

    public function getDateProchaineEcheanceIp(): ?string
    {
        return $this->dateProchaineEcheanceIp;
    }

    public function setDateProchaineEcheanceIp(?string $dateProchaineEcheanceIp): static
    {
        $this->dateProchaineEcheanceIp = $dateProchaineEcheanceIp;

        return $this;
    }

    public function getPeriodiciteRp(): ?string
    {
        return $this->periodiciteRp;
    }

    public function setPeriodiciteRp(?string $periodiciteRp): static
    {
        $this->periodiciteRp = $periodiciteRp;

        return $this;
    }

    public function getDateDerniereEcheanceRp(): ?string
    {
        return $this->dateDerniereEcheanceRp;
    }

    public function setDateDerniereEcheanceRp(?string $dateDerniereEcheanceRp): static
    {
        $this->dateDerniereEcheanceRp = $dateDerniereEcheanceRp;

        return $this;
    }

    public function getDateProchaineEcheanceRp(): ?string
    {
        return $this->dateProchaineEcheanceRp;
    }

    public function setDateProchaineEcheanceRp(?string $dateProchaineEcheanceRp): static
    {
        $this->dateProchaineEcheanceRp = $dateProchaineEcheanceRp;

        return $this;
    }

    public function getPeriodicitieIpSansSir(): ?string
    {
        return $this->periodicitieIpSansSir;
    }

    public function setPeriodicitieIpSansSir(?string $periodicitieIpSansSir): static
    {
        $this->periodicitieIpSansSir = $periodicitieIpSansSir;

        return $this;
    }

    public function getPeriodicitieRpSansSir(): ?string
    {
        return $this->periodicitieRpSansSir;
    }

    public function setPeriodicitieRpSansSir(?string $periodicitieRpSansSir): static
    {
        $this->periodicitieRpSansSir = $periodicitieRpSansSir;

        return $this;
    }

    public function getObservationAccSecPi(): ?string
    {
        return $this->observationAccSecPi;
    }

    public function setObservationAccSecPi(?string $observationAccSecPi): static
    {
        $this->observationAccSecPi = $observationAccSecPi;

        return $this;
    }

    public function getObservationAccSecRi(): ?string
    {
        return $this->observationAccSecRi;
    }

    public function setObservationAccSecRi(?string $observationAccSecRi): static
    {
        $this->observationAccSecRi = $observationAccSecRi;

        return $this;
    }

    public function getVerificationConcomitanteRp(): ?int
    {
        return $this->verificationConcomitanteRp;
    }

    public function setVerificationConcomitanteRp(?int $verificationConcomitanteRp): static
    {
        $this->verificationConcomitanteRp = $verificationConcomitanteRp;

        return $this;
    }

    public function getPeriodiciteManoeuv(): ?string
    {
        return $this->periodiciteManoeuv;
    }

    public function setPeriodiciteManoeuv(?string $periodiciteManoeuv): static
    {
        $this->periodiciteManoeuv = $periodiciteManoeuv;

        return $this;
    }

    public function getDateDerniereEcheanceManoeuv(): ?string
    {
        return $this->dateDerniereEcheanceManoeuv;
    }

    public function setDateDerniereEcheanceManoeuv(?string $dateDerniereEcheanceManoeuv): static
    {
        $this->dateDerniereEcheanceManoeuv = $dateDerniereEcheanceManoeuv;

        return $this;
    }

    public function getDateProchaineEcheanceManoeuv(): ?string
    {
        return $this->dateProchaineEcheanceManoeuv;
    }

    public function setDateProchaineEcheanceManoeuv(?string $dateProchaineEcheanceManoeuv): static
    {
        $this->dateProchaineEcheanceManoeuv = $dateProchaineEcheanceManoeuv;

        return $this;
    }

    public function getTarageRp(): ?int
    {
        return $this->tarageRp;
    }

    public function setTarageRp(?int $tarageRp): static
    {
        $this->tarageRp = $tarageRp;

        return $this;
    }

    public function getPeriodiciteTarage(): ?string
    {
        return $this->periodiciteTarage;
    }

    public function setPeriodiciteTarage(?string $periodiciteTarage): static
    {
        $this->periodiciteTarage = $periodiciteTarage;

        return $this;
    }

    public function getDateDerniereEcheanceTarage(): ?string
    {
        return $this->dateDerniereEcheanceTarage;
    }

    public function setDateDerniereEcheanceTarage(?string $dateDerniereEcheanceTarage): static
    {
        $this->dateDerniereEcheanceTarage = $dateDerniereEcheanceTarage;

        return $this;
    }

    public function getDateProchaineEcheanceTarage(): ?string
    {
        return $this->dateProchaineEcheanceTarage;
    }

    public function setDateProchaineEcheanceTarage(?string $dateProchaineEcheanceTarage): static
    {
        $this->dateProchaineEcheanceTarage = $dateProchaineEcheanceTarage;

        return $this;
    }

    public function getObservationEzsPi(): ?string
    {
        return $this->observationEzsPi;
    }

    public function setObservationEzsPi(?string $observationEzsPi): static
    {
        $this->observationEzsPi = $observationEzsPi;

        return $this;
    }

    public function getPeriodiciteSf(): ?string
    {
        return $this->periodiciteSf;
    }

    public function setPeriodiciteSf(?string $periodiciteSf): static
    {
        $this->periodiciteSf = $periodiciteSf;

        return $this;
    }

    public function getDateDerniereSf(): ?string
    {
        return $this->dateDerniereSf;
    }

    public function setDateDerniereSf(?string $dateDerniereSf): static
    {
        $this->dateDerniereSf = $dateDerniereSf;

        return $this;
    }

    public function getDateProchaineSf(): ?string
    {
        return $this->dateProchaineSf;
    }

    public function setDateProchaineSf(?string $dateProchaineSf): static
    {
        $this->dateProchaineSf = $dateProchaineSf;

        return $this;
    }

    public function getObservationSf(): ?string
    {
        return $this->observationSf;
    }

    public function setObservationSf(?string $observationSf): static
    {
        $this->observationSf = $observationSf;

        return $this;
    }

    public function getServiceProprietaireSoupapes(): ?string
    {
        return $this->serviceProprietaireSoupapes;
    }

    public function setServiceProprietaireSoupapes(?string $serviceProprietaireSoupapes): static
    {
        $this->serviceProprietaireSoupapes = $serviceProprietaireSoupapes;

        return $this;
    }

    public function getServiceProprietaireChaineProtection(): ?string
    {
        return $this->serviceProprietaireChaineProtection;
    }

    public function setServiceProprietaireChaineProtection(?string $serviceProprietaireChaineProtection): static
    {
        $this->serviceProprietaireChaineProtection = $serviceProprietaireChaineProtection;

        return $this;
    }

    public function getPeriodiciteEcs(): ?string
    {
        return $this->periodiciteEcs;
    }

    public function setPeriodiciteEcs(?string $periodiciteEcs): static
    {
        $this->periodiciteEcs = $periodiciteEcs;

        return $this;
    }

    public function getDateDerniereEcheanceEcs(): ?string
    {
        return $this->dateDerniereEcheanceEcs;
    }

    public function setDateDerniereEcheanceEcs(?string $dateDerniereEcheanceEcs): static
    {
        $this->dateDerniereEcheanceEcs = $dateDerniereEcheanceEcs;

        return $this;
    }

    public function getDateProchaineEcheanceEcs(): ?string
    {
        return $this->dateProchaineEcheanceEcs;
    }

    public function setDateProchaineEcheanceEcs(?string $dateProchaineEcheanceEcs): static
    {
        $this->dateProchaineEcheanceEcs = $dateProchaineEcheanceEcs;

        return $this;
    }

    public function getVerificationConcomitanteEcs(): ?int
    {
        return $this->verificationConcomitanteEcs;
    }

    public function setVerificationConcomitanteEcs(?int $verificationConcomitanteEcs): static
    {
        $this->verificationConcomitanteEcs = $verificationConcomitanteEcs;

        return $this;
    }

    public function getComplementEcsPi(): ?string
    {
        return $this->complementEcsPi;
    }

    public function setComplementEcsPi(?string $complementEcsPi): static
    {
        $this->complementEcsPi = $complementEcsPi;

        return $this;
    }

    public function getObservationIpRpPi(): ?string
    {
        return $this->observationIpRpPi;
    }

    public function setObservationIpRpPi(?string $observationIpRpPi): static
    {
        $this->observationIpRpPi = $observationIpRpPi;

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
