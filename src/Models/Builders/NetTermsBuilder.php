<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\NetTerms;
use Core\Utils\CoreHelper;

/**
 * Builder for model NetTerms
 *
 * @see NetTerms
 */
class NetTermsBuilder
{
    /**
     * @var NetTerms
     */
    private $instance;

    private function __construct(NetTerms $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new net terms Builder object.
     */
    public static function init(): self
    {
        return new self(new NetTerms());
    }

    /**
     * Sets default net terms field.
     */
    public function defaultNetTerms(?int $value): self
    {
        $this->instance->setDefaultNetTerms($value);
        return $this;
    }

    /**
     * Sets automatic net terms field.
     */
    public function automaticNetTerms(?int $value): self
    {
        $this->instance->setAutomaticNetTerms($value);
        return $this;
    }

    /**
     * Sets remittance net terms field.
     */
    public function remittanceNetTerms(?int $value): self
    {
        $this->instance->setRemittanceNetTerms($value);
        return $this;
    }

    /**
     * Sets net terms on remittance signups enabled field.
     */
    public function netTermsOnRemittanceSignupsEnabled(?bool $value): self
    {
        $this->instance->setNetTermsOnRemittanceSignupsEnabled($value);
        return $this;
    }

    /**
     * Sets custom net terms enabled field.
     */
    public function customNetTermsEnabled(?bool $value): self
    {
        $this->instance->setCustomNetTermsEnabled($value);
        return $this;
    }

    /**
     * Initializes a new net terms object.
     */
    public function build(): NetTerms
    {
        return CoreHelper::clone($this->instance);
    }
}
