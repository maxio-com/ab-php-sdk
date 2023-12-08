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

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
