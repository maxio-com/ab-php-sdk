<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestData;

use AdvancedBillingLib\Models\MetafieldInput;

final class CustomFieldsTestData
{
    public const INPUT_TYPE_TEXT = MetafieldInput::TEXT;
    public const INPUT_TYPE_DROPDOWN = MetafieldInput::DROPDOWN;
    public const INPUT_TYPE_RADIO = MetafieldInput::RADIO;
    public const METADATA_NAME = 'test metadata';
    public const METADATA_VALUE = 'test metadata';
    public const METADATA_VALUE_TWO = 'test metadata 2';
}
