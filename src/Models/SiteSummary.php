<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class SiteSummary implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $sellerName;

    /**
     * @var string|null
     */
    private $siteName;

    /**
     * @var int|null
     */
    private $siteId;

    /**
     * @var string|null
     */
    private $siteCurrency;

    /**
     * @var SiteStatistics|null
     */
    private $stats;

    /**
     * Returns Seller Name.
     */
    public function getSellerName(): ?string
    {
        return $this->sellerName;
    }

    /**
     * Sets Seller Name.
     *
     * @maps seller_name
     */
    public function setSellerName(?string $sellerName): void
    {
        $this->sellerName = $sellerName;
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
     * Returns Site Id.
     */
    public function getSiteId(): ?int
    {
        return $this->siteId;
    }

    /**
     * Sets Site Id.
     *
     * @maps site_id
     */
    public function setSiteId(?int $siteId): void
    {
        $this->siteId = $siteId;
    }

    /**
     * Returns Site Currency.
     */
    public function getSiteCurrency(): ?string
    {
        return $this->siteCurrency;
    }

    /**
     * Sets Site Currency.
     *
     * @maps site_currency
     */
    public function setSiteCurrency(?string $siteCurrency): void
    {
        $this->siteCurrency = $siteCurrency;
    }

    /**
     * Returns Stats.
     */
    public function getStats(): ?SiteStatistics
    {
        return $this->stats;
    }

    /**
     * Sets Stats.
     *
     * @maps stats
     */
    public function setStats(?SiteStatistics $stats): void
    {
        $this->stats = $stats;
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
        if (isset($this->sellerName)) {
            $json['seller_name']   = $this->sellerName;
        }
        if (isset($this->siteName)) {
            $json['site_name']     = $this->siteName;
        }
        if (isset($this->siteId)) {
            $json['site_id']       = $this->siteId;
        }
        if (isset($this->siteCurrency)) {
            $json['site_currency'] = $this->siteCurrency;
        }
        if (isset($this->stats)) {
            $json['stats']         = $this->stats;
        }

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
