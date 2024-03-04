<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\DeductServiceCredit;
use AdvancedBillingLib\Models\DeductServiceCreditRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model DeductServiceCreditRequest
 *
 * @see DeductServiceCreditRequest
 */
class DeductServiceCreditRequestBuilder
{
    /**
     * @var DeductServiceCreditRequest
     */
    private $instance;

    private function __construct(DeductServiceCreditRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new deduct service credit request Builder object.
     */
    public static function init(DeductServiceCredit $deduction): self
    {
        return new self(new DeductServiceCreditRequest($deduction));
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new deduct service credit request object.
     */
    public function build(): DeductServiceCreditRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
