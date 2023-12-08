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
     * Initializes a new metafield scope Builder object.
     */
    public static function init(): self
    {
        return new self(new MetafieldScope());
    }

    /**
     * Sets csv field.
     */
    public function csv(?string $value): self
    {
        $this->instance->setCsv($value);
        return $this;
    }

    /**
     * Sets invoices field.
     */
    public function invoices(?string $value): self
    {
        $this->instance->setInvoices($value);
        return $this;
    }

    /**
     * Sets statements field.
     */
    public function statements(?string $value): self
    {
        $this->instance->setStatements($value);
        return $this;
    }

    /**
     * Sets portal field.
     */
    public function portal(?string $value): self
    {
        $this->instance->setPortal($value);
        return $this;
    }

    /**
     * Sets public show field.
     */
    public function publicShow(?string $value): self
    {
        $this->instance->setPublicShow($value);
        return $this;
    }

    /**
     * Sets public edit field.
     */
    public function publicEdit(?string $value): self
    {
        $this->instance->setPublicEdit($value);
        return $this;
    }

    /**
     * Sets hosted field.
     */
    public function hosted(?array $value): self
    {
        $this->instance->setHosted($value);
        return $this;
    }

    /**
     * Initializes a new metafield scope object.
     */
    public function build(): MetafieldScope
    {
        return CoreHelper::clone($this->instance);
    }
}
