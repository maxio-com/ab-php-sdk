<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\ApiHelper;
use stdClass;

class Site implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $subdomain;

    /**
     * @var string|null
     */
    private $currency;

    /**
     * @var int|null
     */
    private $sellerId;

    /**
     * @var string[]|null
     */
    private $nonPrimaryCurrencies;

    /**
     * @var bool|null
     */
    private $relationshipInvoicingEnabled;

    /**
     * @var bool|null
     */
    private $scheduleSubscriptionCancellationEnabled;

    /**
     * @var bool|null
     */
    private $customerHierarchyEnabled;

    /**
     * @var bool|null
     */
    private $whopaysEnabled;

    /**
     * @var string|null
     */
    private $whopaysDefaultPayer;

    /**
     * @var AllocationSettings|null
     */
    private $allocationSettings;

    /**
     * @var string|null
     */
    private $defaultPaymentCollectionMethod;

    /**
     * @var OrganizationAddress|null
     */
    private $organizationAddress;

    /**
     * @var TaxConfiguration|null
     */
    private $taxConfiguration;

    /**
     * @var NetTerms|null
     */
    private $netTerms;

    /**
     * @var bool|null
     */
    private $test;

    /**
     * Returns Id.
     */
    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * Sets Id.
     *
     * @maps id
     */
    public function setId(?int $id): void
    {
        $this->id = $id;
    }

    /**
     * Returns Name.
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Subdomain.
     */
    public function getSubdomain(): ?string
    {
        return $this->subdomain;
    }

    /**
     * Sets Subdomain.
     *
     * @maps subdomain
     */
    public function setSubdomain(?string $subdomain): void
    {
        $this->subdomain = $subdomain;
    }

    /**
     * Returns Currency.
     */
    public function getCurrency(): ?string
    {
        return $this->currency;
    }

    /**
     * Sets Currency.
     *
     * @maps currency
     */
    public function setCurrency(?string $currency): void
    {
        $this->currency = $currency;
    }

    /**
     * Returns Seller Id.
     */
    public function getSellerId(): ?int
    {
        return $this->sellerId;
    }

    /**
     * Sets Seller Id.
     *
     * @maps seller_id
     */
    public function setSellerId(?int $sellerId): void
    {
        $this->sellerId = $sellerId;
    }

    /**
     * Returns Non Primary Currencies.
     *
     * @return string[]|null
     */
    public function getNonPrimaryCurrencies(): ?array
    {
        return $this->nonPrimaryCurrencies;
    }

    /**
     * Sets Non Primary Currencies.
     *
     * @maps non_primary_currencies
     *
     * @param string[]|null $nonPrimaryCurrencies
     */
    public function setNonPrimaryCurrencies(?array $nonPrimaryCurrencies): void
    {
        $this->nonPrimaryCurrencies = $nonPrimaryCurrencies;
    }

    /**
     * Returns Relationship Invoicing Enabled.
     */
    public function getRelationshipInvoicingEnabled(): ?bool
    {
        return $this->relationshipInvoicingEnabled;
    }

    /**
     * Sets Relationship Invoicing Enabled.
     *
     * @maps relationship_invoicing_enabled
     */
    public function setRelationshipInvoicingEnabled(?bool $relationshipInvoicingEnabled): void
    {
        $this->relationshipInvoicingEnabled = $relationshipInvoicingEnabled;
    }

    /**
     * Returns Schedule Subscription Cancellation Enabled.
     */
    public function getScheduleSubscriptionCancellationEnabled(): ?bool
    {
        return $this->scheduleSubscriptionCancellationEnabled;
    }

    /**
     * Sets Schedule Subscription Cancellation Enabled.
     *
     * @maps schedule_subscription_cancellation_enabled
     */
    public function setScheduleSubscriptionCancellationEnabled(?bool $scheduleSubscriptionCancellationEnabled): void
    {
        $this->scheduleSubscriptionCancellationEnabled = $scheduleSubscriptionCancellationEnabled;
    }

    /**
     * Returns Customer Hierarchy Enabled.
     */
    public function getCustomerHierarchyEnabled(): ?bool
    {
        return $this->customerHierarchyEnabled;
    }

    /**
     * Sets Customer Hierarchy Enabled.
     *
     * @maps customer_hierarchy_enabled
     */
    public function setCustomerHierarchyEnabled(?bool $customerHierarchyEnabled): void
    {
        $this->customerHierarchyEnabled = $customerHierarchyEnabled;
    }

    /**
     * Returns Whopays Enabled.
     */
    public function getWhopaysEnabled(): ?bool
    {
        return $this->whopaysEnabled;
    }

    /**
     * Sets Whopays Enabled.
     *
     * @maps whopays_enabled
     */
    public function setWhopaysEnabled(?bool $whopaysEnabled): void
    {
        $this->whopaysEnabled = $whopaysEnabled;
    }

    /**
     * Returns Whopays Default Payer.
     */
    public function getWhopaysDefaultPayer(): ?string
    {
        return $this->whopaysDefaultPayer;
    }

    /**
     * Sets Whopays Default Payer.
     *
     * @maps whopays_default_payer
     */
    public function setWhopaysDefaultPayer(?string $whopaysDefaultPayer): void
    {
        $this->whopaysDefaultPayer = $whopaysDefaultPayer;
    }

    /**
     * Returns Allocation Settings.
     */
    public function getAllocationSettings(): ?AllocationSettings
    {
        return $this->allocationSettings;
    }

    /**
     * Sets Allocation Settings.
     *
     * @maps allocation_settings
     */
    public function setAllocationSettings(?AllocationSettings $allocationSettings): void
    {
        $this->allocationSettings = $allocationSettings;
    }

    /**
     * Returns Default Payment Collection Method.
     */
    public function getDefaultPaymentCollectionMethod(): ?string
    {
        return $this->defaultPaymentCollectionMethod;
    }

    /**
     * Sets Default Payment Collection Method.
     *
     * @maps default_payment_collection_method
     */
    public function setDefaultPaymentCollectionMethod(?string $defaultPaymentCollectionMethod): void
    {
        $this->defaultPaymentCollectionMethod = $defaultPaymentCollectionMethod;
    }

    /**
     * Returns Organization Address.
     */
    public function getOrganizationAddress(): ?OrganizationAddress
    {
        return $this->organizationAddress;
    }

    /**
     * Sets Organization Address.
     *
     * @maps organization_address
     */
    public function setOrganizationAddress(?OrganizationAddress $organizationAddress): void
    {
        $this->organizationAddress = $organizationAddress;
    }

    /**
     * Returns Tax Configuration.
     */
    public function getTaxConfiguration(): ?TaxConfiguration
    {
        return $this->taxConfiguration;
    }

    /**
     * Sets Tax Configuration.
     *
     * @maps tax_configuration
     */
    public function setTaxConfiguration(?TaxConfiguration $taxConfiguration): void
    {
        $this->taxConfiguration = $taxConfiguration;
    }

    /**
     * Returns Net Terms.
     */
    public function getNetTerms(): ?NetTerms
    {
        return $this->netTerms;
    }

    /**
     * Sets Net Terms.
     *
     * @maps net_terms
     */
    public function setNetTerms(?NetTerms $netTerms): void
    {
        $this->netTerms = $netTerms;
    }

    /**
     * Returns Test.
     */
    public function getTest(): ?bool
    {
        return $this->test;
    }

    /**
     * Sets Test.
     *
     * @maps test
     */
    public function setTest(?bool $test): void
    {
        $this->test = $test;
    }

    /**
     * Converts the Site object to a human-readable string representation.
     *
     * @return string The string representation of the Site object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'Site',
            [
                'id' => $this->id,
                'name' => $this->name,
                'subdomain' => $this->subdomain,
                'currency' => $this->currency,
                'sellerId' => $this->sellerId,
                'nonPrimaryCurrencies' => $this->nonPrimaryCurrencies,
                'relationshipInvoicingEnabled' => $this->relationshipInvoicingEnabled,
                'scheduleSubscriptionCancellationEnabled' => $this->scheduleSubscriptionCancellationEnabled,
                'customerHierarchyEnabled' => $this->customerHierarchyEnabled,
                'whopaysEnabled' => $this->whopaysEnabled,
                'whopaysDefaultPayer' => $this->whopaysDefaultPayer,
                'allocationSettings' => $this->allocationSettings,
                'defaultPaymentCollectionMethod' => $this->defaultPaymentCollectionMethod,
                'organizationAddress' => $this->organizationAddress,
                'taxConfiguration' => $this->taxConfiguration,
                'netTerms' => $this->netTerms,
                'test' => $this->test,
                'additionalProperties' => $this->additionalProperties
            ]
        );
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property.
     * @param mixed $value Value of property.
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
    }

    /**
     * Find an additional property by name in this model or false if property does not exist.
     *
     * @param string $name Name of property.
     *
     * @return mixed|false Value of the property.
     */
    public function findAdditionalProperty(string $name)
    {
        if (isset($this->additionalProperties[$name])) {
            return $this->additionalProperties[$name];
        }
        return false;
    }

    /**
     * Encode this object to JSON
     *
     * @param bool $asArrayWhenEmpty Whether to serialize this model as an array whenever no fields
     *        are set. (default: false)
     *
     * @return array|stdClass
     */
    #[\ReturnTypeWillChange] // @phan-suppress-current-line PhanUndeclaredClassAttribute for (php < 8.1)
    public function jsonSerialize(bool $asArrayWhenEmpty = false)
    {
        $json = [];
        if (isset($this->id)) {
            $json['id']                                         = $this->id;
        }
        if (isset($this->name)) {
            $json['name']                                       = $this->name;
        }
        if (isset($this->subdomain)) {
            $json['subdomain']                                  = $this->subdomain;
        }
        if (isset($this->currency)) {
            $json['currency']                                   = $this->currency;
        }
        if (isset($this->sellerId)) {
            $json['seller_id']                                  = $this->sellerId;
        }
        if (isset($this->nonPrimaryCurrencies)) {
            $json['non_primary_currencies']                     = $this->nonPrimaryCurrencies;
        }
        if (isset($this->relationshipInvoicingEnabled)) {
            $json['relationship_invoicing_enabled']             = $this->relationshipInvoicingEnabled;
        }
        if (isset($this->scheduleSubscriptionCancellationEnabled)) {
            $json['schedule_subscription_cancellation_enabled'] = $this->scheduleSubscriptionCancellationEnabled;
        }
        if (isset($this->customerHierarchyEnabled)) {
            $json['customer_hierarchy_enabled']                 = $this->customerHierarchyEnabled;
        }
        if (isset($this->whopaysEnabled)) {
            $json['whopays_enabled']                            = $this->whopaysEnabled;
        }
        if (isset($this->whopaysDefaultPayer)) {
            $json['whopays_default_payer']                      = $this->whopaysDefaultPayer;
        }
        if (isset($this->allocationSettings)) {
            $json['allocation_settings']                        = $this->allocationSettings;
        }
        if (isset($this->defaultPaymentCollectionMethod)) {
            $json['default_payment_collection_method']          = $this->defaultPaymentCollectionMethod;
        }
        if (isset($this->organizationAddress)) {
            $json['organization_address']                       = $this->organizationAddress;
        }
        if (isset($this->taxConfiguration)) {
            $json['tax_configuration']                          = $this->taxConfiguration;
        }
        if (isset($this->netTerms)) {
            $json['net_terms']                                  = $this->netTerms;
        }
        if (isset($this->test)) {
            $json['test']                                       = $this->test;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
