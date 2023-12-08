<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ReasonCodesJsonResponse;
use Core\Utils\CoreHelper;

/**
 * Builder for model ReasonCodesJsonResponse
 *
 * @see ReasonCodesJsonResponse
 */
class ReasonCodesJsonResponseBuilder
{
    /**
     * @var ReasonCodesJsonResponse
     */
    private $instance;

    private function __construct(ReasonCodesJsonResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new reason codes json response Builder object.
     */
    public static function init(): self
    {
        return new self(new ReasonCodesJsonResponse());
    }

    /**
     * Sets ok field.
     */
    public function ok(?string $value): self
    {
        $this->instance->setOk($value);
        return $this;
    }

    /**
     * Initializes a new reason codes json response object.
     */
    public function build(): ReasonCodesJsonResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
