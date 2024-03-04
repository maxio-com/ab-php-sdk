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

class CreateOrUpdateFlatAmountCoupon implements \JsonSerializable
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $code;

    /**
     * @var string|null
     */
    private $description;

    /**
     * @var int
     */
    private $amountInCents;

    /**
     * @var bool|null
     */
    private $allowNegativeBalance;

    /**
     * @var bool|null
     */
    private $recurring;

    /**
     * @var \DateTime|null
     */
    private $endDate;

    /**
     * @var string|null
     */
    private $productFamilyId;

    /**
     * @var bool|null
     */
    private $stackable;

    /**
     * @var string|null
     */
    private $compoundingStrategy;

    /**
     * @var bool|null
     */
    private $excludeMidPeriodAllocations;

    /**
     * @var bool|null
     */
    private $applyOnCancelAtEndOfPeriod;

    /**
     * @var bool|null
     */
    private $applyOnSubscriptionExpiration;

    /**
     * @param string $name
     * @param string $code
     * @param int $amountInCents
     */
    public function __construct(string $name, string $code, int $amountInCents)
    {
        $this->name = $name;
        $this->code = $code;
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Name.
     * the name of the coupon
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * Sets Name.
     * the name of the coupon
     *
     * @required
     * @maps name
     */
    public function setName(string $name): void
    {
        $this->name = $name;
    }

    /**
     * Returns Code.
     * may contain uppercase alphanumeric characters and these special characters (which allow for email
     * addresses to be used): “%”, “@”, “+”, “-”, “_”, and “.”
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * Sets Code.
     * may contain uppercase alphanumeric characters and these special characters (which allow for email
     * addresses to be used): “%”, “@”, “+”, “-”, “_”, and “.”
     *
     * @required
     * @maps code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * Returns Description.
     */
    public function getDescription(): ?string
    {
        return $this->description;
    }

    /**
     * Sets Description.
     *
     * @maps description
     */
    public function setDescription(?string $description): void
    {
        $this->description = $description;
    }

    /**
     * Returns Amount in Cents.
     */
    public function getAmountInCents(): int
    {
        return $this->amountInCents;
    }

    /**
     * Sets Amount in Cents.
     *
     * @required
     * @maps amount_in_cents
     */
    public function setAmountInCents(int $amountInCents): void
    {
        $this->amountInCents = $amountInCents;
    }

    /**
     * Returns Allow Negative Balance.
     */
    public function getAllowNegativeBalance(): ?bool
    {
        return $this->allowNegativeBalance;
    }

    /**
     * Sets Allow Negative Balance.
     *
     * @maps allow_negative_balance
     */
    public function setAllowNegativeBalance(?bool $allowNegativeBalance): void
    {
        $this->allowNegativeBalance = $allowNegativeBalance;
    }

    /**
     * Returns Recurring.
     */
    public function getRecurring(): ?bool
    {
        return $this->recurring;
    }

    /**
     * Sets Recurring.
     *
     * @maps recurring
     */
    public function setRecurring(?bool $recurring): void
    {
        $this->recurring = $recurring;
    }

    /**
     * Returns End Date.
     */
    public function getEndDate(): ?\DateTime
    {
        return $this->endDate;
    }

    /**
     * Sets End Date.
     *
     * @maps end_date
     * @factory \AdvancedBillingLib\Utils\DateTimeHelper::fromRfc3339DateTime
     */
    public function setEndDate(?\DateTime $endDate): void
    {
        $this->endDate = $endDate;
    }

    /**
     * Returns Product Family Id.
     */
    public function getProductFamilyId(): ?string
    {
        return $this->productFamilyId;
    }

    /**
     * Sets Product Family Id.
     *
     * @maps product_family_id
     */
    public function setProductFamilyId(?string $productFamilyId): void
    {
        $this->productFamilyId = $productFamilyId;
    }

    /**
     * Returns Stackable.
     */
    public function getStackable(): ?bool
    {
        return $this->stackable;
    }

    /**
     * Sets Stackable.
     *
     * @maps stackable
     */
    public function setStackable(?bool $stackable): void
    {
        $this->stackable = $stackable;
    }

    /**
     * Returns Compounding Strategy.
     */
    public function getCompoundingStrategy(): ?string
    {
        return $this->compoundingStrategy;
    }

    /**
     * Sets Compounding Strategy.
     *
     * @maps compounding_strategy
     * @factory \AdvancedBillingLib\Models\CompoundingStrategy::checkValue
     */
    public function setCompoundingStrategy(?string $compoundingStrategy): void
    {
        $this->compoundingStrategy = $compoundingStrategy;
    }

    /**
     * Returns Exclude Mid Period Allocations.
     */
    public function getExcludeMidPeriodAllocations(): ?bool
    {
        return $this->excludeMidPeriodAllocations;
    }

    /**
     * Sets Exclude Mid Period Allocations.
     *
     * @maps exclude_mid_period_allocations
     */
    public function setExcludeMidPeriodAllocations(?bool $excludeMidPeriodAllocations): void
    {
        $this->excludeMidPeriodAllocations = $excludeMidPeriodAllocations;
    }

    /**
     * Returns Apply on Cancel at End of Period.
     */
    public function getApplyOnCancelAtEndOfPeriod(): ?bool
    {
        return $this->applyOnCancelAtEndOfPeriod;
    }

    /**
     * Sets Apply on Cancel at End of Period.
     *
     * @maps apply_on_cancel_at_end_of_period
     */
    public function setApplyOnCancelAtEndOfPeriod(?bool $applyOnCancelAtEndOfPeriod): void
    {
        $this->applyOnCancelAtEndOfPeriod = $applyOnCancelAtEndOfPeriod;
    }

    /**
     * Returns Apply on Subscription Expiration.
     */
    public function getApplyOnSubscriptionExpiration(): ?bool
    {
        return $this->applyOnSubscriptionExpiration;
    }

    /**
     * Sets Apply on Subscription Expiration.
     *
     * @maps apply_on_subscription_expiration
     */
    public function setApplyOnSubscriptionExpiration(?bool $applyOnSubscriptionExpiration): void
    {
        $this->applyOnSubscriptionExpiration = $applyOnSubscriptionExpiration;
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
        $json['name']                                 = $this->name;
        $json['code']                                 = $this->code;
        if (isset($this->description)) {
            $json['description']                      = $this->description;
        }
        $json['amount_in_cents']                      = $this->amountInCents;
        if (isset($this->allowNegativeBalance)) {
            $json['allow_negative_balance']           = $this->allowNegativeBalance;
        }
        if (isset($this->recurring)) {
            $json['recurring']                        = $this->recurring;
        }
        if (isset($this->endDate)) {
            $json['end_date']                         = DateTimeHelper::toRfc3339DateTime($this->endDate);
        }
        if (isset($this->productFamilyId)) {
            $json['product_family_id']                = $this->productFamilyId;
        }
        if (isset($this->stackable)) {
            $json['stackable']                        = $this->stackable;
        }
        if (isset($this->compoundingStrategy)) {
            $json['compounding_strategy']             = CompoundingStrategy::checkValue($this->compoundingStrategy);
        }
        if (isset($this->excludeMidPeriodAllocations)) {
            $json['exclude_mid_period_allocations']   = $this->excludeMidPeriodAllocations;
        }
        if (isset($this->applyOnCancelAtEndOfPeriod)) {
            $json['apply_on_cancel_at_end_of_period'] = $this->applyOnCancelAtEndOfPeriod;
        }
        if (isset($this->applyOnSubscriptionExpiration)) {
            $json['apply_on_subscription_expiration'] = $this->applyOnSubscriptionExpiration;
        }
        $json = array_merge($json, $this->additionalProperties);

        return (!$asArrayWhenEmpty && empty($json)) ? new stdClass() : $json;
    }
}
