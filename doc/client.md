
# Client Class Documentation

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| site | `string` | The subdomain for your Advanced Billing site.<br>*Default*: `'subdomain'` |
| environment | `Environment` | The API environment. <br> **Default: `Environment.US`** |
| timeout | `int` | Timeout for API calls in seconds.<br>*Default*: `120` |
| enableRetries | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| numberOfRetries | `int` | The number of retries to make.<br>*Default*: `0` |
| retryInterval | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| backOffFactor | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| maximumRetryWaitTime | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| retryOnTimeout | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| httpStatusCodesToRetry | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| httpMethodsToRetry | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| proxyConfiguration | [`ProxyConfigurationBuilder`](../doc/proxy-configuration-builder.md) | Represents the proxy configurations for API calls |
| basicAuthCredentials | [`BasicAuthCredentials`](auth/basic-authentication.md) | The Credentials Setter for Basic Authentication |

The API client can be initialized as follows:

```php
use AdvancedBillingLib\Environment;
use AdvancedBillingLib\Authentication\BasicAuthCredentialsBuilder;
use AdvancedBillingLib\AdvancedBillingClientBuilder;

$client = AdvancedBillingClientBuilder::init()
    ->basicAuthCredentials(
        BasicAuthCredentialsBuilder::init(
            'BasicAuthUserName',
            'BasicAuthPassword'
        )
    )
    ->environment(Environment::US)
    ->site('subdomain')
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
| getComponentPricePointsController() | Gets ComponentPricePointsController |
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

