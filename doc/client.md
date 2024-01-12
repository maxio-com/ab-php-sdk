
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `subdomain` | `string` | The subdomain for your Chargify site.<br>*Default*: `'subdomain'` |
| `domain` | `string` | The Chargify server domain.<br>*Default*: `'chargify.com'` |
| `environment` | Environment | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `30` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `basicAuthUserName` | `string` | The username to use with basic authentication |
| `basicAuthPassword` | `string` | The password to use with basic authentication |

The API client can be initialized as follows:

```php
$client = AdvancedBillingClientBuilder::init()
    ->basicAuthUserName('BasicAuthUserName')
    ->basicAuthPassword('BasicAuthPassword')
    ->environment('production')
    ->subdomain('subdomain')
    ->domain('chargify.com')
    ->build();
```

## Maxio Advanced Billing Client

The gateway for the SDK. This class acts as a factory for the Controllers and also holds the configuration of the SDK.

## Controllers

| Name | Description |
|  --- | --- |
| getAPIExportsController() | Gets APIExportsController |
| getAdvanceInvoiceController() | Gets AdvanceInvoiceController |
| getBillingPortalController() | Gets BillingPortalController |
| getCouponsController() | Gets CouponsController |
| getComponentsController() | Gets ComponentsController |
| getCustomersController() | Gets CustomersController |
| getCustomFieldsController() | Gets CustomFieldsController |
| getEventsController() | Gets EventsController |
| getEventsBasedBillingSegmentsController() | Gets EventsBasedBillingSegmentsController |
| getInsightsController() | Gets InsightsController |
| getInvoicesController() | Gets InvoicesController |
| getOffersController() | Gets OffersController |
| getPaymentProfilesController() | Gets PaymentProfilesController |
| getProductFamiliesController() | Gets ProductFamiliesController |
| getProductsController() | Gets ProductsController |
| getProductPricePointsController() | Gets ProductPricePointsController |
| getProformaInvoicesController() | Gets ProformaInvoicesController |
| getReasonCodesController() | Gets ReasonCodesController |
| getReferralCodesController() | Gets ReferralCodesController |
| getSalesCommissionsController() | Gets SalesCommissionsController |
| getSitesController() | Gets SitesController |
| getSubscriptionsController() | Gets SubscriptionsController |
| getSubscriptionComponentsController() | Gets SubscriptionComponentsController |
| getSubscriptionGroupsController() | Gets SubscriptionGroupsController |
| getSubscriptionGroupInvoiceAccountController() | Gets SubscriptionGroupInvoiceAccountController |
| getSubscriptionGroupStatusController() | Gets SubscriptionGroupStatusController |
| getSubscriptionInvoiceAccountController() | Gets SubscriptionInvoiceAccountController |
| getSubscriptionNotesController() | Gets SubscriptionNotesController |
| getSubscriptionProductsController() | Gets SubscriptionProductsController |
| getSubscriptionStatusController() | Gets SubscriptionStatusController |
| getWebhooksController() | Gets WebhooksController |

