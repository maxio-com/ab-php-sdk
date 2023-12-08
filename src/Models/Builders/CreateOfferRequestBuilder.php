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
     * Initializes a new create offer request Builder object.
     */
    public static function init(CreateOffer $offer): self
    {
        return new self(new CreateOfferRequest($offer));
    }

    /**
     * Initializes a new create offer request object.
     */
    public function build(): CreateOfferRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
