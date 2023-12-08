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
     * Initializes a new dunning step reached Builder object.
     */
    public static function init(DunnerData $dunner, DunningStepData $currentStep, DunningStepData $nextStep): self
    {
        return new self(new DunningStepReached($dunner, $currentStep, $nextStep));
    }

    /**
     * Initializes a new dunning step reached object.
     */
    public function build(): DunningStepReached
    {
        return CoreHelper::clone($this->instance);
    }
}
