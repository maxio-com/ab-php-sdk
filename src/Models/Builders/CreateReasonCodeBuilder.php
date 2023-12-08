<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\CreateReasonCode;
use Core\Utils\CoreHelper;

/**
 * Builder for model CreateReasonCode
 *
 * @see CreateReasonCode
 */
class CreateReasonCodeBuilder
{
    /**
     * @var CreateReasonCode
     */
    private $instance;

    private function __construct(CreateReasonCode $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new create reason code Builder object.
     */
    public static function init(string $code, string $description): self
    {
        return new self(new CreateReasonCode($code, $description));
    }

    /**
     * Sets position field.
     */
    public function position(?int $value): self
    {
        $this->instance->setPosition($value);
        return $this;
    }

    /**
     * Initializes a new create reason code object.
     */
    public function build(): CreateReasonCode
    {
        return CoreHelper::clone($this->instance);
    }
}
