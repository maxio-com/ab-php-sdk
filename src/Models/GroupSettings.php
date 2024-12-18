<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class GroupSettings implements \JsonSerializable
{
    /**
     * @var GroupTarget
     */
    private $target;

    /**
     * @var GroupBilling|null
     */
    private $billing;

    /**
     * @param GroupTarget $target
     */
    public function __construct(GroupTarget $target)
    {
        $this->target = $target;
    }

    /**
     * Returns Target.
     * Attributes of the target customer who will be the responsible payer of the created subscription.
     * Required.
     */
    public function getTarget(): GroupTarget
    {
        return $this->target;
    }

    /**
     * Sets Target.
     * Attributes of the target customer who will be the responsible payer of the created subscription.
     * Required.
     *
     * @required
     * @maps target
     */
    public function setTarget(GroupTarget $target): void
    {
        $this->target = $target;
    }

    /**
     * Returns Billing.
     * Optional attributes related to billing date and accrual. Note: Only applicable for new subscriptions.
     */
    public function getBilling(): ?GroupBilling
    {
        return $this->billing;
    }

    /**
     * Sets Billing.
     * Optional attributes related to billing date and accrual. Note: Only applicable for new subscriptions.
     *
     * @maps billing
     */
    public function setBilling(?GroupBilling $billing): void
    {
        $this->billing = $billing;
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
        $json['target']      = $this->target;
        if (isset($this->billing)) {
            $json['billing'] = $this->billing;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
