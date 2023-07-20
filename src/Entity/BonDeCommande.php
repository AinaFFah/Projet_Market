<?php

namespace App\Entity;

use App\Repository\BonDeCommandeRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: BonDeCommandeRepository::class)]
class BonDeCommande
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $code_commande = null;

    #[ORM\Column(length: 255)]
    private ?string $reference_facture = null;

    #[ORM\Column(length: 255)]
    private ?string $reference_facture_fornisseur = null;

    #[ORM\Column(length: 255)]
    private ?string $reference_facture_embarquement = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $date_arrive = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private ?\DateTimeInterface $prevision_date_arrive = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $delai_import = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $type_commande = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $status = null;

    #[ORM\Column(nullable: true)]
    private ?int $tarif_applique = null;

    #[ORM\Column(nullable: true)]
    private ?float $fret = null;

    #[ORM\Column(nullable: true)]
    private ?int $a_compte_payer = null;

    #[ORM\Column(nullable: true)]
    private ?float $volume_commande = null;

    #[ORM\Column(nullable: true)]
    private ?float $pat_commande = null;

    #[ORM\Column(nullable: true)]
    private ?float $vol_reel = null;

    #[ORM\Column]
    private ?float $frais = null;

    #[ORM\Column]
    private ?\DateTimeImmutable $cretedAt = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCodeCommande(): ?string
    {
        return $this->code_commande;
    }

    public function setCodeCommande(string $code_commande): static
    {
        $this->code_commande = $code_commande;

        return $this;
    }

    public function getReferenceFacture(): ?string
    {
        return $this->reference_facture;
    }

    public function setReferenceFacture(string $reference_facture): static
    {
        $this->reference_facture = $reference_facture;

        return $this;
    }

    public function getReferenceFactureFornisseur(): ?string
    {
        return $this->reference_facture_fornisseur;
    }

    public function setReferenceFactureFornisseur(string $reference_facture_fornisseur): static
    {
        $this->reference_facture_fornisseur = $reference_facture_fornisseur;

        return $this;
    }

    public function getReferenceFactureEmbarquement(): ?string
    {
        return $this->reference_facture_embarquement;
    }

    public function setReferenceFactureEmbarquement(string $reference_facture_embarquement): static
    {
        $this->reference_facture_embarquement = $reference_facture_embarquement;

        return $this;
    }

    public function getDateArrive(): ?\DateTimeInterface
    {
        return $this->date_arrive;
    }

    public function setDateArrive(?\DateTimeInterface $date_arrive): static
    {
        $this->date_arrive = $date_arrive;

        return $this;
    }

    public function getPrevisionDateArrive(): ?\DateTimeInterface
    {
        return $this->prevision_date_arrive;
    }

    public function setPrevisionDateArrive(?\DateTimeInterface $prevision_date_arrive): static
    {
        $this->prevision_date_arrive = $prevision_date_arrive;

        return $this;
    }

    public function getDelaiImport(): ?string
    {
        return $this->delai_import;
    }

    public function setDelaiImport(?string $delai_import): static
    {
        $this->delai_import = $delai_import;

        return $this;
    }

    public function getTypeCommande(): ?string
    {
        return $this->type_commande;
    }

    public function setTypeCommande(?string $type_commande): static
    {
        $this->type_commande = $type_commande;

        return $this;
    }

    public function getStatus(): ?string
    {
        return $this->status;
    }

    public function setStatus(?string $status): static
    {
        $this->status = $status;

        return $this;
    }

    public function getTarifApplique(): ?int
    {
        return $this->tarif_applique;
    }

    public function setTarifApplique(?int $tarif_applique): static
    {
        $this->tarif_applique = $tarif_applique;

        return $this;
    }

    public function getFret(): ?float
    {
        return $this->fret;
    }

    public function setFret(?float $fret): static
    {
        $this->fret = $fret;

        return $this;
    }

    public function getAComptePayer(): ?int
    {
        return $this->a_compte_payer;
    }

    public function setAComptePayer(?int $a_compte_payer): static
    {
        $this->a_compte_payer = $a_compte_payer;

        return $this;
    }

    public function getVolumeCommande(): ?float
    {
        return $this->volume_commande;
    }

    public function setVolumeCommande(?float $volume_commande): static
    {
        $this->volume_commande = $volume_commande;

        return $this;
    }

    public function getPatCommande(): ?float
    {
        return $this->pat_commande;
    }

    public function setPatCommande(?float $pat_commande): static
    {
        $this->pat_commande = $pat_commande;

        return $this;
    }

    public function getVolReel(): ?float
    {
        return $this->vol_reel;
    }

    public function setVolReel(?float $vol_reel): static
    {
        $this->vol_reel = $vol_reel;

        return $this;
    }

    public function getFrai(): ?float
    {
        return $this->frais;
    }

    public function setFrai(float $frais): static
    {
        $this->frais = $frais;

        return $this;
    }

    public function getCretedAt(): ?\DateTimeImmutable
    {
        return $this->cretedAt;
    }

    public function setCretedAt(\DateTimeImmutable $cretedAt): static
    {
        $this->cretedAt = $cretedAt;

        return $this;
    }
}
