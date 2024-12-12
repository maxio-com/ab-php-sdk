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
     * Initializes a new Net Terms Builder object.
     */
    public static function init(): self
    {
        return new self(new NetTerms());
    }

    /**
     * Sets default net terms field.
     *
     * @param int|null $value
     */
    public function defaultNetTerms(?int $value): self
    {
        $this->instance->setDefaultNetTerms($value);
        return $this;
    }

    /**
     * Sets automatic net terms field.
     *
     * @param int|null $value
     */
    public function automaticNetTerms(?int $value): self
    {
        $this->instance->setAutomaticNetTerms($value);
        return $this;
    }

    /**
     * Sets remittance net terms field.
     *
     * @param int|null $value
     */
    public function remittanceNetTerms(?int $value): self
    {
        $this->instance->setRemittanceNetTerms($value);
        return $this;
    }

    /**
     * Sets net terms on remittance signups enabled field.
     *
     * @param bool|null $value
     */
    public function netTermsOnRemittanceSignupsEnabled(?bool $value): self
    {
        $this->instance->setNetTermsOnRemittanceSignupsEnabled($value);
        return $this;
    }

    /**
     * Sets custom net terms enabled field.
     *
     * @param bool|null $value
     */
    public function customNetTermsEnabled(?bool $value): self
    {
        $this->instance->setCustomNetTermsEnabled($value);
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
     * Initializes a new Net Terms object.
     */
    public function build(): NetTerms
    {
        return CoreHelper::clone($this->instance);
    }
}
