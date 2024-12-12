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
     * Initializes a new Offer Response Builder object.
     */
    public static function init(): self
    {
        return new self(new OfferResponse());
    }

    /**
     * Sets offer field.
     *
     * @param Offer|null $value
     */
    public function offer(?Offer $value): self
    {
        $this->instance->setOffer($value);
        return $this;
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
     * Initializes a new Offer Response object.
     */
    public function build(): OfferResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
