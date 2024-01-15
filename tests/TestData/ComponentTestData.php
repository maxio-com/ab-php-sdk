<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestData;

use AdvancedBillingLib\Models\ComponentKind;
use AdvancedBillingLib\Models\ComponentKindPath;
use AdvancedBillingLib\Models\PricingScheme;

final class ComponentTestData
{
    public const QUANTITY_BASED_COMPONENT_KIND = ComponentKind::QUANTITY_BASED_COMPONENT;
    public const QUANTITY_BASED_COMPONENT_KIND_PATH = ComponentKindPath::QUANTITY_BASED_COMPONENTS;
    public const ON_OFF_COMPONENT_KIND_PATH = ComponentKindPath::ON_OFF_COMPONENTS;
    public const NAME = 'test component';
    public const UNIT_NAME = 'test unit component';
    public const ONN_OFF_COMPONENT_UNIT_NAME = 'on/off';
    public const PRICING_SCHEME = PricingScheme::STAIRSTEP;
    public const NO_PRICING_SCHEME = null;
    public const COMPONENT_PRICE_STARTING_QUANTITY = 1;
    public const COMPONENT_UNIT_PRICE = '1.0';
    public const HANDLE = null;
    public const PRICE_PER_UNIT_IN_CENTS = null;
    public const ARCHIVED = false;
    public const ACCOUNTING_CODE = null;
    public const USE_SITE_EXCHANGE_RATE = true;
    public const ITEM_CATEGORY = null;
    public const ALLOW_FRACTIONAL_QUANTITIES = false;
    public const HIDE_DATE_RANGE_ON_INVOICE = false;
    public const ARCHIVED_AT = null;
    public const DOWNGRADE_CREDIT = null;
    public const UPGRADE_CHARGE = null;
    public const RECURRING = true;
    public const TAX_CODE = null;
    public const PRICE_POINT_COUNT = 1;
    public const DESCRIPTION = null;
    public const TAXABLE = false;
    public const UNIT_PRICE = null;
    public const COMPONENT_PRICE_ENDING_QUANTITY = null;
    public const FORMATTED_UNIT_PRICE = '$1.00';
    public const COMPONENT_PRICE_SEGMENT_ID = null;
    public const ON_OFF_COMPONENT_UNIT_PRICE = '1.0';
    public const ON_OFF_COMPONENT_KIND = ComponentKind::ON_OFF_COMPONENT;
}
