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

class CreateProductPricePoint implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var int
     */
    private $priceInCents;

    /**
     * @var int
     */
    private $interval;

    /**
     * @var string
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
     * @var array
     */
    private $expirationIntervalUnit = [];

    /**
     * @var bool|null
     */
    private $useSiteExchangeRate = true;

    /**
     * @param string $name
     * @param int $priceInCents
     * @param int $interval
     * @param string $intervalUnit
     */
    public function __construct(string $name, int $priceInCents, int $interval, string $intervalUnit)
    {
        $this->name = $name;
        $this->priceInCents = $priceInCents;
        $this->interval = $interval;
        $this->intervalUnit = $intervalUnit;
    }

    /**
     * Returns Name.
     * The product price point name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The product price point name
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
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
    public function getPriceInCents(): int
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     * The product price point price, in integer cents
     *
     * @required
     * @maps price_in_cents
     */
    public function setPriceInCents(int $priceInCents): void
    {
        $this->priceInCents = $priceInCents;
    }

    /**
     * Returns Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this product price point would renew every 30 days
     */
    public function getInterval(): int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this product price point would renew every 30 days
     *
     * @required
     * @maps interval
     */
    public function setInterval(int $interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     * A string representing the interval unit for this product price point, either month or day
     */
    public function getIntervalUnit(): string
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     * A string representing the interval unit for this product price point, either month or day
     *
     * @required
     * @maps interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setIntervalUnit(string $intervalUnit): void
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
     * would mean this product price point trial would last 30 days.
     */
    public function getTrialInterval(): ?int
    {
        return $this->trialInterval;
    }

    /**
     * Sets Trial Interval.
     * The numerical trial interval. i.e. an interval of ‘30’ coupled with a trial_interval_unit of day
     * would mean this product price point trial would last 30 days.
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
     * expiration_interval_unit of day would mean this product price point would expire after 30 days.
     */
    public function getExpirationInterval(): ?int
    {
        return $this->expirationInterval;
    }

    /**
     * Sets Expiration Interval.
     * The numerical expiration interval. i.e. an expiration_interval of ‘30’ coupled with an
     * expiration_interval_unit of day would mean this product price point would expire after 30 days.
     *
     * @maps expiration_interval
     */
    public function setExpirationInterval(?int $expirationInterval): void
    {
        $this->expirationInterval = $expirationInterval;
    }

    /**
     * Returns Expiration Interval Unit.
     * A string representing the expiration interval unit for this product price point, either month, day
     * or never
     */
    public function getExpirationIntervalUnit(): ?string
    {
        if (count($this->expirationIntervalUnit) == 0) {
            return null;
        }
        return $this->expirationIntervalUnit['value'];
    }

    /**
     * Sets Expiration Interval Unit.
     * A string representing the expiration interval unit for this product price point, either month, day
     * or never
     *
     * @maps expiration_interval_unit
     * @factory \AdvancedBillingLib\Models\ExpirationIntervalUnit::checkValue
     */
    public function setExpirationIntervalUnit(?string $expirationIntervalUnit): void
    {
        $this->expirationIntervalUnit['value'] = $expirationIntervalUnit;
    }

    /**
     * Unsets Expiration Interval Unit.
     * A string representing the expiration interval unit for this product price point, either month, day
     * or never
     */
    public function unsetExpirationIntervalUnit(): void
    {
        $this->expirationIntervalUnit = [];
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
     * Converts the CreateProductPricePoint object to a human-readable string representation.
     *
     * @return string The string representation of the CreateProductPricePoint object.
     */
    public function __toString(): string
    {
        return ApiHelper::stringify(
            'CreateProductPricePoint',
            [
                'name' => $this->name,
                'handle' => $this->handle,
                'priceInCents' => $this->priceInCents,
                'interval' => $this->interval,
                'intervalUnit' => $this->intervalUnit,
                'trialPriceInCents' => $this->trialPriceInCents,
                'trialInterval' => $this->trialInterval,
                'trialIntervalUnit' => $this->trialIntervalUnit,
                'trialType' => $this->trialType,
                'initialChargeInCents' => $this->initialChargeInCents,
                'initialChargeAfterTrial' => $this->initialChargeAfterTrial,
                'expirationInterval' => $this->expirationInterval,
                'expirationIntervalUnit' => $this->getExpirationIntervalUnit(),
                'useSiteExchangeRate' => $this->useSiteExchangeRate,
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
        $json['name']                           = $this->name;
        if (isset($this->handle)) {
            $json['handle']                     = $this->handle;
        }
        $json['price_in_cents']                 = $this->priceInCents;
        $json['interval']                       = $this->interval;
        $json['interval_unit']                  = IntervalUnit::checkValue($this->intervalUnit);
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
        if (isset($this->initialChargeInCents)) {
            $json['initial_charge_in_cents']    = $this->initialChargeInCents;
        }
        if (isset($this->initialChargeAfterTrial)) {
            $json['initial_charge_after_trial'] = $this->initialChargeAfterTrial;
        }
        if (isset($this->expirationInterval)) {
            $json['expiration_interval']        = $this->expirationInterval;
        }
        if (!empty($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit']   =
                ExpirationIntervalUnit::checkValue(
                    $this->expirationIntervalUnit['value']
                );
        }
        if (isset($this->useSiteExchangeRate)) {
            $json['use_site_exchange_rate']     = $this->useSiteExchangeRate;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
