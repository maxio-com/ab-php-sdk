<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestData;

final class InvoiceTestData
{
    public const LINE_ITEM_TITLE = 'test line item';
    public const LINE_ITEM_QUANTITY = '1000.0';
    public const LINE_ITEM_UNIT_PRICE = '1.0';
    public const ISSUE_DATE = 'Mon, 15 Jan 2023 16:23:45 GMT';
    public const PAYMENT_INSTRUCTIONS = 'Pay immediately!';
    public const INVOICE_ADDRESS_COUNTRY = 'test country';
    public const INVOICE_ADDRESS_ZIP = 'test zip';
    public const INVOICE_ADDRESS_STATE = 'test state';
    public const INVOICE_ADDRESS_CITY = 'test city';
    public const INVOICE_ADDRESS = 'test address';
    public const INVOICE_ADDRESS_PHONE = '123456789';
    public const INVOICE_ADDRESS_LAST_NAME = 'test last name';
    public const INVOICE_ADDRESS_FIRST_NAME = 'test first name';
}
