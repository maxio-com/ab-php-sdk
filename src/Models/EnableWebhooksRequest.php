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

class EnableWebhooksRequest implements \JsonSerializable
{
    /**
     * @var bool
     */
    private $webhooksEnabled;

    /**
     * @param bool $webhooksEnabled
     */
    public function __construct(bool $webhooksEnabled)
    {
        $this->webhooksEnabled = $webhooksEnabled;
    }

    /**
     * Returns Webhooks Enabled.
     */
    public function getWebhooksEnabled(): bool
    {
        return $this->webhooksEnabled;
    }

    /**
     * Sets Webhooks Enabled.
     *
     * @required
     * @maps webhooks_enabled
     */
    public function setWebhooksEnabled(bool $webhooksEnabled): void
    {
        $this->webhooksEnabled = $webhooksEnabled;
    }

    /**
     * Converts the EnableWebhooksRequest object to a human-readable string representation.
     *
     * @return string The string representation of the EnableWebhooksRequest object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'EnableWebhooksRequest',
            ['webhooksEnabled' => $this->webhooksEnabled, 'additionalProperties' => $this->additionalProperties]
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
        $json['webhooks_enabled'] = $this->webhooksEnabled;
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
