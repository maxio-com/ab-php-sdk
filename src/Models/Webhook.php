<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class Webhook implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $event;

    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $lastError;

    /**
     * @var string|null
     */
    private $lastErrorAt;

    /**
     * @var array
     */
    private $acceptedAt = [];

    /**
     * @var string|null
     */
    private $lastSentAt;

    /**
     * @var string|null
     */
    private $lastSentUrl;

    /**
     * @var bool|null
     */
    private $successful;

    /**
     * @var string|null
     */
    private $body;

    /**
     * @var string|null
     */
    private $signature;

    /**
     * @var string|null
     */
    private $signatureHmacSha256;

    /**
     * Returns Event.
     * A string describing which event type produced the given webhook
     */
    public function getEvent(): ?string
    {
        return $this->event;
    }

    /**
     * Sets Event.
     * A string describing which event type produced the given webhook
     *
     * @maps event
     */
    public function setEvent(?string $event): void
    {
        $this->event = $event;
    }

    /**
     * Returns Id.
     * The unique identifier for the webhooks (unique across all of Chargify). This is not changed on a
     * retry/replay of the same webhook, so it may be used to avoid duplicate action for the same event.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     * The unique identifier for the webhooks (unique across all of Chargify). This is not changed on a
     * retry/replay of the same webhook, so it may be used to avoid duplicate action for the same event.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Created At.
     * Timestamp indicating when the webhook was created
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * Timestamp indicating when the webhook was created
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Last Error.
     * Text describing the status code and/or error from the last failed attempt to send the Webhook. When
     * a webhook is retried and accepted, this field will be cleared.
     */
    public function getLastError(): ?string
    {
        return $this->lastError;
    }

    /**
     * Sets Last Error.
     * Text describing the status code and/or error from the last failed attempt to send the Webhook. When
     * a webhook is retried and accepted, this field will be cleared.
     *
     * @maps last_error
     */
    public function setLastError(?string $lastError): void
    {
        $this->lastError = $lastError;
    }

    /**
     * Returns Last Error At.
     * Timestamp indicating when the last non-acceptance occurred. If a webhook is later resent and
     * accepted, this field will be cleared.
     */
    public function getLastErrorAt(): ?string
    {
        return $this->lastErrorAt;
    }

    /**
     * Sets Last Error At.
     * Timestamp indicating when the last non-acceptance occurred. If a webhook is later resent and
     * accepted, this field will be cleared.
     *
     * @maps last_error_at
     */
    public function setLastErrorAt(?string $lastErrorAt): void
    {
        $this->lastErrorAt = $lastErrorAt;
    }

    /**
     * Returns Accepted At.
     * Timestamp indicating when the webhook was accepted by the merchant endpoint. When a webhook is
     * explicitly replayed by the merchant, this value will be cleared until it is accepted again.
     */
    public function getAcceptedAt(): ?string
    {
        if (count($this->acceptedAt) == 0) {
            return null;
        }
        return $this->acceptedAt['value'];
    }

    /**
     * Sets Accepted At.
     * Timestamp indicating when the webhook was accepted by the merchant endpoint. When a webhook is
     * explicitly replayed by the merchant, this value will be cleared until it is accepted again.
     *
     * @maps accepted_at
     */
    public function setAcceptedAt(?string $acceptedAt): void
    {
        $this->acceptedAt['value'] = $acceptedAt;
    }

    /**
     * Unsets Accepted At.
     * Timestamp indicating when the webhook was accepted by the merchant endpoint. When a webhook is
     * explicitly replayed by the merchant, this value will be cleared until it is accepted again.
     */
    public function unsetAcceptedAt(): void
    {
        $this->acceptedAt = [];
    }

    /**
     * Returns Last Sent At.
     * Timestamp indicating when the most recent attempt was made to send the webhook
     */
    public function getLastSentAt(): ?string
    {
        return $this->lastSentAt;
    }

    /**
     * Sets Last Sent At.
     * Timestamp indicating when the most recent attempt was made to send the webhook
     *
     * @maps last_sent_at
     */
    public function setLastSentAt(?string $lastSentAt): void
    {
        $this->lastSentAt = $lastSentAt;
    }

    /**
     * Returns Last Sent Url.
     * The url that the endpoint was last sent to.
     */
    public function getLastSentUrl(): ?string
    {
        return $this->lastSentUrl;
    }

    /**
     * Sets Last Sent Url.
     * The url that the endpoint was last sent to.
     *
     * @maps last_sent_url
     */
    public function setLastSentUrl(?string $lastSentUrl): void
    {
        $this->lastSentUrl = $lastSentUrl;
    }

    /**
     * Returns Successful.
     * A boolean flag describing whether the webhook was accepted by the webhook endpoint for the most
     * recent attempt. (Acceptance is defined by receiving a “200 OK” HTTP response within a reasonable
     * timeframe, i.e. 15 seconds)
     */
    public function getSuccessful(): ?bool
    {
        return $this->successful;
    }

    /**
     * Sets Successful.
     * A boolean flag describing whether the webhook was accepted by the webhook endpoint for the most
     * recent attempt. (Acceptance is defined by receiving a “200 OK” HTTP response within a reasonable
     * timeframe, i.e. 15 seconds)
     *
     * @maps successful
     */
    public function setSuccessful(?bool $successful): void
    {
        $this->successful = $successful;
    }

    /**
     * Returns Body.
     * The data sent within the webhook post
     */
    public function getBody(): ?string
    {
        return $this->body;
    }

    /**
     * Sets Body.
     * The data sent within the webhook post
     *
     * @maps body
     */
    public function setBody(?string $body): void
    {
        $this->body = $body;
    }

    /**
     * Returns Signature.
     * The calculated webhook signature
     */
    public function getSignature(): ?string
    {
        return $this->signature;
    }

    /**
     * Sets Signature.
     * The calculated webhook signature
     *
     * @maps signature
     */
    public function setSignature(?string $signature): void
    {
        $this->signature = $signature;
    }

    /**
     * Returns Signature Hmac Sha 256.
     * The calculated HMAC-SHA-256 webhook signature
     */
    public function getSignatureHmacSha256(): ?string
    {
        return $this->signatureHmacSha256;
    }

    /**
     * Sets Signature Hmac Sha 256.
     * The calculated HMAC-SHA-256 webhook signature
     *
     * @maps signature_hmac_sha_256
     */
    public function setSignatureHmacSha256(?string $signatureHmacSha256): void
    {
        $this->signatureHmacSha256 = $signatureHmacSha256;
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
        if (isset($this->event)) {
            $json['event']                  = $this->event;
        }
        if (isset($this->id)) {
            $json['id']                     = $this->id;
        }
        if (isset($this->createdAt)) {
            $json['created_at']             = $this->createdAt;
        }
        if (isset($this->lastError)) {
            $json['last_error']             = $this->lastError;
        }
        if (isset($this->lastErrorAt)) {
            $json['last_error_at']          = $this->lastErrorAt;
        }
        if (!empty($this->acceptedAt)) {
            $json['accepted_at']            = $this->acceptedAt['value'];
        }
        if (isset($this->lastSentAt)) {
            $json['last_sent_at']           = $this->lastSentAt;
        }
        if (isset($this->lastSentUrl)) {
            $json['last_sent_url']          = $this->lastSentUrl;
        }
        if (isset($this->successful)) {
            $json['successful']             = $this->successful;
        }
        if (isset($this->body)) {
            $json['body']                   = $this->body;
        }
        if (isset($this->signature)) {
            $json['signature']              = $this->signature;
        }
        if (isset($this->signatureHmacSha256)) {
            $json['signature_hmac_sha_256'] = $this->signatureHmacSha256;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
