<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\PrepaymentsResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model PrepaymentsResponse
 *
 * @see PrepaymentsResponse
 */
class PrepaymentsResponseBuilder
{
    /**
     * @var PrepaymentsResponse
     */
    private $instance;

    private function __construct(PrepaymentsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new prepayments response Builder object.
     */
    public static function init(): self
    {
        return new self(new PrepaymentsResponse());
    }

    /**
     * Sets prepayments field.
     */
    public function prepayments(?array $value): self
    {
        $this->instance->setPrepayments($value);
        return $this;
    }

    /**
     * Initializes a new prepayments response object.
     */
    public function build(): PrepaymentsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
