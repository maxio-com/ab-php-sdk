<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateOffer;
use AdvancedBillingLib\Models\CreateOfferRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateOfferRequest
 *
 * @see CreateOfferRequest
 */
class CreateOfferRequestBuilder
{
    /**
     * @var CreateOfferRequest
     */
    private $instance;

    private function __construct(CreateOfferRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Offer Request Builder object.
     *
     * @param CreateOffer $offer
     */
    public static function init(CreateOffer $offer): self
    {
        return new self(new CreateOfferRequest($offer));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Create Offer Request object.
     */
    public function build(): CreateOfferRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
