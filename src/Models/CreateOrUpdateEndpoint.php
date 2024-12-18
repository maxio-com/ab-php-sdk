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
class CreateOrUpdateEndpoint implements \JsonSerializable
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
        $json['url']                   = $this->url;
        $json['webhook_subscriptions'] = WebhookSubscription::checkValue($this->webhookSubscriptions);
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
