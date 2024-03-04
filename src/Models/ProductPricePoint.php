<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use AdvancedBillingLib\Utils\DateTimeHelper;
use stdClass;

class ProductPricePoint implements \JsonSerializable
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
    private $handle;

    /**
     * @var int|null
     */
    private $priceInCents;

    /**
     * @var int|null
     */
    private $interval;

    /**
     * @var string|null
     */
    private $intervalUnit;

    /**
     * @var int|null
     */
    private $trialPriceInCents;

    /**
     * @var int|null
     */
    private $trialInterval;

    /**
     * @var string|null
     */
    private $trialIntervalUnit;

    /**
     * @var string|null
     */
    private $trialType;

    /**
     * @var bool|null
     */
    private $introductoryOffer;

    /**
     * @var int|null
     */
    private $initialChargeInCents;

    /**
     * @var bool|null
     */
    private $initialChargeAfterTrial;

    /**
     * @var int|null
     */
    private $expirationInterval;

    /**
     * @var string|null
     */
    private $expirationIntervalUnit;

    /**
     * @var int|null
     */
    private $productId;

    /**
     * @var array
     */
    private $archivedAt = [];

    /**
     * @var \DateTime|null
     */
    private $createdAt;

    /**
     * @var \DateTime|null
     */
    private $updatedAt;

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate;

    /**
     * @var string|null
     */
    private $type;

    /**
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * @var array
     */
    private $subscriptionId = [];

    /**
     * @var CurrencyPrice[]|null
     */
    private $currencyPrices;

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
     * The product price point name
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The product price point name
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Handle.
     * The product price point API handle
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     * The product price point API handle
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Price in Cents.
     * The product price point price, in integer cents
     */
    public function getPriceInCents(): ?int
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     * The product price point price, in integer cents
     *
     * @maps price_in_cents
     */
    public function setPriceInCents(?int $priceInCents): void
    {
        $this->priceInCents = $priceInCents;
    }

    /**
     * Returns Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this product price point would renew every 30 days
     */
    public function getInterval(): ?int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this product price point would renew every 30 days
     *
     * @maps interval
     */
    public function setInterval(?int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     * A string representing the interval unit for this product price point, either month or day
     */
    public function getIntervalUnit(): ?string
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     * A string representing the interval unit for this product price point, either month or day
     *
     * @maps interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setIntervalUnit(?string $intervalUnit): void
    {
        $this->intervalUnit = $intervalUnit;
    }

    /**
     * Returns Trial Price in Cents.
     * The product price point trial price, in integer cents
     */
    public function getTrialPriceInCents(): ?int
    {
        return $this->trialPriceInCents;
    }

    /**
     * Sets Trial Price in Cents.
     * The product price point trial price, in integer cents
     *
     * @maps trial_price_in_cents
     */
    public function setTrialPriceInCents(?int $trialPriceInCents): void
    {
        $this->trialPriceInCents = $trialPriceInCents;
    }

    /**
     * Returns Trial Interval.
     * The numerical trial interval. i.e. an interval of ‘30’ coupled with a trial_interval_unit of day
     * would mean this product price point trial would last 30 days
     */
    public function getTrialInterval(): ?int
    {
        return $this->trialInterval;
    }

    /**
     * Sets Trial Interval.
     * The numerical trial interval. i.e. an interval of ‘30’ coupled with a trial_interval_unit of day
     * would mean this product price point trial would last 30 days
     *
     * @maps trial_interval
     */
    public function setTrialInterval(?int $trialInterval): void
    {
        $this->trialInterval = $trialInterval;
    }

    /**
     * Returns Trial Interval Unit.
     * A string representing the trial interval unit for this product price point, either month or day
     */
    public function getTrialIntervalUnit(): ?string
    {
        return $this->trialIntervalUnit;
    }

    /**
     * Sets Trial Interval Unit.
     * A string representing the trial interval unit for this product price point, either month or day
     *
     * @maps trial_interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setTrialIntervalUnit(?string $trialIntervalUnit): void
    {
        $this->trialIntervalUnit = $trialIntervalUnit;
    }

    /**
     * Returns Trial Type.
     */
    public function getTrialType(): ?string
    {
        return $this->trialType;
    }

    /**
     * Sets Trial Type.
     *
     * @maps trial_type
     */
    public function setTrialType(?string $trialType): void
    {
        $this->trialType = $trialType;
    }

    /**
     * Returns Introductory Offer.
     * reserved for future use
     */
    public function getIntroductoryOffer(): ?bool
    {
        return $this->introductoryOffer;
    }

    /**
     * Sets Introductory Offer.
     * reserved for future use
     *
     * @maps introductory_offer
     */
    public function setIntroductoryOffer(?bool $introductoryOffer): void
    {
        $this->introductoryOffer = $introductoryOffer;
    }

    /**
     * Returns Initial Charge in Cents.
     * The product price point initial charge, in integer cents
     */
    public function getInitialChargeInCents(): ?int
    {
        return $this->initialChargeInCents;
    }

    /**
     * Sets Initial Charge in Cents.
     * The product price point initial charge, in integer cents
     *
     * @maps initial_charge_in_cents
     */
    public function setInitialChargeInCents(?int $initialChargeInCents): void
    {
        $this->initialChargeInCents = $initialChargeInCents;
    }

    /**
     * Returns Initial Charge After Trial.
     */
    public function getInitialChargeAfterTrial(): ?bool
    {
        return $this->initialChargeAfterTrial;
    }

    /**
     * Sets Initial Charge After Trial.
     *
     * @maps initial_charge_after_trial
     */
    public function setInitialChargeAfterTrial(?bool $initialChargeAfterTrial): void
    {
        $this->initialChargeAfterTrial = $initialChargeAfterTrial;
    }

    /**
     * Returns Expiration Interval.
     * The numerical expiration interval. i.e. an expiration_interval of ‘30’ coupled with an
     * expiration_interval_unit of day would mean this product price point would expire after 30 days
     */
    public function getExpirationInterval(): ?int
    {
        return $this->expirationInterval;
    }

    /**
     * Sets Expiration Interval.
     * The numerical expiration interval. i.e. an expiration_interval of ‘30’ coupled with an
     * expiration_interval_unit of day would mean this product price point would expire after 30 days
     *
     * @maps expiration_interval
     */
    public function setExpirationInterval(?int $expirationInterval): void
    {
        $this->expirationInterval = $expirationInterval;
    }

    /**
     * Returns Expiration Interval Unit.
     * A string representing the expiration interval unit for this product price point, either month or
     * day
     */
    public function getExpirationIntervalUnit(): ?string
    {
        return $this->expirationIntervalUnit;
    }

    /**
     * Sets Expiration Interval Unit.
     * A string representing the expiration interval unit for this product price point, either month or
     * day
     *
     * @maps expiration_interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setExpirationIntervalUnit(?string $expirationIntervalUnit): void
    {
        $this->expirationIntervalUnit = $expirationIntervalUnit;
    }

    /**
     * Returns Product Id.
     * The product id this price point belongs to
     */
    public function getProductId(): ?int
    {
        return $this->productId;
    }

    /**
     * Sets Product Id.
     * The product id this price point belongs to
     *
     * @maps product_id
     */
    public function setProductId(?int $productId): void
    {
        $this->productId = $productId;
    }

    /**
     * Returns Archived At.
     * Timestamp indicating when this price point was archived
     */
    public function getArchivedAt(): ?\DateTime
    {
        if (count($this->archivedAt) == 0) {
            return null;
        }
        return $this->archivedAt['value'];
    }

    /**
     * Sets Archived At.
     * Timestamp indicating when this price point was archived
     *
     * @maps archived_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setArchivedAt(?\DateTime $archivedAt): void
    {
        $this->archivedAt['value'] = $archivedAt;
    }

    /**
     * Unsets Archived At.
     * Timestamp indicating when this price point was archived
     */
    public function unsetArchivedAt(): void
    {
        $this->archivedAt = [];
    }

    /**
     * Returns Created At.
     * Timestamp indicating when this price point was created
     */
    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    /**
     * Sets Created At.
     * Timestamp indicating when this price point was created
     *
     * @maps created_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setCreatedAt(?\DateTime $createdAt): void
    {
        $this->createdAt = $createdAt;
    }

    /**
     * Returns Updated At.
     * Timestamp indicating when this price point was last updated
     */
    public function getUpdatedAt(): ?\DateTime
    {
        return $this->updatedAt;
    }

    /**
     * Sets Updated At.
     * Timestamp indicating when this price point was last updated
     *
     * @maps updated_at
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setUpdatedAt(?\DateTime $updatedAt): void
    {
        $this->updatedAt = $updatedAt;
    }

    /**
     * Returns Use Site Exchange Rate.
     * Whether or not to use the site's exchange rate or define your own pricing when your site has
     * multiple currencies defined.
     */
    public function getUseSiteExchangeRate(): ?bool
    {
        return $this->useSiteExchangeRate;
    }

    /**
     * Sets Use Site Exchange Rate.
     * Whether or not to use the site's exchange rate or define your own pricing when your site has
     * multiple currencies defined.
     *
     * @maps use_site_exchange_rate
     */
    public function setUseSiteExchangeRate(?bool $useSiteExchangeRate): void
    {
        $this->useSiteExchangeRate = $useSiteExchangeRate;
    }

    /**
     * Returns Type.
     * The type of price point
     */
    public function getType(): ?string
    {
        return $this->type;
    }

    /**
     * Sets Type.
     * The type of price point
     *
     * @maps type
     * @factory \AdvancedBillingLib\Models\PricePointType::checkValue
     */
    public function setType(?string $type): void
    {
        $this->type = $type;
    }

    /**
     * Returns Tax Included.
     * Whether or not the price point includes tax
     */
    public function getTaxIncluded(): ?bool
    {
        return $this->taxIncluded;
    }

    /**
     * Sets Tax Included.
     * Whether or not the price point includes tax
     *
     * @maps tax_included
     */
    public function setTaxIncluded(?bool $taxIncluded): void
    {
        $this->taxIncluded = $taxIncluded;
    }

    /**
     * Returns Subscription Id.
     * The subscription id this price point belongs to
     */
    public function getSubscriptionId(): ?int
    {
        if (count($this->subscriptionId) == 0) {
            return null;
        }
        return $this->subscriptionId['value'];
    }

    /**
     * Sets Subscription Id.
     * The subscription id this price point belongs to
     *
     * @maps subscription_id
     */
    public function setSubscriptionId(?int $subscriptionId): void
    {
        $this->subscriptionId['value'] = $subscriptionId;
    }

    /**
     * Unsets Subscription Id.
     * The subscription id this price point belongs to
     */
    public function unsetSubscriptionId(): void
    {
        $this->subscriptionId = [];
    }

    /**
     * Returns Currency Prices.
     * An array of currency pricing data is available when multiple currencies are defined for the site. It
     * varies based on the use_site_exchange_rate setting for the price point. This parameter is present
     * only in the response of read endpoints, after including the appropriate query parameter.
     *
     * @return CurrencyPrice[]|null
     */
    public function getCurrencyPrices(): ?array
    {
        return $this->currencyPrices;
    }

    /**
     * Sets Currency Prices.
     * An array of currency pricing data is available when multiple currencies are defined for the site. It
     * varies based on the use_site_exchange_rate setting for the price point. This parameter is present
     * only in the response of read endpoints, after including the appropriate query parameter.
     *
     * @maps currency_prices
     *
     * @param CurrencyPrice[]|null $currencyPrices
     */
    public function setCurrencyPrices(?array $currencyPrices): void
    {
        $this->currencyPrices = $currencyPrices;
    }

    private $additionalProperties = [];

    /**
     * Add an additional property to this model.
     *
     * @param string $name Name of property
     * @param mixed $value Value of property
     */
    public function addAdditionalProperty(string $name, $value)
    {
        $this->additionalProperties[$name] = $value;
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
            $json['id']                         = $this->id;
        }
        if (isset($this->name)) {
            $json['name']                       = $this->name;
        }
        if (isset($this->handle)) {
            $json['handle']                     = $this->handle;
        }
        if (isset($this->priceInCents)) {
            $json['price_in_cents']             = $this->priceInCents;
        }
        if (isset($this->interval)) {
            $json['interval']                   = $this->interval;
        }
        if (isset($this->intervalUnit)) {
            $json['interval_unit']              = IntervalUnit::checkValue($this->intervalUnit);
        }
        if (isset($this->trialPriceInCents)) {
            $json['trial_price_in_cents']       = $this->trialPriceInCents;
        }
        if (isset($this->trialInterval)) {
            $json['trial_interval']             = $this->trialInterval;
        }
        if (isset($this->trialIntervalUnit)) {
            $json['trial_interval_unit']        = IntervalUnit::checkValue($this->trialIntervalUnit);
        }
        if (isset($this->trialType)) {
            $json['trial_type']                 = $this->trialType;
        }
        if (isset($this->introductoryOffer)) {
            $json['introductory_offer']         = $this->introductoryOffer;
        }
        if (isset($this->initialChargeInCents)) {
            $json['initial_charge_in_cents']    = $this->initialChargeInCents;
        }
        if (isset($this->initialChargeAfterTrial)) {
            $json['initial_charge_after_trial'] = $this->initialChargeAfterTrial;
        }
        if (isset($this->expirationInterval)) {
            $json['expiration_interval']        = $this->expirationInterval;
        }
        if (isset($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit']   = IntervalUnit::checkValue($this->expirationIntervalUnit);
        }
        if (isset($this->productId)) {
            $json['product_id']                 = $this->productId;
        }
        if (!empty($this->archivedAt)) {
            $json['archived_at']                = DateTimeHelper::toRfc3339DateTime($this->archivedAt['value']);
        }
        if (isset($this->createdAt)) {
            $json['created_at']                 = DateTimeHelper::toRfc3339DateTime($this->createdAt);
        }
        if (isset($this->updatedAt)) {
            $json['updated_at']                 = DateTimeHelper::toRfc3339DateTime($this->updatedAt);
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']     = $this->useSiteExchangeRate;
        }
        if (isset($this->type)) {
            $json['type']                       = PricePointType::checkValue($this->type);
        }
        if (isset($this->taxIncluded)) {
            $json['tax_included']               = $this->taxIncluded;
        }
        if (!empty($this->subscriptionId)) {
            $json['subscription_id']            = $this->subscriptionId['value'];
        }
        if (isset($this->currencyPrices)) {
            $json['currency_prices']            = $this->currencyPrices;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
