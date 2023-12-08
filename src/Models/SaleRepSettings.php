<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SaleRepSettings implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $customerName;

    /**
     * @var int|null
     */
    private $subscriptionId;

    /**
     * @var string|null
     */
    private $siteLink;

    /**
     * @var string|null
     */
    private $siteName;

    /**
     * @var string|null
     */
    private $subscriptionMrr;

    /**
     * @var int|null
     */
    private $salesRepId;

    /**
     * @var string|null
     */
    private $salesRepName;

    /**
     * Returns Customer Name.
     */
    public function getCustomerName(): ?string
    {
        return $this->customerName;
    }

    /**
     * Sets Customer Name.
     *
     * @maps customer_name
     */
    public function setCustomerName(?string $customerName): void
    {
        $this->customerName = $customerName;
    }

    /**
     * Returns Subscription Id.
     */
    public function getSubscriptionId(): ?int
    {
        return $this->subscriptionId;
    }

    /**
     * Sets Subscription Id.
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId = $subscriptionId;
    }

    /**
     * Returns Site Link.
     */
    public function getSiteLink(): ?string
    {
        return $this->siteLink;
    }

    /**
     * Sets Site Link.
     *
     * @maps site_link
     */
    public function setSiteLink(?string $siteLink): void
    {
        $this->siteLink = $siteLink;
    }

    /**
     * Returns Site Name.
     */
    public function getSiteName(): ?string
    {
        return $this->siteName;
    }

    /**
     * Sets Site Name.
     *
     * @maps site_name
     */
    public function setSiteName(?string $siteName): void
    {
        $this->siteName = $siteName;
    }

    /**
     * Returns Subscription Mrr.
     */
    public function getSubscriptionMrr(): ?string
    {
        return $this->subscriptionMrr;
    }

    /**
     * Sets Subscription Mrr.
     *
     * @maps subscription_mrr
     */
    public function setSubscriptionMrr(?string $subscriptionMrr): void
    {
        $this->subscriptionMrr = $subscriptionMrr;
    }

    /**
     * Returns Sales Rep Id.
     */
    public function getSalesRepId(): ?int
    {
        return $this->salesRepId;
    }

    /**
     * Sets Sales Rep Id.
     *
     * @maps sales_rep_id
     */
    public function setSalesRepId(?int $salesRepId): void
    {
        $this->salesRepId = $salesRepId;
    }

    /**
     * Returns Sales Rep Name.
     */
    public function getSalesRepName(): ?string
    {
        return $this->salesRepName;
    }

    /**
     * Sets Sales Rep Name.
     *
     * @maps sales_rep_name
     */
    public function setSalesRepName(?string $salesRepName): void
    {
        $this->salesRepName = $salesRepName;
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
        if (isset($this->customerName)) {
            $json['customer_name']    = $this->customerName;
        }
        if (isset($this->subscriptionId)) {
            $json['subscription_id']  = $this->subscriptionId;
        }
        if (isset($this->siteLink)) {
            $json['site_link']        = $this->siteLink;
        }
        if (isset($this->siteName)) {
            $json['site_name']        = $this->siteName;
        }
        if (isset($this->subscriptionMrr)) {
            $json['subscription_mrr'] = $this->subscriptionMrr;
        }
        if (isset($this->salesRepId)) {
            $json['sales_rep_id']     = $this->salesRepId;
        }
        if (isset($this->salesRepName)) {
            $json['sales_rep_name']   = $this->salesRepName;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
