<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\ServiceCredit;
use Core\Utils\CoreHelper;

/**
 * Builder for model ServiceCredit
 *
 * @see ServiceCredit
 */
class ServiceCreditBuilder
{
    /**
     * @var ServiceCredit
     */
    private $instance;

    private function __construct(ServiceCredit $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new service credit Builder object.
     */
    public static function init(): self
    {
        return new self(new ServiceCredit());
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
     * Sets amount in cents field.
     */
    public function amountInCents(?int $value): self
    {
        $this->instance->setAmountInCents($value);
        return $this;
    }

    /**
     * Sets ending balance in cents field.
     */
    public function endingBalanceInCents(?int $value): self
    {
        $this->instance->setEndingBalanceInCents($value);
        return $this;
    }

    /**
     * Sets entry type field.
     */
    public function entryType(?string $value): self
    {
        $this->instance->setEntryType($value);
        return $this;
    }

    /**
     * Sets memo field.
     */
    public function memo(?string $value): self
    {
        $this->instance->setMemo($value);
        return $this;
    }

    /**
     * Initializes a new service credit object.
     */
    public function build(): ServiceCredit
    {
        return CoreHelper::clone($this->instance);
    }
}
