<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AppliedCreditNote;
use Core\Utils\CoreHelper;

/**
 * Builder for model AppliedCreditNote
 *
 * @see AppliedCreditNote
 */
class AppliedCreditNoteBuilder
{
    /**
     * @var AppliedCreditNote
     */
    private $instance;

    private function __construct(AppliedCreditNote $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new applied credit note Builder object.
     */
    public static function init(): self
    {
        return new self(new AppliedCreditNote());
    }

    /**
     * Sets uid field.
     */
    public function uid(?string $value): self
    {
        $this->instance->setUid($value);
        return $this;
    }

    /**
     * Sets number field.
     */
    public function number(?string $value): self
    {
        $this->instance->setNumber($value);
        return $this;
    }

    /**
     * Initializes a new applied credit note object.
     */
    public function build(): AppliedCreditNote
    {
        return CoreHelper::clone($this->instance);
    }
}
