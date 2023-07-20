<?php

namespace App\Entity;

use App\Repository\ArticleRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ArticleRepository::class)]
class Article
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $pic = null;

    #[ORM\Column(length: 9, nullable: true)]
    private ?string $code_article = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $designation = null;

    #[ORM\Column(length: 255, nullable: true)]
    private ?string $description = null;

    #[ORM\Column(nullable: true)]
    private ?float $pcb = null;

    #[ORM\Column(nullable: true)]
    private ?float $prix_achat = null;

    #[ORM\Column(nullable: true)]
    private ?int $depot = null;

    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $created_at = null;

    #[ORM\ManyToOne(inversedBy: 'articles')]
    #[ORM\JoinColumn(nullable: true)]
    private ?TypeArt $type = null;

    #[ORM\Column]
    private ?float $prix_revient = null;

    public function getType(): ?TypeArt
    {
        return $this->type;
    }

    public function setType(?TypeArt $type): self
    {
        $this->type = $type;

        return $this;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPic(): ?string
    {
        return $this->pic;
    }

    public function setPic(?string $pic): static
    {
        $this->pic = $pic;

        return $this;
    }

    public function getCodeArticle(): ?string
    {
        return $this->code_article;
    }

    public function setCodeArticle(?string $code_article): static
    {
        $this->code_article = $code_article;

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

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): static
    {
        $this->description = $description;

        return $this;
    }

    public function getPcb(): ?float
    {
        return $this->pcb;
    }

    public function setPcb(?float $pcb): static
    {
        $this->pcb = $pcb;

        return $this;
    }

    public function getPrixAchat(): ?float
    {
        return $this->prix_achat;
    }

    public function setPrixAchat(?float $prix_achat): static
    {
        $this->prix_achat = $prix_achat;

        return $this;
    }

    public function getDepot(): ?int
    {
        return $this->depot;
    }

    public function setDepot(?int $depot): static
    {
        $this->depot = $depot;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->created_at;
    }

    public function setCreatedAt(?\DateTimeImmutable $created_at): static
    {
        $this->created_at = $created_at;

        return $this;
    }


    public function getPrixRevient(): ?float
    {
        return $this->prix_revient;
    }

    public function setPrixRevient(float $prix_revient): static
    {
        $this->prix_revient = $prix_revient;

        return $this;
    }
}
