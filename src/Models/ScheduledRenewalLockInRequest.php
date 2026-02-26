<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class ScheduledRenewalLockInRequest implements \JsonSerializable
{
    /**
     * @var \DateTime
     */
    private $lockInAt;

    /**
     * @param \DateTime $lockInAt
     */
    public function __construct(\DateTime $lockInAt)
    {
        $this->lockInAt = $lockInAt;
    }

    /**
     * Returns Lock in At.
     * Date to lock in the renewal.
     */
    public function getLockInAt(): \DateTime
    {
        return $this->lockInAt;
    }

    /**
     * Sets Lock in At.
     * Date to lock in the renewal.
     *
     * @required
     * @maps lock_in_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromSimpleDate
     */
    public function setLockInAt(\DateTime $lockInAt): void
    {
        $this->lockInAt = $lockInAt;
    }

    /**
     * Converts the ScheduledRenewalLockInRequest object to a human-readable string representation.
     *
     * @return string The string representation of the ScheduledRenewalLockInRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'ScheduledRenewalLockInRequest',
            ['lockInAt' => $this->lockInAt, 'additionalProperties' => $this->additionalProperties]
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
        $json['lock_in_at'] = DateTimeHelper::toSimpleDate($this->lockInAt);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
