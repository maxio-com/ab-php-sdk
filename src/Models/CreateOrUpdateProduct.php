<?php

declare(strict_types=1);

/*
 * AdvancedBilling
 *
 * This file was automatically generated for Maxio by APIMATIC v3.0 ( https://www.apimatic.io ).
 */

namespace AdvancedBillingLib\Models;

use stdClass;

class CreateOrUpdateProduct implements \JsonSerializable
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
     * @var string
     */
    private $description;

    /**
     * @var string|null
     */
    private $accountingCode;

    /**
     * @var bool|null
     */
    private $requireCreditCard;

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
     * @var array
     */
    private $trialIntervalUnit = [];

    /**
     * @var string|null
     */
    private $trialType;

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
    private $autoCreateSignupPage;

    /**
     * @var string|null
     */
    private $taxCode;

    /**
     * @param string $name
     * @param string $description
     * @param int $priceInCents
     * @param int $interval
     * @param string $intervalUnit
     */
    public function __construct(
        string $name,
        string $description,
        int $priceInCents,
        int $interval,
        string $intervalUnit
    ) {
        $this->name = $name;
        $this->description = $description;
        $this->priceInCents = $priceInCents;
        $this->interval = $interval;
        $this->intervalUnit = $intervalUnit;
    }

    /**
     * Returns Name.
     * The product name
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * The product name
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
     * The product API handle
     */
    public function getHandle(): ?string
    {
        return $this->handle;
    }

    /**
     * Sets Handle.
     * The product API handle
     *
     * @maps handle
     */
    public function setHandle(?string $handle): void
    {
        $this->handle = $handle;
    }

    /**
     * Returns Description.
     * The product description
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     * The product description
     *
     * @required
     * @maps description
     */
    public function setDescription(string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Accounting Code.
     * E.g. Internal ID or SKU Number
     */
    public function getAccountingCode(): ?string
    {
        return $this->accountingCode;
    }

    /**
     * Sets Accounting Code.
     * E.g. Internal ID or SKU Number
     *
     * @maps accounting_code
     */
    public function setAccountingCode(?string $accountingCode): void
    {
        $this->accountingCode = $accountingCode;
    }

    /**
     * Returns Require Credit Card.
     * Deprecated value that can be ignored unless you have legacy hosted pages. For Public Signup Page
     * users, please read this attribute from under the signup page.
     */
    public function getRequireCreditCard(): ?bool
    {
        return $this->requireCreditCard;
    }

    /**
     * Sets Require Credit Card.
     * Deprecated value that can be ignored unless you have legacy hosted pages. For Public Signup Page
     * users, please read this attribute from under the signup page.
     *
     * @maps require_credit_card
     */
    public function setRequireCreditCard(?bool $requireCreditCard): void
    {
        $this->requireCreditCard = $requireCreditCard;
    }

    /**
     * Returns Price in Cents.
     * The product price, in integer cents
     */
    public function getPriceInCents(): int
    {
        return $this->priceInCents;
    }

    /**
     * Sets Price in Cents.
     * The product price, in integer cents
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
     * this product would renew every 30 days
     */
    public function getInterval(): int
    {
        return $this->interval;
    }

    /**
     * Sets Interval.
     * The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean
     * this product would renew every 30 days
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
     * A string representing the interval unit for this product, either month or day
     */
    public function getIntervalUnit(): string
    {
        return $this->intervalUnit;
    }

    /**
     * Sets Interval Unit.
     * A string representing the interval unit for this product, either month or day
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
     * The product trial price, in integer cents
     */
    public function getTrialPriceInCents(): ?int
    {
        return $this->trialPriceInCents;
    }

    /**
     * Sets Trial Price in Cents.
     * The product trial price, in integer cents
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
     * would mean this product trial would last 30 days.
     */
    public function getTrialInterval(): ?int
    {
        return $this->trialInterval;
    }

    /**
     * Sets Trial Interval.
     * The numerical trial interval. i.e. an interval of ‘30’ coupled with a trial_interval_unit of day
     * would mean this product trial would last 30 days.
     *
     * @maps trial_interval
     */
    public function setTrialInterval(?int $trialInterval): void
    {
        $this->trialInterval = $trialInterval;
    }

    /**
     * Returns Trial Interval Unit.
     * A string representing the trial interval unit for this product, either month or day
     */
    public function getTrialIntervalUnit(): ?string
    {
        if (count($this->trialIntervalUnit) == 0) {
            return null;
        }
        return $this->trialIntervalUnit['value'];
    }

    /**
     * Sets Trial Interval Unit.
     * A string representing the trial interval unit for this product, either month or day
     *
     * @maps trial_interval_unit
     * @factory \AdvancedBillingLib\Models\IntervalUnit::checkValue
     */
    public function setTrialIntervalUnit(?string $trialIntervalUnit): void
    {
        $this->trialIntervalUnit['value'] = $trialIntervalUnit;
    }

    /**
     * Unsets Trial Interval Unit.
     * A string representing the trial interval unit for this product, either month or day
     */
    public function unsetTrialIntervalUnit(): void
    {
        $this->trialIntervalUnit = [];
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
     * Returns Expiration Interval.
     * The numerical expiration interval. i.e. an expiration_interval of ‘30’ coupled with an
     * expiration_interval_unit of day would mean this product would expire after 30 days.
     */
    public function getExpirationInterval(): ?int
    {
        return $this->expirationInterval;
    }

    /**
     * Sets Expiration Interval.
     * The numerical expiration interval. i.e. an expiration_interval of ‘30’ coupled with an
     * expiration_interval_unit of day would mean this product would expire after 30 days.
     *
     * @maps expiration_interval
     */
    public function setExpirationInterval(?int $expirationInterval): void
    {
        $this->expirationInterval = $expirationInterval;
    }

    /**
     * Returns Expiration Interval Unit.
     * A string representing the expiration interval unit for this product, either month, day or never
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
     * A string representing the expiration interval unit for this product, either month, day or never
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
     * A string representing the expiration interval unit for this product, either month, day or never
     */
    public function unsetExpirationIntervalUnit(): void
    {
        $this->expirationIntervalUnit = [];
    }

    /**
     * Returns Auto Create Signup Page.
     */
    public function getAutoCreateSignupPage(): ?bool
    {
        return $this->autoCreateSignupPage;
    }

    /**
     * Sets Auto Create Signup Page.
     *
     * @maps auto_create_signup_page
     */
    public function setAutoCreateSignupPage(?bool $autoCreateSignupPage): void
    {
        $this->autoCreateSignupPage = $autoCreateSignupPage;
    }

    /**
     * Returns Tax Code.
     * A string representing the tax code related to the product type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     */
    public function getTaxCode(): ?string
    {
        return $this->taxCode;
    }

    /**
     * Sets Tax Code.
     * A string representing the tax code related to the product type. This is especially important when
     * using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.
     *
     * @maps tax_code
     */
    public function setTaxCode(?string $taxCode): void
    {
        $this->taxCode = $taxCode;
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
        $json['name']                         = $this->name;
        if (isset($this->handle)) {
            $json['handle']                   = $this->handle;
        }
        $json['description']                  = $this->description;
        if (isset($this->accountingCode)) {
            $json['accounting_code']          = $this->accountingCode;
        }
        if (isset($this->requireCreditCard)) {
            $json['require_credit_card']      = $this->requireCreditCard;
        }
        $json['price_in_cents']               = $this->priceInCents;
        $json['interval']                     = $this->interval;
        $json['interval_unit']                = IntervalUnit::checkValue($this->intervalUnit);
        if (isset($this->trialPriceInCents)) {
            $json['trial_price_in_cents']     = $this->trialPriceInCents;
        }
        if (isset($this->trialInterval)) {
            $json['trial_interval']           = $this->trialInterval;
        }
        if (!empty($this->trialIntervalUnit)) {
            $json['trial_interval_unit']      = IntervalUnit::checkValue($this->trialIntervalUnit['value']);
        }
        if (isset($this->trialType)) {
            $json['trial_type']               = $this->trialType;
        }
        if (isset($this->expirationInterval)) {
            $json['expiration_interval']      = $this->expirationInterval;
        }
        if (!empty($this->expirationIntervalUnit)) {
            $json['expiration_interval_unit'] =
                ExpirationIntervalUnit::checkValue(
                    $this->expirationIntervalUnit['value']
                );
        }
        if (isset($this->autoCreateSignupPage)) {
            $json['auto_create_signup_page']  = $this->autoCreateSignupPage;
        }
        if (isset($this->taxCode)) {
            $json['tax_code']                 = $this->taxCode;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
