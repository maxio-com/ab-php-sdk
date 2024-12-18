<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateReasonCode;
use AdvancedBillingLib\Models\CreateReasonCodeRequest;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateReasonCodeRequest
 *
 * @see CreateReasonCodeRequest
 */
class CreateReasonCodeRequestBuilder
{
    /**
     * @var CreateReasonCodeRequest
     */
    private $instance;

    private function __construct(CreateReasonCodeRequest $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Create Reason Code Request Builder object.
     *
     * @param CreateReasonCode $reasonCode
     */
    public static function init(CreateReasonCode $reasonCode): self
    {
        return new self(new CreateReasonCodeRequest($reasonCode));
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
     * Initializes a new Create Reason Code Request object.
     */
    public function build(): CreateReasonCodeRequest
    {
        return CoreHelper::clone($this->instance);
    }
}
