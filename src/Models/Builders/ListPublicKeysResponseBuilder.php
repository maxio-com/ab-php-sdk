<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListPublicKeysMeta;
use AdvancedBillingLib\Models\ListPublicKeysResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListPublicKeysResponse
 *
 * @see ListPublicKeysResponse
 */
class ListPublicKeysResponseBuilder
{
    /**
     * @var ListPublicKeysResponse
     */
    private $instance;

    private function __construct(ListPublicKeysResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new list public keys response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListPublicKeysResponse());
    }

    /**
     * Sets chargify js keys field.
     */
    public function chargifyJsKeys(?array $value): self
    {
        $this->instance->setChargifyJsKeys($value);
        return $this;
    }

    /**
     * Sets meta field.
     */
    public function meta(?ListPublicKeysMeta $value): self
    {
        $this->instance->setMeta($value);
        return $this;
    }

    /**
     * Initializes a new list public keys response object.
     */
    public function build(): ListPublicKeysResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
