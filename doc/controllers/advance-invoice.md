# Advance Invoice

```php
$advanceInvoiceController = $client->getAdvanceInvoiceController();
```

## Class Name

`AdvanceInvoiceController`

## Methods

* [Issue Advance Invoice](../../doc/controllers/advance-invoice.md#issue-advance-invoice)
* [Read Advance Invoice](../../doc/controllers/advance-invoice.md#read-advance-invoice)
* [Void Advance Invoice](../../doc/controllers/advance-invoice.md#void-advance-invoice)


# Issue Advance Invoice

Issues an invoice in advance for a subscription's next renewal date. For the most part, advance invoices function like any other invoice, except they are issued early and have special behavior upon being voided. For more information on advance invoices, including eligibility for generating one, see [Issue Invoice In Advance](https://maxio.zendesk.com/hc/en-us/articles/24252026404749-Issue-Invoice-In-Advance).

A subscription can only have one advance invoice per billing period. Attempting to issue an advance invoice when one already exists returns an error.

Regeneration of the invoice can be forced with the params `force: true`, which voids an advance invoice if one exists and generates a new one. If no advance invoice exists, a new one is generated.

Consider using either the create or preview endpoints for proforma invoices to preview this advance invoice before using this endpoint to generate it.

```php
function issueAdvanceInvoice(int $subscriptionId, ?IssueAdvanceInvoiceRequest $body = null): Invoice
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `int` | Template, Required | The Chargify id of the subscription. |
| `body` | [`?IssueAdvanceInvoiceRequest`](../../doc/models/issue-advance-invoice-request.md) | Body, Optional | - |

## Response Type

**201**: Created

[`Invoice`](../../doc/models/invoice.md)

## Example Usage

```php
$subscriptionId = 222;

$body = IssueAdvanceInvoiceRequestBuilder::init()
    ->force(true)
    ->build();

$advanceInvoiceController = $client->getAdvanceInvoiceController();

try {
    $result = $advanceInvoiceController->issueAdvanceInvoice(
        $subscriptionId,
        $body
    );
    echo 'Invoice:';
    var_dump($result);
} catch (ErrorListResponseException $exp) {
    echo 'Caught ErrorListResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |


# Read Advance Invoice

Returns the advance invoice generated for a subscription's upcoming renewal. There can only be one advance invoice per subscription per billing cycle.

```php
function readAdvanceInvoice(int $subscriptionId): Invoice
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `int` | Template, Required | The Chargify id of the subscription. |

## Response Type

**200**: OK

[`Invoice`](../../doc/models/invoice.md)

## Example Usage

```php
$subscriptionId = 222;

$advanceInvoiceController = $client->getAdvanceInvoiceController();

try {
    $result = $advanceInvoiceController->readAdvanceInvoice($subscriptionId);
    echo 'Invoice:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# Void Advance Invoice

Voids a subscription's existing advance invoice. Once voided, it can later be regenerated if desired.

A `reason` is required to void, and the invoice must have an open status. Voiding causes any prepayments and credits that were applied to the invoice to be returned to the subscription.

For a full overview of the impact of voiding, see [Invoice](../../doc/models/invoice.md).

```php
function voidAdvanceInvoice(int $subscriptionId, ?VoidInvoiceRequest $body = null): Invoice
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `int` | Template, Required | The Chargify id of the subscription. |
| `body` | [`?VoidInvoiceRequest`](../../doc/models/void-invoice-request.md) | Body, Optional | - |

## Response Type

**201**: Created

[`Invoice`](../../doc/models/invoice.md)

## Example Usage

```php
$subscriptionId = 222;

$advanceInvoiceController = $client->getAdvanceInvoiceController();

try {
    $result = $advanceInvoiceController->voidAdvanceInvoice($subscriptionId);
    echo 'Invoice:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |

