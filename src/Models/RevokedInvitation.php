<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class RevokedInvitation implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $lastSentAt;

    /**
     * @var string|null
     */
    private $lastAcceptedAt;

    /**
     * @var int|null
     */
    private $uninvitedCount;

    /**
     * Returns Last Sent At.
     */
    public function getLastSentAt(): ?string
    {
        return $this->lastSentAt;
    }

    /**
     * Sets Last Sent At.
     *
     * @maps last_sent_at
     */
    public function setLastSentAt(?string $lastSentAt): void
    {
        $this->lastSentAt = $lastSentAt;
    }

    /**
     * Returns Last Accepted At.
     */
    public function getLastAcceptedAt(): ?string
    {
        return $this->lastAcceptedAt;
    }

    /**
     * Sets Last Accepted At.
     *
     * @maps last_accepted_at
     */
    public function setLastAcceptedAt(?string $lastAcceptedAt): void
    {
        $this->lastAcceptedAt = $lastAcceptedAt;
    }

    /**
     * Returns Uninvited Count.
     */
    public function getUninvitedCount(): ?int
    {
        return $this->uninvitedCount;
    }

    /**
     * Sets Uninvited Count.
     *
     * @maps uninvited_count
     */
    public function setUninvitedCount(?int $uninvitedCount): void
    {
        $this->uninvitedCount = $uninvitedCount;
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
        if (isset($this->lastSentAt)) {
            $json['last_sent_at']     = $this->lastSentAt;
        }
        if (isset($this->lastAcceptedAt)) {
            $json['last_accepted_at'] = $this->lastAcceptedAt;
        }
        if (isset($this->uninvitedCount)) {
            $json['uninvited_count']  = $this->uninvitedCount;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
