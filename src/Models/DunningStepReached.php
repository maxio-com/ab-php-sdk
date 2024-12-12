<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class DunningStepReached implements \JsonSerializable
{
    /**
     * @var DunnerData
     */
    private $dunner;

    /**
     * @var DunningStepData
     */
    private $currentStep;

    /**
     * @var DunningStepData
     */
    private $nextStep;

    /**
     * @param DunnerData $dunner
     * @param DunningStepData $currentStep
     * @param DunningStepData $nextStep
     */
    public function __construct(DunnerData $dunner, DunningStepData $currentStep, DunningStepData $nextStep)
    {
        $this->dunner = $dunner;
        $this->currentStep = $currentStep;
        $this->nextStep = $nextStep;
    }

    /**
     * Returns Dunner.
     */
    public function getDunner(): DunnerData
    {
        return $this->dunner;
    }

    /**
     * Sets Dunner.
     *
     * @required
     * @maps dunner
     */
    public function setDunner(DunnerData $dunner): void
    {
        $this->dunner = $dunner;
    }

    /**
     * Returns Current Step.
     */
    public function getCurrentStep(): DunningStepData
    {
        return $this->currentStep;
    }

    /**
     * Sets Current Step.
     *
     * @required
     * @maps current_step
     */
    public function setCurrentStep(DunningStepData $currentStep): void
    {
        $this->currentStep = $currentStep;
    }

    /**
     * Returns Next Step.
     */
    public function getNextStep(): DunningStepData
    {
        return $this->nextStep;
    }

    /**
     * Sets Next Step.
     *
     * @required
     * @maps next_step
     */
    public function setNextStep(DunningStepData $nextStep): void
    {
        $this->nextStep = $nextStep;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        $json['dunner']       = $this->dunner;
        $json['current_step'] = $this->currentStep;
        $json['next_step']    = $this->nextStep;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
