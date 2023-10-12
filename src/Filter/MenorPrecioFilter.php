<?php

namespace App\Filter;

use App\DTO\PromotionEnquiryInterface;

class MenorPrecioFilter implements PromocionFilterInterface
{

    public function aplicado(PromotionEnquiryInterface $enquiry): PromotionEnquiryInterface
    {
        $enquiry->setDescuentoPrice(50);
        $enquiry->setPrice(100);
        $enquiry->setPromoId(3);
        $enquiry->setPromoName('Lunes free');

        return $enquiry;
    }
}