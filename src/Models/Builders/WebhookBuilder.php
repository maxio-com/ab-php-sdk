<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\Webhook;
use Core\Utils\CoreHelper;

/**
 * Builder for model Webhook
 *
 * @see Webhook
 */
class WebhookBuilder
{
    /**
     * @var Webhook
     */
    private $instance;

    private function __construct(Webhook $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new webhook Builder object.
     */
    public static function init(): self
    {
        return new self(new Webhook());
    }

    /**
     * Sets event field.
     */
    public function event(?string $value): self
    {
        $this->instance->setEvent($value);
        return $this;
    }

    /**
     * Sets id field.
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets created at field.
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Sets last error field.
     */
    public function lastError(?string $value): self
    {
        $this->instance->setLastError($value);
        return $this;
    }

    /**
     * Sets last error at field.
     */
    public function lastErrorAt(?\DateTime $value): self
    {
        $this->instance->setLastErrorAt($value);
        return $this;
    }

    /**
     * Sets accepted at field.
     */
    public function acceptedAt(?\DateTime $value): self
    {
        $this->instance->setAcceptedAt($value);
        return $this;
    }

    /**
     * Unsets accepted at field.
     */
    public function unsetAcceptedAt(): self
    {
        $this->instance->unsetAcceptedAt();
        return $this;
    }

    /**
     * Sets last sent at field.
     */
    public function lastSentAt(?\DateTime $value): self
    {
        $this->instance->setLastSentAt($value);
        return $this;
    }

    /**
     * Sets last sent url field.
     */
    public function lastSentUrl(?string $value): self
    {
        $this->instance->setLastSentUrl($value);
        return $this;
    }

    /**
     * Sets successful field.
     */
    public function successful(?bool $value): self
    {
        $this->instance->setSuccessful($value);
        return $this;
    }

    /**
     * Sets body field.
     */
    public function body(?string $value): self
    {
        $this->instance->setBody($value);
        return $this;
    }

    /**
     * Sets signature field.
     */
    public function signature(?string $value): self
    {
        $this->instance->setSignature($value);
        return $this;
    }

    /**
     * Sets signature hmac sha 256 field.
     */
    public function signatureHmacSha256(?string $value): self
    {
        $this->instance->setSignatureHmacSha256($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new webhook object.
     */
    public function build(): Webhook
    {
        return CoreHelper::clone($this->instance);
    }
}
