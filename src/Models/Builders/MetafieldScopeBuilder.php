<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\MetafieldScope;
use Core\Utils\CoreHelper;

/**
 * Builder for model MetafieldScope
 *
 * @see MetafieldScope
 */
class MetafieldScopeBuilder
{
    /**
     * @var MetafieldScope
     */
    private $instance;

    private function __construct(MetafieldScope $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Metafield Scope Builder object.
     */
    public static function init(): self
    {
        return new self(new MetafieldScope());
    }

    /**
     * Sets csv field.
     *
     * @param string|null $value
     */
    public function csv(?string $value): self
    {
        $this->instance->setCsv($value);
        return $this;
    }

    /**
     * Sets invoices field.
     *
     * @param string|null $value
     */
    public function invoices(?string $value): self
    {
        $this->instance->setInvoices($value);
        return $this;
    }

    /**
     * Sets statements field.
     *
     * @param string|null $value
     */
    public function statements(?string $value): self
    {
        $this->instance->setStatements($value);
        return $this;
    }

    /**
     * Sets portal field.
     *
     * @param string|null $value
     */
    public function portal(?string $value): self
    {
        $this->instance->setPortal($value);
        return $this;
    }

    /**
     * Sets public show field.
     *
     * @param string|null $value
     */
    public function publicShow(?string $value): self
    {
        $this->instance->setPublicShow($value);
        return $this;
    }

    /**
     * Sets public edit field.
     *
     * @param string|null $value
     */
    public function publicEdit(?string $value): self
    {
        $this->instance->setPublicEdit($value);
        return $this;
    }

    /**
     * Sets hosted field.
     *
     * @param string[]|null $value
     */
    public function hosted(?array $value): self
    {
        $this->instance->setHosted($value);
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
     * Initializes a new Metafield Scope object.
     */
    public function build(): MetafieldScope
    {
        return CoreHelper::clone($this->instance);
    }
}
