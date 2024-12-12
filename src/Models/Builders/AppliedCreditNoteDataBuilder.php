<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AppliedCreditNoteData;
use Core\Utils\CoreHelper;

/**
 * Builder for model AppliedCreditNoteData
 *
 * @see AppliedCreditNoteData
 */
class AppliedCreditNoteDataBuilder
{
    /**
     * @var AppliedCreditNoteData
     */
    private $instance;

    private function __construct(AppliedCreditNoteData $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Applied Credit Note Data Builder object.
     */
    public static function init(): self
    {
        return new self(new AppliedCreditNoteData());
    }

    /**
     * Sets uid field.
     *
     * @param string|null $value
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets number field.
     *
     * @param string|null $value
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
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
     * Initializes a new Applied Credit Note Data object.
     */
    public function build(): AppliedCreditNoteData
    {
        return CoreHelper::clone($this->instance);
    }
}
