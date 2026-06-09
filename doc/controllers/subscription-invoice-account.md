# Subscription Invoice Account

```php
$subscriptionInvoiceAccountController = $client->getSubscriptionInvoiceAccountController();
```

## Class Name

`SubscriptionInvoiceAccountController`

## Methods

* [Read Account Balances](../../doc/controllers/subscription-invoice-account.md#read-account-balances)
* [Create Prepayment](../../doc/controllers/subscription-invoice-account.md#create-prepayment)
* [List Prepayments](../../doc/controllers/subscription-invoice-account.md#list-prepayments)
* [Issue Service Credit](../../doc/controllers/subscription-invoice-account.md#issue-service-credit)
* [Deduct Service Credit](../../doc/controllers/subscription-invoice-account.md#deduct-service-credit)
* [List Service Credits](../../doc/controllers/subscription-invoice-account.md#list-service-credits)
* [Refund Prepayment](../../doc/controllers/subscription-invoice-account.md#refund-prepayment)


# Read Account Balances

Returns the `balance_in_cents` of the Subscription's Pending Discount, Service Credit, and Prepayment accounts, as well as the sum of the Subscription's open, payable invoices.

```php
function readAccountBalances(int $subscriptionId): AccountBalances
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `int` | Template, Required | The Chargify id of the subscription. |

## Response Type

**200**: OK

[`AccountBalances`](../../doc/models/account-balances.md)

## Example Usage

```php
$subscriptionId = 222;

$subscriptionInvoiceAccountController = $client->getSubscriptionInvoiceAccountController();

try {
    $result = $subscriptionInvoiceAccountController->readAccountBalances($subscriptionId);
    echo 'AccountBalances:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```


# Create Prepayment

Creates a prepayment for a subscription.

In order to specify a prepayment made against a subscription, specify the `amount, memo, details, method`.

When the `method` specified is `"credit_card_on_file"`, the prepayment amount will be collected using the default credit card payment profile and applied to the prepayment account balance.  This is especially useful for manual replenishment of prepaid subscriptions.

Note that passing `amount_in_cents` is now allowed.

## 3D Secure (3DS) Authentication post-authentication flow

When a payment requires 3DS Authentication to adhere to Strong Customer Authentication (SCA), the request enters a post-authentication flow where a 422 Unprocessable Entity status is returned with an action_link that will direct the customer through 3DS Authentication.

See the [3D Secure Post-Authentication Flow](https://docs.maxio.com/hc/en-us/articles/44277749524365-3D-Secure-Post-Authentication-Flow) article in the product documentation to learn how to manage the redirect flow.

```php
function createPrepayment(int $subscriptionId, ?CreatePrepaymentRequest $body = null): CreatePrepaymentResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `int` | Template, Required | The Chargify id of the subscription. |
| `body` | [`?CreatePrepaymentRequest`](../../doc/models/create-prepayment-request.md) | Body, Optional | - |

## Response Type

**201**: Created

[`CreatePrepaymentResponse`](../../doc/models/create-prepayment-response.md)

## Example Usage

```php
$subscriptionId = 222;

$body = CreatePrepaymentRequestBuilder::init(
    CreatePrepaymentBuilder::init(
        100,
        'John Doe signup for $100',
        'Signup for $100',
        CreatePrepaymentMethod::CHECK
    )->build()
)->build();

$subscriptionInvoiceAccountController = $client->getSubscriptionInvoiceAccountController();

try {
    $result = $subscriptionInvoiceAccountController->createPrepayment(
        $subscriptionId,
        $body
    );
    echo 'CreatePrepaymentResponse:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Example Response *(as JSON)*

```json
{
  "prepayment": {
    "id": 1,
    "subscription_id": 1,
    "amount_in_cents": 10000,
    "memo": "John Doe - Prepayment",
    "created_at": "2020-07-31T05:52:32-04:00",
    "starting_balance_in_cents": 0,
    "ending_balance_in_cents": -10000
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Unprocessable Entity (WebDAV) | `ApiException` |


# List Prepayments

Lists a subscription's prepayments.

```php
function listPrepayments(array $options): PrepaymentsResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `int` | Template, Required | The Chargify id of the subscription. |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br><br>**Default**: `1`<br><br>**Constraints**: `>= 1` |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request. Default value is 20. The maximum allowed values is 200; any per_page value over 200 will be changed to 200.<br>Use in query `per_page=200`.<br><br>**Default**: `20`<br><br>**Constraints**: `<= 200` |
| `filter` | [`?ListPrepaymentsFilter`](../../doc/models/list-prepayments-filter.md) | Query, Optional | Filter to use for List Prepayments operations |

## Response Type

**200**: OK

[`PrepaymentsResponse`](../../doc/models/prepayments-response.md)

## Example Usage

```php
$collect = [
    'subscriptionId' => 222,
    'page' => 1,
    'perPage' => 50,
    'filter' => ListPrepaymentsFilterBuilder::init()
        ->dateField(ListPrepaymentDateField::CREATED_AT)
        ->startDate(DateTimeHelper::fromSimpleDate('2024-01-01'))
        ->endDate(DateTimeHelper::fromSimpleDate('2024-01-31'))
        ->build()
];

$subscriptionInvoiceAccountController = $client->getSubscriptionInvoiceAccountController();

try {
    $result = $subscriptionInvoiceAccountController->listPrepayments($collect);
    echo 'PrepaymentsResponse:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Example Response *(as JSON)*

```json
{
  "prepayments": [
    {
      "id": 17,
      "subscription_id": 3558750,
      "amount_in_cents": 2000,
      "remaining_amount_in_cents": 1100,
      "refunded_amount_in_cents": 0,
      "external": true,
      "memo": "test",
      "details": "test details",
      "payment_type": "cash",
      "created_at": "2022-01-18T22:45:41+11:00"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# Issue Service Credit

Adds a service credit to the subscription in the specified amount. The credit is subsequently applied to the next generated invoice.

```php
function issueServiceCredit(int $subscriptionId, ?IssueServiceCreditRequest $body = null): ServiceCredit
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `int` | Template, Required | The Chargify id of the subscription. |
| `body` | [`?IssueServiceCreditRequest`](../../doc/models/issue-service-credit-request.md) | Body, Optional | - |

## Response Type

**201**: Created

[`ServiceCredit`](../../doc/models/service-credit.md)

## Example Usage

```php
$subscriptionId = 222;

$body = IssueServiceCreditRequestBuilder::init(
    IssueServiceCreditBuilder::init(
        '1'
    )->build()
)->build();

$subscriptionInvoiceAccountController = $client->getSubscriptionInvoiceAccountController();

try {
    $result = $subscriptionInvoiceAccountController->issueServiceCredit(
        $subscriptionId,
        $body
    );
    echo 'ServiceCredit:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Example Response *(as JSON)*

```json
{
  "id": 101,
  "amount_in_cents": 1000,
  "ending_balance_in_cents": 2000,
  "entry_type": "Credit",
  "memo": "Credit to group account"
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Unprocessable Entity (WebDAV) | `ApiException` |


# Deduct Service Credit

Deducts a service credit from the subscription in the specified amount. The credit amount being deducted must be equal to or less than the current credit balance.

```php
function deductServiceCredit(int $subscriptionId, ?DeductServiceCreditRequest $body = null): void
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `int` | Template, Required | The Chargify id of the subscription. |
| `body` | [`?DeductServiceCreditRequest`](../../doc/models/deduct-service-credit-request.md) | Body, Optional | - |

## Response Type

**201**: OK

`void`

## Example Usage

```php
$subscriptionId = 222;

$body = DeductServiceCreditRequestBuilder::init(
    DeductServiceCreditBuilder::init(
        '1'
    )
        ->memo('Deduction')
        ->build()
)->build();

$subscriptionInvoiceAccountController = $client->getSubscriptionInvoiceAccountController();

try {
    $subscriptionInvoiceAccountController->deductServiceCredit(
        $subscriptionId,
        $body
    );
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Unprocessable Entity (WebDAV) | `ApiException` |


# List Service Credits

Lists a subscription's service credits.

```php
function listServiceCredits(
    int $subscriptionId,
    ?int $page = 1,
    ?int $perPage = 20,
    ?string $direction = null
): ListServiceCreditsResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `int` | Template, Required | The Chargify id of the subscription. |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br><br>**Default**: `1`<br><br>**Constraints**: `>= 1` |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request. Default value is 20. The maximum allowed values is 200; any per_page value over 200 will be changed to 200.<br>Use in query `per_page=200`.<br><br>**Default**: `20`<br><br>**Constraints**: `<= 200` |
| `direction` | [`?string(SortingDirection)`](../../doc/models/sorting-direction.md) | Query, Optional | Controls the order in which results are returned.<br>Use in query `direction=asc`. |

## Response Type

**200**: OK

[`ListServiceCreditsResponse`](../../doc/models/list-service-credits-response.md)

## Example Usage

```php
$subscriptionId = 222;

$page = 1;

$perPage = 50;

$subscriptionInvoiceAccountController = $client->getSubscriptionInvoiceAccountController();

try {
    $result = $subscriptionInvoiceAccountController->listServiceCredits(
        $subscriptionId,
        $page,
        $perPage
    );
    echo 'ListServiceCreditsResponse:';
    var_dump($result);
} catch (ErrorListResponseException $exp) {
    echo 'Caught ErrorListResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Example Response *(as JSON)*

```json
{
  "service_credits": [
    {
      "id": 68,
      "amount_in_cents": 2200,
      "ending_balance_in_cents": 1100,
      "entry_type": "Debit",
      "memo": "Service credit memo",
      "invoice_uid": "inv_brntdvmmqxc3j",
      "remaining_balance_in_cents": 1100,
      "created_at": "2025-04-01T09:54:49-04:00"
    },
    {
      "id": 67,
      "amount_in_cents": 3300,
      "ending_balance_in_cents": 3300,
      "entry_type": "Credit",
      "memo": "Service credit memo",
      "invoice_uid": null,
      "remaining_balance_in_cents": 1100,
      "created_at": "2025-03-05T16:06:08-05:00"
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |


# Refund Prepayment

Refunds a prepayment applied to a subscription, either fully or partially. The `prepayment_id` will be the account transaction ID of the original payment. The prepayment must have some amount remaining in order to be refunded.

The amount may be passed either as a decimal, with `amount`, or an integer in cents, with `amount_in_cents`.

```php
function refundPrepayment(
    int $subscriptionId,
    int $prepaymentId,
    ?RefundPrepaymentRequest $body = null
): PrepaymentResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `subscriptionId` | `int` | Template, Required | The Chargify id of the subscription. |
| `prepaymentId` | `int` | Template, Required | id of prepayment |
| `body` | [`?RefundPrepaymentRequest`](../../doc/models/refund-prepayment-request.md) | Body, Optional | - |

## Response Type

**201**: Created

[`PrepaymentResponse`](../../doc/models/prepayment-response.md)

## Example Usage

```php
$subscriptionId = 222;

$prepaymentId = 228;

$subscriptionInvoiceAccountController = $client->getSubscriptionInvoiceAccountController();

try {
    $result = $subscriptionInvoiceAccountController->refundPrepayment(
        $subscriptionId,
        $prepaymentId
    );
    echo 'PrepaymentResponse:';
    var_dump($result);
} catch (RefundPrepaymentBaseErrorsResponseException $exp) {
    echo 'Caught RefundPrepaymentBaseErrorsResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 400 | Bad Request | [`RefundPrepaymentBaseErrorsResponseException`](../../doc/models/refund-prepayment-base-errors-response-exception.md) |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity | `ApiException` |

