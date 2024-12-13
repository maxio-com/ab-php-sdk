<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\DunnerData;
use AdvancedBillingLib\Models\DunningStepData;
use AdvancedBillingLib\Models\DunningStepReached;
use Core\Utils\CoreHelper;

/**
 * Builder for model DunningStepReached
 *
 * @see DunningStepReached
 */
class DunningStepReachedBuilder
{
    /**
     * @var DunningStepReached
     */
    private $instance;

    private function __construct(DunningStepReached $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Dunning Step Reached Builder object.
     *
     * @param DunnerData $dunner
     * @param DunningStepData $currentStep
     * @param DunningStepData $nextStep
     */
    public static function init(DunnerData $dunner, DunningStepData $currentStep, DunningStepData $nextStep): self
    {
        return new self(new DunningStepReached($dunner, $currentStep, $nextStep));
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
     * Initializes a new Dunning Step Reached object.
     */
    public function build(): DunningStepReached
    {
        return CoreHelper::clone($this->instance);
    }
}
