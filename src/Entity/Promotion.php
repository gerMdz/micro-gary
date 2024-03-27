<?php

namespace App\Entity;

use App\Repository\PromotionRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PromotionRepository::class)]
class Promotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 255)]
    private ?string $name = null;

    #[ORM\Column(length: 255)]
    private ?string $tipo = null;

    #[ORM\Column]
    private float|null $ajuste = null;

    #[ORM\Column]
    private array $criteria = [];

    #[ORM\OneToMany(mappedBy: 'promotion', targetEntity: ProductoPromotion::class)]
    private Collection $productoPromotions;

    public function __construct()
    {
        $this->productoPromotions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): static
    {
        $this->name = $name;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): static
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getAjuste(): ?float
    {
        return $this->ajuste;
    }

    public function setAjuste(float $ajuste): static
    {
        $this->ajuste = $ajuste;

        return $this;
    }

    public function getCriteria(): array
    {
        return $this->criteria;
    }

    public function setCriteria(array $criteria): static
    {
        $this->criteria = $criteria;

        return $this;
    }

    public function getProductoPromotions(): Collection
    {
        return $this->productoPromotions;
    }

    public function setProductoPromotions(Collection $productoPromotions): void
    {
        $this->productoPromotions = $productoPromotions;
    }


}
