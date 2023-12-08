<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Offer;
use AdvancedBillingLib\Models\OfferResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model OfferResponse
 *
 * @see OfferResponse
 */
class OfferResponseBuilder
{
    /**
     * @var OfferResponse
     */
    private $instance;

    private function __construct(OfferResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new offer response Builder object.
     */
    public static function init(): self
    {
        return new self(new OfferResponse());
    }

    /**
     * Sets offer field.
     */
    public function offer(?Offer $value): self
    {
        $this->instance->setOffer($value);
        return $this;
    }

    /**
     * Initializes a new offer response object.
     */
    public function build(): OfferResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
