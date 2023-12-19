<?php

namespace App\Entity;

use App\Repository\ProductoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: ProductoRepository::class)]
class Producto
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column]
    private ?int $precio = null;

    #[ORM\OneToMany(mappedBy: 'producto', targetEntity: ProductoPromotion::class)]
    private Collection $productoPromotions;

    public function __construct()
    {
        $this->productoPromotions = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrecio(): ?int
    {
        return $this->precio;
    }

    public function setPrecio(int $precio): static
    {
        $this->precio = $precio;

        return $this;
    }

    /**
     * @return Collection<int, ProductoPromotion>
     */
    public function getProductoPromotions(): Collection
    {
        return $this->productoPromotions;
    }

    public function addProductoPromotion(ProductoPromotion $productoPromotion): static
    {
        if (!$this->productoPromotions->contains($productoPromotion)) {
            $this->productoPromotions->add($productoPromotion);
            $productoPromotion->setProducto($this);
        }

        return $this;
    }

    public function removeProductoPromotion(ProductoPromotion $productoPromotion): static
    {
        if ($this->productoPromotions->removeElement($productoPromotion)) {
            // set the owning side to null (unless already changed)
            if ($productoPromotion->getProducto() === $this) {
                $productoPromotion->setProducto(null);
            }
        }

        return $this;
    }
}
