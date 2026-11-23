<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\WalletTransaction;
use Core\Utils\CoreHelper;

/**
 * Builder for model WalletTransaction
 *
 * @see WalletTransaction
 */
class WalletTransactionBuilder
{
    /**
     * @var WalletTransaction
     */
    private $instance;

    private function __construct(WalletTransaction $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Wallet Transaction Builder object.
     */
    public static function init(): self
    {
        return new self(new WalletTransaction());
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
     * Sets wallet id field.
     *
     * @param int|null $value
     */
    public function walletId(?int $value): self
    {
        $this->instance->setWalletId($value);
        return $this;
    }

    /**
     * Sets kind field.
     *
     * @param string|null $value
     */
    public function kind(?string $value): self
    {
        $this->instance->setKind($value);
        return $this;
    }

    /**
     * Sets amount field.
     *
     * @param string|null $value
     */
    public function amount(?string $value): self
    {
        $this->instance->setAmount($value);
        return $this;
    }

    /**
     * Sets grant id field.
     *
     * @param int|null $value
     */
    public function grantId(?int $value): self
    {
        $this->instance->setGrantId($value);
        return $this;
    }

    /**
     * Unsets grant id field.
     */
    public function unsetGrantId(): self
    {
        $this->instance->unsetGrantId();
        return $this;
    }

    /**
     * Sets source transaction id field.
     *
     * @param int|null $value
     */
    public function sourceTransactionId(?int $value): self
    {
        $this->instance->setSourceTransactionId($value);
        return $this;
    }

    /**
     * Unsets source transaction id field.
     */
    public function unsetSourceTransactionId(): self
    {
        $this->instance->unsetSourceTransactionId();
        return $this;
    }

    /**
     * Sets source corrections total field.
     *
     * @param string|null $value
     */
    public function sourceCorrectionsTotal(?string $value): self
    {
        $this->instance->setSourceCorrectionsTotal($value);
        return $this;
    }

    /**
     * Unsets source corrections total field.
     */
    public function unsetSourceCorrectionsTotal(): self
    {
        $this->instance->unsetSourceCorrectionsTotal();
        return $this;
    }

    /**
     * Sets balance after field.
     *
     * @param string|null $value
     */
    public function balanceAfter(?string $value): self
    {
        $this->instance->setBalanceAfter($value);
        return $this;
    }

    /**
     * Sets metered from at field.
     *
     * @param \DateTime|null $value
     */
    public function meteredFromAt(?\DateTime $value): self
    {
        $this->instance->setMeteredFromAt($value);
        return $this;
    }

    /**
     * Unsets metered from at field.
     */
    public function unsetMeteredFromAt(): self
    {
        $this->instance->unsetMeteredFromAt();
        return $this;
    }

    /**
     * Sets metered through at field.
     *
     * @param \DateTime|null $value
     */
    public function meteredThroughAt(?\DateTime $value): self
    {
        $this->instance->setMeteredThroughAt($value);
        return $this;
    }

    /**
     * Unsets metered through at field.
     */
    public function unsetMeteredThroughAt(): self
    {
        $this->instance->unsetMeteredThroughAt();
        return $this;
    }

    /**
     * Sets conversion rate applied field.
     *
     * @param string|null $value
     */
    public function conversionRateApplied(?string $value): self
    {
        $this->instance->setConversionRateApplied($value);
        return $this;
    }

    /**
     * Unsets conversion rate applied field.
     */
    public function unsetConversionRateApplied(): self
    {
        $this->instance->unsetConversionRateApplied();
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
     * Sets memo field.
     *
     * @param string|null $value
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Unsets memo field.
     */
    public function unsetMemo(): self
    {
        $this->instance->unsetMemo();
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
     * Initializes a new Wallet Transaction object.
     */
    public function build(): WalletTransaction
    {
        return CoreHelper::clone($this->instance);
    }
}
