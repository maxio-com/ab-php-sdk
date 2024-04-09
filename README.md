
# Getting Started with Maxio Advanced Billing

## Introduction

Maxio Advanced Billing (formerly Chargify) provides an HTTP-based API that conforms to the principles of REST.
One of the many reasons to use Advanced Billing is the immense feature set and surrounding community [client libraries](page:development-tools/client-libraries).
The Maxio API returns JSON responses as the primary and recommended format, but XML is also provided as a backwards compatible option for Merchants who require it.

### Steps to make your first Maxio Advanced Billing API call

1. [Sign-up](https://app.chargify.com/signup/maxio-billing-sandbox) or [log-in](https://app.chargify.com/login.html) to your [test site](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405553861773-Testing-Intro) account.
2. [Setup and configure authentication](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405281550477-API-Keys#api) credentials.
3. Submit your API request and try it out.
4. Verify results through response.
5. Test our integrations.

We strongly suggest exploring the developer portal, our [integrations](https://www.maxio.com/integrations) and the API guide, as well as the entire set of application-based documentation to aid in your discovery of the product.

#### Example

The following example uses the curl command-line tool to execute API requests.

**Request**

curl -u <api_key>:x -H Accept:application/json -H Content-Type:application/json https://acme.chargify.com/subscriptions.json

## Install the Package

Run the following command to install the package and automatically add the dependency to your composer.json file:

```php
composer require "maxio/advanced-billing-sdk:3.0.0"
```

Or add it to the composer.json file manually as given below:

```php
"require": {
    "maxio/advanced-billing-sdk": "3.0.0"
}
```

You can also view the package at:
https://packagist.org/packages/maxio/advanced-billing-sdk#3.0.0

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/client.md)

The following parameters are configurable for the API Client:

| Parameter | Type | Description |
|  --- | --- | --- |
| `subdomain` | `string` | The subdomain for your Chargify site.<br>*Default*: `'subdomain'` |
| `domain` | `string` | The Chargify server domain.<br>*Default*: `'chargify.com'` |
| `environment` | `Environment` | The API environment. <br> **Default: `Environment.PRODUCTION`** |
| `timeout` | `int` | Timeout for API calls in seconds.<br>*Default*: `30` |
| `enableRetries` | `bool` | Whether to enable retries and backoff feature.<br>*Default*: `false` |
| `numberOfRetries` | `int` | The number of retries to make.<br>*Default*: `0` |
| `retryInterval` | `float` | The retry time interval between the endpoint calls.<br>*Default*: `1` |
| `backOffFactor` | `float` | Exponential backoff factor to increase interval between retries.<br>*Default*: `2` |
| `maximumRetryWaitTime` | `int` | The maximum wait time in seconds for overall retrying requests.<br>*Default*: `0` |
| `retryOnTimeout` | `bool` | Whether to retry on request timeout.<br>*Default*: `true` |
| `httpStatusCodesToRetry` | `array` | Http status codes to retry against.<br>*Default*: `408, 413, 429, 500, 502, 503, 504, 521, 522, 524` |
| `httpMethodsToRetry` | `array` | Http methods to retry against.<br>*Default*: `'GET', 'PUT'` |
| `basicAuthCredentials` | [`BasicAuthCredentials`](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/$a/https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/basic-authentication.md) | The Credentials Setter for Basic Authentication |

The API client can be initialized as follows:

```php
$client = AdvancedBillingClientBuilder::init()
    ->basicAuthCredentials(
        BasicAuthCredentialsBuilder::init(
            'BasicAuthUserName',
            'BasicAuthPassword'
        )
    )
    ->environment('production')
    ->subdomain('subdomain')
    ->domain('chargify.com')
    ->build();
```

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| production | **Default** Production server |
| environment2 | Production server |

## Authorization

This API uses the following authentication schemes.

* [`BasicAuth (Basic Authentication)`](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/$a/https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/basic-authentication.md)

## List of APIs

* [API Exports](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/api-exports.md)
* [Advance Invoice](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/advance-invoice.md)
* [Billing Portal](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/billing-portal.md)
* [Custom Fields](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/custom-fields.md)
* [Events-Based Billing Segments](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/events-based-billing-segments.md)
* [Payment Profiles](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/payment-profiles.md)
* [Product Families](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/product-families.md)
* [Product Price Points](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/product-price-points.md)
* [Proforma Invoices](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/proforma-invoices.md)
* [Reason Codes](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/reason-codes.md)
* [Referral Codes](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/referral-codes.md)
* [Sales Commissions](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/sales-commissions.md)
* [Subscription Components](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/subscription-components.md)
* [Subscription Groups](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/subscription-groups.md)
* [Subscription Group Invoice Account](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/subscription-group-invoice-account.md)
* [Subscription Group Status](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/subscription-group-status.md)
* [Subscription Invoice Account](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/subscription-invoice-account.md)
* [Subscription Notes](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/subscription-notes.md)
* [Subscription Products](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/subscription-products.md)
* [Subscription Status](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/subscription-status.md)
* [Coupons](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/coupons.md)
* [Components](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/components.md)
* [Customers](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/customers.md)
* [Events](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/events.md)
* [Insights](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/insights.md)
* [Invoices](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/invoices.md)
* [Offers](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/offers.md)
* [Products](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/products.md)
* [Sites](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/sites.md)
* [Subscriptions](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/subscriptions.md)
* [Webhooks](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/controllers/webhooks.md)

## Classes Documentation

* [ApiException](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/api-exception.md)
* [HttpRequest](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/http-request.md)
* [HttpResponse](https://www.github.com/maxio-com/ab-php-sdk/tree/3.0.0/doc/http-response.md)

