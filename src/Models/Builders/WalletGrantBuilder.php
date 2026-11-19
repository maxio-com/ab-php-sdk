<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletGrant;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletGrant
 *
 * @see WalletGrant
 */
class WalletGrantBuilder
{
    /**
     * @var WalletGrant
     */
    private $instance;

    private function __construct(WalletGrant $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Grant Builder object.
     */
    public static function init(): self
    {
        return new self(new WalletGrant());
    }

    /**
     * Sets id field.
     *
     * @param int|null $value
     */
    public function id(?int $value): self
    {
        $this->instance->setId($value);
        return $this;
    }

    /**
     * Sets name field.
     *
     * @param string|null $value
     */
    public function name(?string $value): self
    {
        $this->instance->setName($value);
        return $this;
    }

    /**
     * Sets original field.
     *
     * @param string|null $value
     */
    public function original(?string $value): self
    {
        $this->instance->setOriginal($value);
        return $this;
    }

    /**
     * Sets remaining field.
     *
     * @param string|null $value
     */
    public function remaining(?string $value): self
    {
        $this->instance->setRemaining($value);
        return $this;
    }

    /**
     * Sets posted remaining field.
     *
     * @param string|null $value
     */
    public function postedRemaining(?string $value): self
    {
        $this->instance->setPostedRemaining($value);
        return $this;
    }

    /**
     * Sets expires at field.
     *
     * @param \DateTime|null $value
     */
    public function expiresAt(?\DateTime $value): self
    {
        $this->instance->setExpiresAt($value);
        return $this;
    }

    /**
     * Unsets expires at field.
     */
    public function unsetExpiresAt(): self
    {
        $this->instance->unsetExpiresAt();
        return $this;
    }

    /**
     * Sets expires on field.
     *
     * @param \DateTime|null $value
     */
    public function expiresOn(?\DateTime $value): self
    {
        $this->instance->setExpiresOn($value);
        return $this;
    }

    /**
     * Unsets expires on field.
     */
    public function unsetExpiresOn(): self
    {
        $this->instance->unsetExpiresOn();
        return $this;
    }

    /**
     * Sets expired at field.
     *
     * @param \DateTime|null $value
     */
    public function expiredAt(?\DateTime $value): self
    {
        $this->instance->setExpiredAt($value);
        return $this;
    }

    /**
     * Unsets expired at field.
     */
    public function unsetExpiredAt(): self
    {
        $this->instance->unsetExpiredAt();
        return $this;
    }

    /**
     * Sets expired on field.
     *
     * @param \DateTime|null $value
     */
    public function expiredOn(?\DateTime $value): self
    {
        $this->instance->setExpiredOn($value);
        return $this;
    }

    /**
     * Unsets expired on field.
     */
    public function unsetExpiredOn(): self
    {
        $this->instance->unsetExpiredOn();
        return $this;
    }

    /**
     * Sets origin field.
     *
     * @param string|null $value
     */
    public function origin(?string $value): self
    {
        $this->instance->setOrigin($value);
        return $this;
    }

    /**
     * Sets granted for period start field.
     *
     * @param \DateTime|null $value
     */
    public function grantedForPeriodStart(?\DateTime $value): self
    {
        $this->instance->setGrantedForPeriodStart($value);
        return $this;
    }

    /**
     * Unsets granted for period start field.
     */
    public function unsetGrantedForPeriodStart(): self
    {
        $this->instance->unsetGrantedForPeriodStart();
        return $this;
    }

    /**
     * Sets invoice uid field.
     *
     * @param string|null $value
     */
    public function invoiceUid(?string $value): self
    {
        $this->instance->setInvoiceUid($value);
        return $this;
    }

    /**
     * Unsets invoice uid field.
     */
    public function unsetInvoiceUid(): self
    {
        $this->instance->unsetInvoiceUid();
        return $this;
    }

    /**
     * Sets created at field.
     *
     * @param \DateTime|null $value
     */
    public function createdAt(?\DateTime $value): self
    {
        $this->instance->setCreatedAt($value);
        return $this;
    }

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function additionalProperty(string $name, $value): self
    {
        $this->instance->addAdditionalProperty($name, $value);
        return $this;
    }

    /**
     * Initializes a new Wallet Grant object.
     */
    public function build(): WalletGrant
    {
        return CoreHelper::clone($this->instance);
    }
}
