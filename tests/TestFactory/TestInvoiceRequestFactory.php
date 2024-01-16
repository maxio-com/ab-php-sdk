<?php

declare(strict_types=1);

namespace AdvancedBillingLib\Tests\TestFactory;

use AdvancedBillingLib\Models\Builders\CreateInvoiceAddressBuilder;
use AdvancedBillingLib\Models\Builders\CreateInvoiceBuilder;
use AdvancedBillingLib\Models\Builders\CreateInvoiceCouponBuilder;
use AdvancedBillingLib\Models\Builders\CreateInvoiceRequestBuilder;
use AdvancedBillingLib\Models\Builders\InvoiceLineItemBuilder;
use AdvancedBillingLib\Models\Coupon;
use AdvancedBillingLib\Models\CreateInvoice;
use AdvancedBillingLib\Models\CreateInvoiceAddress;
use AdvancedBillingLib\Models\CreateInvoiceCoupon;
use AdvancedBillingLib\Models\CreateInvoiceRequest;
use AdvancedBillingLib\Models\InvoiceLineItem;
use AdvancedBillingLib\Tests\TestData\InvoiceTestData;
use DateTime;
use DateTimeInterface;

final class TestInvoiceRequestFactory
{
    /**
     * @param array<int, $coupons
     */
    public function createCreateInvoiceRequestWithCoupons(array $coupons): CreateInvoiceRequest
    {
        $request = $this->createCreateInvoiceRequest();
        $request->getInvoice()->setCoupons($this->createInvoiceCoupons($coupons));

        return $request;
    }

    public function createCreateInvoiceRequest(): CreateInvoiceRequest
    {
        return CreateInvoiceRequestBuilder::init($this->createCreateInvoice())
            ->build();
    }

    private function createCreateInvoice(): CreateInvoice
    {
        return CreateInvoiceBuilder::init()
            ->lineItems([$this->createLineItem()])
            ->issueDate(DateTime::createFromFormat(DateTimeInterface::RFC1123, InvoiceTestData::ISSUE_DATE))
            ->paymentInstructions(InvoiceTestData::PAYMENT_INSTRUCTIONS)
            ->sellerAddress($this->createInvoiceAddress())
            ->billingAddress($this->createInvoiceAddress())
            ->shippingAddress($this->createInvoiceAddress())
            ->build();
    }

    private function createLineItem(): InvoiceLineItem
    {
        return InvoiceLineItemBuilder::init()
            ->title(InvoiceTestData::LINE_ITEM_TITLE)
            ->quantity(InvoiceTestData::LINE_ITEM_QUANTITY)
            ->unitPrice(InvoiceTestData::LINE_ITEM_UNIT_PRICE)
            ->build();
    }

    private function createInvoiceAddress(): CreateInvoiceAddress
    {
        return CreateInvoiceAddressBuilder::init()
            ->firstName(InvoiceTestData::INVOICE_ADDRESS_FIRST_NAME)
            ->lastName(InvoiceTestData::INVOICE_ADDRESS_LAST_NAME)
            ->phone(InvoiceTestData::INVOICE_ADDRESS_PHONE)
            ->address(InvoiceTestData::INVOICE_ADDRESS)
            ->address2(null)
            ->city(InvoiceTestData::INVOICE_ADDRESS_CITY)
            ->state(InvoiceTestData::INVOICE_ADDRESS_STATE)
            ->zip(InvoiceTestData::INVOICE_ADDRESS_ZIP)
            ->country(InvoiceTestData::INVOICE_ADDRESS_COUNTRY)
            ->build();
    }

    /**
     * @param array<int, Coupon> $coupons
     * @return array<int, CreateInvoiceCoupon>
     */
    private function createInvoiceCoupons(array $coupons): array
    {
        return array_map(
            static fn(Coupon $coupon): CreateInvoiceCoupon => CreateInvoiceCouponBuilder::init()
                ->code($coupon->getCode())
                ->productFamilyId($coupon->getProductFamilyId())
                ->build(),
            $coupons
        );
    }
}
