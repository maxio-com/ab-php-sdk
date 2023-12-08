<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreditSchemeRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreditSchemeRequest
 *
 * @see CreditSchemeRequest
 */
class CreditSchemeRequestBuilder
{
    /**
     * @var CreditSchemeRequest
     */
    private $instance;

    private function __construct(CreditSchemeRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new credit scheme request Builder object.
     */
    public static function init(string $creditScheme): self
    {
        return new self(new CreditSchemeRequest($creditScheme));
    }

    /**
     * Initializes a new credit scheme request object.
     */
    public function build(): CreditSchemeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
