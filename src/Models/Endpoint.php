<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Endpoint implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $url;

    /**
     * @var int|null
     */
    private $siteId;

    /**
     * @var string|null
     */
    private $status;

    /**
     * @var string[]|null
     */
    private $webhookSubscriptions;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Url.
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Sets Url.
     *
     * @maps url
     */
    public function setUrl(?string $url): void
    {
        $this->url = $url;
    }

    /**
     * Returns Site Id.
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * Sets Site Id.
     *
     * @maps site_id
     */
    public function setSiteId(?int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * Returns Status.
     */
    public function getStatus(): ?string
    {
        return $this->status;
    }

    /**
     * Sets Status.
     *
     * @maps status
     */
    public function setStatus(?string $status): void
    {
        $this->status = $status;
    }

    /**
     * Returns Webhook Subscriptions.
     *
     * @return string[]|null
     */
    public function getWebhookSubscriptions(): ?array
    {
        return $this->webhookSubscriptions;
    }

    /**
     * Sets Webhook Subscriptions.
     *
     * @maps webhook_subscriptions
     *
     * @param string[]|null $webhookSubscriptions
     */
    public function setWebhookSubscriptions(?array $webhookSubscriptions): void
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
        if (isset($this->id)) {
            $json['id']                    = $this->id;
        }
        if (isset($this->url)) {
            $json['url']                   = $this->url;
        }
        if (isset($this->siteId)) {
            $json['site_id']               = $this->siteId;
        }
        if (isset($this->status)) {
            $json['status']                = $this->status;
        }
        if (isset($this->webhookSubscriptions)) {
            $json['webhook_subscriptions'] = $this->webhookSubscriptions;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
