<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

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

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
