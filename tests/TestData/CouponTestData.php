<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestData;

use AdvancedBillingLib\Models\CompoundingStrategy;
use AdvancedBillingLib\Models\RecurringScheme;

final class CouponTestData
{
    public const DESCRIPTION = 'test description';
    public const RECURRING = false;
    public const NAME = 'test coupon';
    public const CODE_ONE = 'TEST_CODE';
    public const PERCENTAGE = '100';
    public const STACKABLE = true;
    public const COMPOUNDING_STRATEGY = CompoundingStrategy::FULLPRICE;
    public const AMOUNT = null;
    public const AMOUNT_IN_CENTS = null;
    public const END_DATE = null;
    public const RECURRING_SCHEME = RecurringScheme::DO_NOT_RECUR;
    public const RESTRICTIONS = [];
    public const APPLY_ON_CANCEL_AT_END_OF_PERIOD = false;
    public const EXCLUDE_MID_PERIOD_ALLOCATIONS = false;
    public const DISCOUNT_TYPE = 'percent';
    public const CONVERSION_LIMIT = null;
    public const ARCHIVED_AT = null;
    public const ALLOW_NEGATIVE_BALANCE = false;
    public const DURATION_INTERVAL_SPAN = '_';
    public const DURATION_INTERVAL_UNIT = null;
    public const DURATION_INTERVAL = null;
    public const DURATION_PERIOD_COUNT = null;
    public const NOT_EXISTING_COUPON_ID = 1000000;
    public const NOT_EXISTING_COUPON_CODE = 'Non existing coupon code';
}
