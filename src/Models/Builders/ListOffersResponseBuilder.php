<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListOffersResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListOffersResponse
 *
 * @see ListOffersResponse
 */
class ListOffersResponseBuilder
{
    /**
     * @var ListOffersResponse
     */
    private $instance;

    private function __construct(ListOffersResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list offers response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListOffersResponse());
    }

    /**
     * Sets offers field.
     */
    public function offers(?array $value): self
    {
        $this->instance->setOffers($value);
        return $this;
    }

    /**
     * Initializes a new list offers response object.
     */
    public function build(): ListOffersResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
