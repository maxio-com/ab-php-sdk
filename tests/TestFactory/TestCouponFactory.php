<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CouponBuilder;
use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Tests\TestData\CouponTestData;
use DateTime;

final class TestCouponFactory
{
    public function create(
        int $id,
        int $productFamilyId,
        string $productFamilyName,
        DateTime $createdAt,
        DateTime $updatedAt,
        DateTime $startDate
    ): Coupon
    {
        return CouponBuilder::init()
            ->id($id)
            ->name(CouponTestData::NAME)
            ->amount(CouponTestData::AMOUNT)
            ->amountInCents(CouponTestData::AMOUNT_IN_CENTS)
            ->productFamilyId($productFamilyId)
            ->productFamilyName($productFamilyName)
            ->code(CouponTestData::CODE_ONE)
            ->description(CouponTestData::DESCRIPTION)
            ->createdAt($createdAt)
            ->updatedAt($updatedAt)
            ->startDate($startDate)
            ->endDate(CouponTestData::END_DATE)
            ->percentage(CouponTestData::PERCENTAGE)
            ->recurring(CouponTestData::RECURRING)
            ->recurringScheme(CouponTestData::RECURRING_SCHEME)
            ->durationPeriodCount(CouponTestData::DURATION_PERIOD_COUNT)
            ->durationInterval(CouponTestData::DURATION_INTERVAL)
            ->durationIntervalUnit(CouponTestData::DURATION_INTERVAL_UNIT)
            ->durationIntervalSpan(CouponTestData::DURATION_INTERVAL_SPAN)
            ->allowNegativeBalance(CouponTestData::ALLOW_NEGATIVE_BALANCE)
            ->archivedAt(CouponTestData::ARCHIVED_AT)
            ->conversionLimit(CouponTestData::CONVERSION_LIMIT)
            ->stackable(CouponTestData::STACKABLE)
            ->compoundingStrategy(CouponTestData::COMPOUNDING_STRATEGY)
            ->discountType(CouponTestData::DISCOUNT_TYPE)
            ->excludeMidPeriodAllocations(CouponTestData::EXCLUDE_MID_PERIOD_ALLOCATIONS)
            ->applyOnCancelAtEndOfPeriod(CouponTestData::APPLY_ON_CANCEL_AT_END_OF_PERIOD)
            ->applyOnSubscriptionExpiration(CouponTestData::APPLY_ON_SUBSCRIPTION_EXPIRATION)
            ->couponRestrictions(CouponTestData::RESTRICTIONS)
            ->build();
    }
}
