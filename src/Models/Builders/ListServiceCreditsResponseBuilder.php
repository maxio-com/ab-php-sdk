<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ListServiceCreditsResponse;
use AdvancedBillingLib\Models\ServiceCredit1;
use Core\Utils\CoreHelper;

/**
 * Builder for model ListServiceCreditsResponse
 *
 * @see ListServiceCreditsResponse
 */
class ListServiceCreditsResponseBuilder
{
    /**
     * @var ListServiceCreditsResponse
     */
    private $instance;

    private function __construct(ListServiceCreditsResponse $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new List Service Credits Response Builder object.
     */
    public static function init(): self
    {
        return new self(new ListServiceCreditsResponse());
    }

    /**
     * Sets service credits field.
     *
     * @param ServiceCredit1[]|null $value
     */
    public function serviceCredits(?array $value): self
    {
        $this->instance->setServiceCredits($value);
        return $this;
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
     * Initializes a new List Service Credits Response object.
     */
    public function build(): ListServiceCreditsResponse
    {
        return CoreHelper::clone($this->instance);
    }
}
