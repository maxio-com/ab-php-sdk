<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\InvoiceAvataxDetails;
use Core\Utils\CoreHelper;

/**
 * Builder for model InvoiceAvataxDetails
 *
 * @see InvoiceAvataxDetails
 */
class InvoiceAvataxDetailsBuilder
{
    /**
     * @var InvoiceAvataxDetails
     */
    private $instance;

    private function __construct(InvoiceAvataxDetails $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Invoice Avatax Details Builder object.
     */
    public static function init(): self
    {
        return new self(new InvoiceAvataxDetails());
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
     * Unsets id field.
     */
    public function unsetId(): self
    {
        $this->instance->unsetId();
        return $this;
    }

    /**
     * Sets status field.
     *
     * @param string|null $value
     */
    public function status(?string $value): self
    {
        $this->instance->setStatus($value);
        return $this;
    }

    /**
     * Unsets status field.
     */
    public function unsetStatus(): self
    {
        $this->instance->unsetStatus();
        return $this;
    }

    /**
     * Sets document code field.
     *
     * @param string|null $value
     */
    public function documentCode(?string $value): self
    {
        $this->instance->setDocumentCode($value);
        return $this;
    }

    /**
     * Unsets document code field.
     */
    public function unsetDocumentCode(): self
    {
        $this->instance->unsetDocumentCode();
        return $this;
    }

    /**
     * Sets commit date field.
     *
     * @param \DateTime|null $value
     */
    public function commitDate(?\DateTime $value): self
    {
        $this->instance->setCommitDate($value);
        return $this;
    }

    /**
     * Unsets commit date field.
     */
    public function unsetCommitDate(): self
    {
        $this->instance->unsetCommitDate();
        return $this;
    }

    /**
     * Sets modify date field.
     *
     * @param \DateTime|null $value
     */
    public function modifyDate(?\DateTime $value): self
    {
        $this->instance->setModifyDate($value);
        return $this;
    }

    /**
     * Unsets modify date field.
     */
    public function unsetModifyDate(): self
    {
        $this->instance->unsetModifyDate();
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
     * Initializes a new Invoice Avatax Details object.
     */
    public function build(): InvoiceAvataxDetails
    {
        return CoreHelper::clone($this->instance);
    }
}
