<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models\Builders;

use AdvancedBillingLib\Models\AllocationSettings;
use AdvancedBillingLib\Models\NetTerms;
use AdvancedBillingLib\Models\OrganizationAddress;
use AdvancedBillingLib\Models\Site;
use AdvancedBillingLib\Models\TaxConfiguration;
use Core\Utils\CoreHelper;

/**
 * Builder for model Site
 *
 * @see Site
 */
class SiteBuilder
{
    /**
     * @var Site
     */
    private $instance;

    private function __construct(Site $instance)
    {
        $this->instance = $instance;
    }

    /**
     * Initializes a new Site Builder object.
     */
    public static function init(): self
    {
        return new self(new Site());
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
     * Sets subdomain field.
     *
     * @param string|null $value
     */
    public function subdomain(?string $value): self
    {
        $this->instance->setSubdomain($value);
        return $this;
    }

    /**
     * Sets currency field.
     *
     * @param string|null $value
     */
    public function currency(?string $value): self
    {
        $this->instance->setCurrency($value);
        return $this;
    }

    /**
     * Sets seller id field.
     *
     * @param int|null $value
     */
    public function sellerId(?int $value): self
    {
        $this->instance->setSellerId($value);
        return $this;
    }

    /**
     * Sets non primary currencies field.
     *
     * @param string[]|null $value
     */
    public function nonPrimaryCurrencies(?array $value): self
    {
        $this->instance->setNonPrimaryCurrencies($value);
        return $this;
    }

    /**
     * Sets relationship invoicing enabled field.
     *
     * @param bool|null $value
     */
    public function relationshipInvoicingEnabled(?bool $value): self
    {
        $this->instance->setRelationshipInvoicingEnabled($value);
        return $this;
    }

    /**
     * Sets customer hierarchy enabled field.
     *
     * @param bool|null $value
     */
    public function customerHierarchyEnabled(?bool $value): self
    {
        $this->instance->setCustomerHierarchyEnabled($value);
        return $this;
    }

    /**
     * Sets whopays enabled field.
     *
     * @param bool|null $value
     */
    public function whopaysEnabled(?bool $value): self
    {
        $this->instance->setWhopaysEnabled($value);
        return $this;
    }

    /**
     * Sets whopays default payer field.
     *
     * @param string|null $value
     */
    public function whopaysDefaultPayer(?string $value): self
    {
        $this->instance->setWhopaysDefaultPayer($value);
        return $this;
    }

    /**
     * Sets allocation settings field.
     *
     * @param AllocationSettings|null $value
     */
    public function allocationSettings(?AllocationSettings $value): self
    {
        $this->instance->setAllocationSettings($value);
        return $this;
    }

    /**
     * Sets default payment collection method field.
     *
     * @param string|null $value
     */
    public function defaultPaymentCollectionMethod(?string $value): self
    {
        $this->instance->setDefaultPaymentCollectionMethod($value);
        return $this;
    }

    /**
     * Sets organization address field.
     *
     * @param OrganizationAddress|null $value
     */
    public function organizationAddress(?OrganizationAddress $value): self
    {
        $this->instance->setOrganizationAddress($value);
        return $this;
    }

    /**
     * Sets tax configuration field.
     *
     * @param TaxConfiguration|null $value
     */
    public function taxConfiguration(?TaxConfiguration $value): self
    {
        $this->instance->setTaxConfiguration($value);
        return $this;
    }

    /**
     * Sets net terms field.
     *
     * @param NetTerms|null $value
     */
    public function netTerms(?NetTerms $value): self
    {
        $this->instance->setNetTerms($value);
        return $this;
    }

    /**
     * Sets test field.
     *
     * @param bool|null $value
     */
    public function test(?bool $value): self
    {
        $this->instance->setTest($value);
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
     * Initializes a new Site object.
     */
    public function build(): Site
    {
        return CoreHelper::clone($this->instance);
    }
}
