<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Errors;
use Core\Utils\CoreHelper;

/**
 * Builder for model Errors
 *
 * @see Errors
 */
class ErrorsBuilder
{
    /**
     * @var Errors
     */
    private $instance;

    private function __construct(Errors $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new errors Builder object.
     */
    public static function init(): self
    {
        return new self(new Errors());
    }

    /**
     * Sets per page field.
     */
    public function perPage(?array $value): self
    {
        $this->instance->setPerPage($value);
        return $this;
    }

    /**
     * Sets price point field.
     */
    public function pricePoint(?array $value): self
    {
        $this->instance->setPricePoint($value);
        return $this;
    }

    /**
     * Initializes a new errors object.
     */
    public function build(): Errors
    {
        return CoreHelper::clone($this->instance);
    }
}
