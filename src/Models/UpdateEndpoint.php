<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

/**
 * Used to Create or Update Endpoint
 */
class UpdateEndpoint implements \JsonSerializable
{
    /**
     * @var string
     */
    private $url;

    /**
     * @var string[]
     */
    private $webhookSubscriptions;

    /**
     * @param string $url
     * @param string[] $webhookSubscriptions
     */
    public function __construct(string $url, array $webhookSubscriptions)
    {
        $this->url = $url;
        $this->webhookSubscriptions = $webhookSubscriptions;
    }

    /**
     * Returns Url.
     */
    public function getUrl(): string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     *
     * @required
     * @maps url
     */
    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Webhook Subscriptions.
     *
     * @return string[]
     */
    public function getWebhookSubscriptions(): array
    {
        return $this->webhookSubscriptions;
    }

    /**
     * Sets Webhook Subscriptions.
     *
     * @required
     * @maps webhook_subscriptions
     * @factory \AdvancedBillingLib\Models\WebhookSubscription::checkValue
     *
     * @param string[] $webhookSubscriptions
     */
    public function setWebhookSubscriptions(array $webhookSubscriptions): void
    {
        $this->webhookSubscriptions = $webhookSubscriptions;
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
        $json['url']                   = $this->url;
        $json['webhook_subscriptions'] = WebhookSubscription::checkValue($this->webhookSubscriptions);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
