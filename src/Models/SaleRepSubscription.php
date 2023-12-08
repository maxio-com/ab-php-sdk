<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SaleRepSubscription implements \JsonSerializable
{
    /**
     * @var int|null
     */
    private $id;

    /**
     * @var string|null
     */
    private $siteName;

    /**
     * @var string|null
     */
    private $subscriptionUrl;

    /**
     * @var string|null
     */
    private $customerName;

    /**
     * @var string|null
     */
    private $createdAt;

    /**
     * @var string|null
     */
    private $mrr;

    /**
     * @var string|null
     */
    private $usage;

    /**
     * @var string|null
     */
    private $recurring;

    /**
     * @var string|null
     */
    private $lastPayment;

    /**
     * @var array
     */
    private $churnDate = [];

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
     * Returns Subscription Url.
     */
    public function getSubscriptionUrl(): ?string
    {
        return $this->subscriptionUrl;
    }

    /**
     * Sets Subscription Url.
     *
     * @maps subscription_url
     */
    public function setSubscriptionUrl(?string $subscriptionUrl): void
    {
        $this->subscriptionUrl = $subscriptionUrl;
    }

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
     * Returns Created At.
     */
    public function getCreatedAt(): ?string
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     *
     * @maps created_at
     */
    public function setCreatedAt(?string $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Mrr.
     */
    public function getMrr(): ?string
    {
        return $this->mrr;
    }

    /**
     * Sets Mrr.
     *
     * @maps mrr
     */
    public function setMrr(?string $mrr): void
    {
        $this->mrr = $mrr;
    }

    /**
     * Returns Usage.
     */
    public function getUsage(): ?string
    {
        return $this->usage;
    }

    /**
     * Sets Usage.
     *
     * @maps usage
     */
    public function setUsage(?string $usage): void
    {
        $this->usage = $usage;
    }

    /**
     * Returns Recurring.
     */
    public function getRecurring(): ?string
    {
        return $this->recurring;
    }

    /**
     * Sets Recurring.
     *
     * @maps recurring
     */
    public function setRecurring(?string $recurring): void
    {
        $this->recurring = $recurring;
    }

    /**
     * Returns Last Payment.
     */
    public function getLastPayment(): ?string
    {
        return $this->lastPayment;
    }

    /**
     * Sets Last Payment.
     *
     * @maps last_payment
     */
    public function setLastPayment(?string $lastPayment): void
    {
        $this->lastPayment = $lastPayment;
    }

    /**
     * Returns Churn Date.
     */
    public function getChurnDate(): ?string
    {
        if (count($this->churnDate) == 0) {
            return null;
        }
        return $this->churnDate['value'];
    }

    /**
     * Sets Churn Date.
     *
     * @maps churn_date
     */
    public function setChurnDate(?string $churnDate): void
    {
        $this->churnDate['value'] = $churnDate;
    }

    /**
     * Unsets Churn Date.
     */
    public function unsetChurnDate(): void
    {
        $this->churnDate = [];
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
            $json['id']               = $this->id;
        }
        if (isset($this->siteName)) {
            $json['site_name']        = $this->siteName;
        }
        if (isset($this->subscriptionUrl)) {
            $json['subscription_url'] = $this->subscriptionUrl;
        }
        if (isset($this->customerName)) {
            $json['customer_name']    = $this->customerName;
        }
        if (isset($this->createdAt)) {
            $json['created_at']       = $this->createdAt;
        }
        if (isset($this->mrr)) {
            $json['mrr']              = $this->mrr;
        }
        if (isset($this->usage)) {
            $json['usage']            = $this->usage;
        }
        if (isset($this->recurring)) {
            $json['recurring']        = $this->recurring;
        }
        if (isset($this->lastPayment)) {
            $json['last_payment']     = $this->lastPayment;
        }
        if (!empty($this->churnDate)) {
            $json['churn_date']       = $this->churnDate['value'];
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
