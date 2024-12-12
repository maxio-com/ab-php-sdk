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

/**
 * (Optional) Used in place of `product_price_point_id` to define a custom price point unique to the
 * subscription
 */
class SubscriptionCustomPrice implements \JsonSerializable
{
    /**
     * @var string|null
     */
    private $name;

    /**
     * @var string|null
     */
    private $handle;

    /**
     * @var string|int
     */
    private $priceInCents;

    /**
     * @var string|int
     */
    private $interval;

    /**
     * @var string|null
     */
    private $intervalUnit;

    /**
     * @var string|int|null
     */
    private $trialPriceInCents;

    /**
     * @var string|int|null
     */
    private $trialInterval;

    /**
     * @var string|null
     */
    private $trialIntervalUnit;

    /**
     * @var string|int|null
     */
    private $initialChargeInCents;

    /**
     * @var bool|null
     */
    private $initialChargeAfterTrial;

    /**
     * @var string|int|null
     */
    private $expirationInterval;

    /**
     * @var array
     */
    private $expirationIntervalUnit = [];

    /**
     * @var bool|null
     */
    private $taxIncluded;

    /**
     * @param string|int $priceInCents
     * @param string|int $interval
     */
    public function __construct($priceInCents, $interval)
    {
        $this->priceInCents = $priceInCents;
        $this->interval = $interval;
    }

    /**
     * Returns Name.
     * (Optional)
     */
    public function getName(): ?string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * (Optional)
     *
     * @maps name
     */
    public function setName(?string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Handle.
     * (Optional)
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     * (Optional)
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Price in Cents.
     * Required if using `custom_price` attribute.
     *
     * @return string|int
     */
    public function getPriceInCents()
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     * Required if using `custom_price` attribute.
     *
     * @required
     * @maps price_in_cents
     * @mapsBy oneOf(string,int)
     *
     * @param string|int $priceInCents
     */
    public function setPriceInCents($priceInCents): void
    {
        $this->priceInCents = $priceInCents;
    }

    /**
     * Returns Interval.
     * Required if using `custom_price` attribute.
     *
     * @return string|int
     */
    public function getInterval()
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * Required if using `custom_price` attribute.
     *
     * @required
     * @maps interval
     * @mapsBy oneOf(string,int)
     *
     * @param string|int $interval
     */
    public function setInterval($interval): void
    {
        $this->interval = $interval;
    }

    /**
     * Returns Interval Unit.
     * Required if using `custom_price` attribute.
     */
    public function getIntervalUnit(): ?string
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     * Required if using `custom_price` attribute.
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
     * (Optional)
     *
     * @return string|int|null
     */
    public function getTrialPriceInCents()
    {
        return $this->trialPriceInCents;
    }

    /**
     * Sets Trial Price in Cents.
     * (Optional)
     *
     * @maps trial_price_in_cents
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $trialPriceInCents
     */
    public function setTrialPriceInCents($trialPriceInCents): void
    {
        $this->trialPriceInCents = $trialPriceInCents;
    }

    /**
     * Returns Trial Interval.
     * (Optional)
     *
     * @return string|int|null
     */
    public function getTrialInterval()
    {
        return $this->trialInterval;
    }

    /**
     * Sets Trial Interval.
     * (Optional)
     *
     * @maps trial_interval
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $trialInterval
     */
    public function setTrialInterval($trialInterval): void
    {
        $this->trialInterval = $trialInterval;
    }

    /**
     * Returns Trial Interval Unit.
     * (Optional)
     */
    public function getTrialIntervalUnit(): ?string
    {
        return $this->trialIntervalUnit;
    }

    /**
     * Sets Trial Interval Unit.
     * (Optional)
     *
     * @maps trial_interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setTrialIntervalUnit(?string $trialIntervalUnit): void
    {
        $this->trialIntervalUnit = $trialIntervalUnit;
    }

    /**
     * Returns Initial Charge in Cents.
     * (Optional)
     *
     * @return string|int|null
     */
    public function getInitialChargeInCents()
    {
        return $this->initialChargeInCents;
    }

    /**
     * Sets Initial Charge in Cents.
     * (Optional)
     *
     * @maps initial_charge_in_cents
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $initialChargeInCents
     */
    public function setInitialChargeInCents($initialChargeInCents): void
    {
        $this->initialChargeInCents = $initialChargeInCents;
    }

    /**
     * Returns Initial Charge After Trial.
     * (Optional)
     */
    public function getInitialChargeAfterTrial(): ?bool
    {
        return $this->initialChargeAfterTrial;
    }

    /**
     * Sets Initial Charge After Trial.
     * (Optional)
     *
     * @maps initial_charge_after_trial
     */
    public function setInitialChargeAfterTrial(?bool $initialChargeAfterTrial): void
    {
        $this->initialChargeAfterTrial = $initialChargeAfterTrial;
    }

    /**
     * Returns Expiration Interval.
     * (Optional)
     *
     * @return string|int|null
     */
    public function getExpirationInterval()
    {
        return $this->expirationInterval;
    }

    /**
     * Sets Expiration Interval.
     * (Optional)
     *
     * @maps expiration_interval
     * @mapsBy anyOf(oneOf(string,int),null)
     *
     * @param string|int|null $expirationInterval
     */
    public function setExpirationInterval($expirationInterval): void
    {
        $this->expirationInterval = $expirationInterval;
    }

    /**
     * Returns Expiration Interval Unit.
     * (Optional)
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
     * (Optional)
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
     * (Optional)
     */
    public function unsetExpirationIntervalUnit(): void
    {
        $this->expirationIntervalUnit = [];
    }

    /**
     * Returns Tax Included.
     * (Optional)
     */
    public function getTaxIncluded(): ?bool
    {
        return $this->taxIncluded;
    }

    /**
     * Sets Tax Included.
     * (Optional)
     *
     * @maps tax_included
     */
    public function setTaxIncluded(?bool $taxIncluded): void
    {
        $this->taxIncluded = $taxIncluded;
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
        if (isset($this->name)) {
            $json['name']                       = $this->name;
        }
        if (isset($this->handle)) {
            $json['handle']                     = $this->handle;
        }
        $json['price_in_cents']                 =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->priceInCents,
                'oneOf(string,int)'
            );
        $json['interval']                       =
            ApiHelper::getJsonHelper()->verifyTypes(
                $this->interval,
                'oneOf(string,int)'
            );
        $json['interval_unit']                  = IntervalUnit::checkValue($this->intervalUnit);
        if (isset($this->trialPriceInCents)) {
            $json['trial_price_in_cents']       =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->trialPriceInCents,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->trialInterval)) {
            $json['trial_interval']             =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->trialInterval,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->trialIntervalUnit)) {
            $json['trial_interval_unit']        = IntervalUnit::checkValue($this->trialIntervalUnit);
        }
        if (isset($this->initialChargeInCents)) {
            $json['initial_charge_in_cents']    =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->initialChargeInCents,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (isset($this->initialChargeAfterTrial)) {
            $json['initial_charge_after_trial'] = $this->initialChargeAfterTrial;
        }
        if (isset($this->expirationInterval)) {
            $json['expiration_interval']        =
                ApiHelper::getJsonHelper()->verifyTypes(
                    $this->expirationInterval,
                    'anyOf(oneOf(string,int),null)'
                );
        }
        if (!empty($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit']   =
                ExpirationIntervalUnit::checkValue(
                    $this->expirationIntervalUnit['value']
                );
        }
        if (isset($this->taxIncluded)) {
            $json['tax_included']               = $this->taxIncluded;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
