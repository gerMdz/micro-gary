<?php

namespace App\Entity;

use App\Repository\ProductoPromotionRepository;
use DateTimeInterface;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductoPromotionRepository::class)]
class ProductoPromotion
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private int|null $id = null;

    #[ORM\ManyToOne(inversedBy: 'productoPromotions')]
    #[ORM\JoinColumn(nullable: false)]
    private Producto|null $producto = null;

    #[ORM\ManyToOne(inversedBy: 'productoPromotions')]
    #[ORM\JoinColumn(nullable: false)]
    private Promotion|null $promotion = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE, nullable: true)]
    private DateTimeInterface|null $validoTo = null;

    public function getId(): int|null
    {
        return $this->id;
    }

    public function getProducto(): ?Producto
    {
        return $this->producto;
    }

    public function setProducto(?Producto $producto): static
    {
        $this->producto = $producto;

        return $this;
    }

    public function getPromotion(): Promotion|null
    {
        return $this->promotion;
    }

    public function setPromotion(Promotion|null $promotion): static
    {
        $this->promotion = $promotion;

        return $this;
    }

    public function getValidoTo(): ?DateTimeInterface
    {
        return $this->validoTo;
    }

    public function setValidoTo(?DateTimeInterface $validoTo): static
    {
        $this->validoTo = $validoTo;

        return $this;
    }


}
