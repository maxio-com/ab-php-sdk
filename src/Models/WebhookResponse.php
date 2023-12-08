<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class WebhookResponse implements \JsonSerializable
{
    /**
     * @var Webhook|null
     */
    private $webhook;

    /**
     * Returns Webhook.
     */
    public function getWebhook(): ?Webhook
    {
        return $this->webhook;
    }

    /**
     * Sets Webhook.
     *
     * @maps webhook
     */
    public function setWebhook(?Webhook $webhook): void
    {
        $this->webhook = $webhook;
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
        if (isset($this->webhook)) {
            $json['webhook'] = $this->webhook;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
