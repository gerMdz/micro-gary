<?php

namespace App\Filter;

use App\DTO\PromotionEnquiryInterface;

interface PromocionFilterInterface
{
    public function aplicado(PromotionEnquiryInterface $enquiry): PromotionEnquiryInterface;
}