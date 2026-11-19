<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class Feature3 implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $value;

    /**
     * @var array
     */
    private $periodicityInterval = [];

    /**
     * @var array
     */
    private $periodicityUnit = [];

    /**
     * @var bool|null
     */
    private $propagateToSubscriptions = false;

    /**
     * Returns Value.
     */
    public function getValue(): ?string
    {
        return $this->value;
    }

    /**
     * Sets Value.
     *
     * @maps value
     */
    public function setValue(?string $value): void
    {
        $this->value = $value;
    }

    /**
     * Returns Periodicity Interval.
     */
    public function getPeriodicityInterval(): ?int
    {
        if (count($this->periodicityInterval) == 0) {
            return null;
        }
        return $this->periodicityInterval['value'];
    }

    /**
     * Sets Periodicity Interval.
     *
     * @maps periodicity_interval
     */
    public function setPeriodicityInterval(?int $periodicityInterval): void
    {
        $this->periodicityInterval['value'] = $periodicityInterval;
    }

    /**
     * Unsets Periodicity Interval.
     */
    public function unsetPeriodicityInterval(): void
    {
        $this->periodicityInterval = [];
    }

    /**
     * Returns Periodicity Unit.
     */
    public function getPeriodicityUnit(): ?string
    {
        if (count($this->periodicityUnit) == 0) {
            return null;
        }
        return $this->periodicityUnit['value'];
    }

    /**
     * Sets Periodicity Unit.
     *
     * @maps periodicity_unit
     * @factory \AdvancedBillingLib\Models\EntitlementPeriodicityUnit::checkValue
     */
    public function setPeriodicityUnit(?string $periodicityUnit): void
    {
        $this->periodicityUnit['value'] = $periodicityUnit;
    }

    /**
     * Unsets Periodicity Unit.
     */
    public function unsetPeriodicityUnit(): void
    {
        $this->periodicityUnit = [];
    }

    /**
     * Returns Propagate to Subscriptions.
     * When `true`, existing subscriptions on the item's price point are updated with the new
     * `value`/periodicity by a background job shortly after. Has no effect on a product/component-level
     * item. When `false` (default) and the item's price point already has subscribers, the update is made
     * on a clone of the price point instead, and existing subscribers are unaffected.
     */
    public function getPropagateToSubscriptions(): ?bool
    {
        return $this->propagateToSubscriptions;
    }

    /**
     * Sets Propagate to Subscriptions.
     * When `true`, existing subscriptions on the item's price point are updated with the new
     * `value`/periodicity by a background job shortly after. Has no effect on a product/component-level
     * item. When `false` (default) and the item's price point already has subscribers, the update is made
     * on a clone of the price point instead, and existing subscribers are unaffected.
     *
     * @maps propagate_to_subscriptions
     */
    public function setPropagateToSubscriptions(?bool $propagateToSubscriptions): void
    {
        $this->propagateToSubscriptions = $propagateToSubscriptions;
    }

    /**
     * Converts the Feature3 object to a human-readable string representation.
     *
     * @return string The string representation of the Feature3 object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Feature3',
            [
                'value' => $this->value,
                'periodicityInterval' => $this->getPeriodicityInterval(),
                'periodicityUnit' => $this->getPeriodicityUnit(),
                'propagateToSubscriptions' => $this->propagateToSubscriptions,
                'additionalProperties' => $this->additionalProperties
            ]
        );
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
        if (isset($this->value)) {
            $json['value']                      = $this->value;
        }
        if (!empty($this->periodicityInterval)) {
            $json['periodicity_interval']       = $this->periodicityInterval['value'];
        }
        if (!empty($this->periodicityUnit)) {
            $json['periodicity_unit']           =
                EntitlementPeriodicityUnit::checkValue(
                    $this->periodicityUnit['value']
                );
        }
        if (isset($this->propagateToSubscriptions)) {
            $json['propagate_to_subscriptions'] = $this->propagateToSubscriptions;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
