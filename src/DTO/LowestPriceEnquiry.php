<?php

namespace App\DTO;

class LowestPriceEnquiry implements PromotionEnquiryInterface
{
    private int|null $productId;
    private int|null $quantity;
    private string|null $requestLocation;
   private string|null $voucherCode;
   private string|null $requestDate;
   private int|null $price;
   private int|null $descuentoPrice;
   private int|null $promoId;
   private string|null $promoName;

    /**
     * @return int|null
     */
    public function getProductId(): int|null
    {
        return $this->productId;
    }

    /**
     * @param int|null $productId
     */
    public function setProductId(int|null $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * @return int|null
     */
    public function getQuantity(): int|null
    {
        return $this->quantity;
    }

    /**
     * @param int|null $quantity
     */
    public function setQuantity(int|null $quantity): void
    {
        $this->quantity = $quantity;
    }

    /**
     * @return string|null
     */
    public function getRequestLocation(): string|null
    {
        return $this->requestLocation;
    }

    /**
     * @param string|null $requestLocation
     */
    public function setRequestLocation(string|null $requestLocation): void
    {
        $this->requestLocation = $requestLocation;
    }

    /**
     * @return string|null
     */
    public function getVoucherCode(): string|null
    {
        return $this->voucherCode;
    }

    /**
     * @param string|null $voucherCode
     */
    public function setVoucherCode(string|null $voucherCode): void
    {
        $this->voucherCode = $voucherCode;
    }

    /**
     * @return string|null
     */
    public function getRequestDate(): string|null
    {
        return $this->requestDate;
    }

    /**
     * @param string|null $requestDate
     */
    public function setRequestDate(string|null $requestDate): void
    {
        $this->requestDate = $requestDate;
    }

    /**
     * @return int|null
     */
    public function getPrice(): int|null
    {
        return $this->price;
    }

    /**
     * @param int|null $price
     */
    public function setPrice(int|null $price): void
    {
        $this->price = $price;
    }

    /**
     * @return int|null
     */
    public function getDescuentoPrice(): int|null
    {
        return $this->descuentoPrice;
    }

    /**
     * @param int|null $descuentoPrice
     */
    public function setDescuentoPrice(int|null $descuentoPrice): void
    {
        $this->descuentoPrice = $descuentoPrice;
    }

    /**
     * @return int|null
     */
    public function getPromoId(): int|null
    {
        return $this->promoId;
    }

    /**
     * @param int|null $promoId
     */
    public function setPromoId(int|null $promoId): void
    {
        $this->promoId = $promoId;
    }

    /**
     * @return string|null
     */
    public function getPromoName(): string|null
    {
        return $this->promoName;
    }

    /**
     * @param string|null $promoName
     */
    public function setPromoName(string|null $promoName): void
    {
        $this->promoName = $promoName;
    }


    public function jsonSerialize()
    {
        return get_object_vars($this);
    }
}