
# Getting Started with Maxio Advanced Billing

## Introduction

### Introduction

#### API Integration

Maxio Advanced Billing (formerly Chargify API) can be integrated with many environments and programming languages via our REST API. Some of our users have contributed their API wrappers in various programming languages. Check out the [API Code Overview](https://developers.chargify.com/docs/developer-docs/ZG9jOjE0NjAzNDI2-api-code-samples) doc for an introduction to the wrappers and available code samples.

#### Testing Guide

Maxio Advanced Billing has compiled a [testing guide](https://chargify.zendesk.com/hc/en-us/articles/4407904658587) that covers a list of important factors to consider while in the testing phase. Here's a high-level overiew of what's covered in our testing guide:

+ Test credit card basics
+ Test site limits
+ Live mode versus test mode

We strongly suggest reading over the testing guide, as well as the entire set of application-based documentation to aid in your discovery of the product.

#### Engage Support

We always enjoy (and appreciate) hearing about larger integrations ahead of time. If you’re planning on importing a large amount of data into Maxio via our API, we suggest sending a “heads up” to “support@chargify.com” so we can coordinate with you to ensure your import process goes smoothly.

Our API, while considered stable, is continually being improved and polished. Please feel free to contact support if you experience issues when integrating with the Maxio Advanced Billing API.

If you have any additional questions regarding our documentation please don't hesitate in reaching out.

#### Support Access

Access to our Technical Specialist team for API support is currently limited to purchasers of our larger Maxio support plans.

But don’t worry! There are quite a few options to help you get the answers you need:

- [Read our documentation for developers](https://developers.chargify.com/docs/developer-docs/ZG9jOjM0NjA3MQ-overview)
- Explore the endpoints of our API Documentation
- [Watch our videos and tutorials](https://chargify.com/tutorials)
- [Check out the Chargify tag on Stack Overflow](http://stackoverflow.com/questions/tagged/chargify)

### API Overview

The Chargify API allows you to interact with our system programmatically from your own application. Using the API you interact with Resources such as:

- Products
- Subscriptions
- Customers
- etc.

The API attempts to conform to the [RESTful](http://en.wikipedia.org/wiki/Representational_State_Transfer) design principles.
You interact with the resources exposed via the API by accessing resource collection and element URIs using the HTTP verbs (GET, POST, PUT, and DELETE).
Chargify accepts and returns both JSON and XML data via the API.

You’ll likely need access to a web developer or programmer (if you’re not one) to get the most use out of the API.

#### Available Formats: JSON and XML

JSON is the primary and recommended format for use with the Chargify API.  XML is also provided as a backwards compatible option for Merchants who require it.

#### Authentication

Authentication is implemented as HTTP Basic Authentication over TLS >= 1.2 (HTTPS), as described in [API Authentication](https://developers.chargify.com/docs/developer-docs/ZG9jOjE1NTUxNQ-authentication)

#### URL

The URL for API requests includes the subdomain of the Site you are working with:

`https://<subdomain>.chargify.com/<resource URI>`

#### Response Data

Response data is sent as either XML or JSON, depending on the type of data requested (`HTTP Content-Type` header) or the type specified as being accepted (HTTP `Accept` header).

GETs for individual statements & invoices may also be requested as PDF using `application/pdf` or appending `.pdf` to the resource URI.

Response codes are sent via the normal HTTP Response Code, and are documented separately for each resource.

For boolean fields, please note that a value of `null` may be considered as false. However, this is not true across all cases. Please excercise good judgement here, or contact support with any questions.

For example:

+ `null` can define that there's no data available for that attribute

#### Pagination

When an endpoint returns a list of items, it will be paginated.  Usually, 20 items will be returned by default, and you may request up to a maximum of 200 at a time.  Pagination is done with query string parameters, for example: `?page=5&per_page=200`

#### Response Time Zones

API responses from Chargify are sent with the timezone of current Chargify site.

Alternately, webhooks sent from Chargify globally utilize EST as the timezone for all content in the body of the payload.

#### Request Data

POST and PUT request data may be formatted as either XML (`application/xml`) or JSON (`application/json`). For best results, you should set your HTTP `Content-Type` request header accordingly, although you may also specify your format by appending `.xml` or `.json` extensions on to the resource URI.

Note that Chargify does not accept PUT or POST data sent as query params or form encoded data – data must be sent as either XML or JSON. If you fail to set your `Content-Type` to either `application/xml` or `application/json`, your request may fail due to triggering of forgery protection mechanisms.

##### About Decimal Numbers

In order to prevent losing precision, we serialize decimal numbers as strings instead of as JSON numbers.

We recommend parsing these strings into their decimal equivalent using a decimal number library in your programming language (i.e. `BigDecimal` in Ruby) instead of relying on floating point values or arithmetic.

##### About Amount Fields

Fields holding amount values are given as a string representing a decimal whole currency amount.

For example, `"1.23"` in currency `"USD"` would equate to `$1.23`.

Not all fields will be rounded to the smallest currency denomination.  Intermediate results, such as those that derive from line-level tax calculations, may hold precision up to 8 decimal places.  However, the top-level totals we provide (e.g. `total_amount`) will be rounded to the smallest currency denomination.

It is up to API consumers to parse the string into a decimal number representation and do any rounding necessary for your application.

#### Debugging

If you’re having difficulty executing a request via our API, try the simplest thing and attempt your request via the curl command-line tool, as shown in the below example. Add the `--verbose` flag to your request to receive even more debugging information.

Another handy tool is [Beeceptor](https://beeceptor.com/). You can use this to intercept your request to see exactly what is being sent.

If you are unable to connect at all, check that you are using TLS 1.2 or better.

If you see a "Could not resolve host" error, double check that the url is correct, including your subdomain. For example: `mysite.chargify.com`.  This error means your DNS server could not find an IP address for the domain you are trying to connect to.

#### Backwards Compatibility

We consider the following changes to be backwards compatible and may make them without advance notice:

+ Adding new API endpoints, or adding new attributes in the responses of existing endpoints
+ Adding new optional parameters to be sent to existing API endpoints
+ Adding new fields to exported data
+ Changing the type or length of any of the ID attributes
  + For example, most IDs are currently integers, but you should not assume that this will always be the case.

In addition, you should not depend on the order of attributes within the API response as this may change.

Chargify does not provide notifications for additions that are clearly defined as backwards compatible.

#### Examples

The following examples use the curl command-line tool to execute API requests.

##### Subscription Listing

**Request**

curl -u <api_key>:x -H Accept:application/json -H Content-Type:application/json https://acme.chargify.com/subscriptions.json

### API Access Limitations

There are a few scenarios that may end up in causing an API request to be blocked even with correct credentials.
**Please note:** All relevant API requests will be blocked if any of the below conditions are true. These limitations also apply to [Chargify Direct](https://developers.chargify.com/docs/developer-docs/ZG9jOjE0NjAzNDE3-introduction).

Those scenarios are as follows:

- Your Chargify subscription is canceled.
- Your Chargify trial has reached an end.
- The site you're making a request for is in the process of ["clearing site data"](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405428327309)
  - _Note: any API request for another site that is in a good state will NOT be blocked_
- The site you're making a request for has been deleted.
  - _Note: any API request for another site that is in a good state will NOT be blocked_

Read more about your Chargify subscription [here](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405430043149-Advanced-Billing-Subscription#advanced-billing-subscription-0-0)

#### What happens when an API request is blocked

The request will fail with a `422` http status code. The response will also include a message explaining the reason for the request being blocked. For example:

- If your Chargify subscription is canceled:

```json
{
  "errors" => [
    [0] "Your Chargify account has been canceled. Please contact support@chargify.com to reactivate."
  ]
}
```

- If your Chargify trial has reached and end and you attempted to make an API request, the response body will look like:

```json
{
  "errors" => [
    [0] "Your trial has ended, please contact sales."
  ]
}
```

- If the site you're making a request for is in the process of ["clearing site data"](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405428327309):

```json
{
  "errors" => [
    [0] "Site data clearing is in progress. Please try later."
  ]
}
```

- If the site you're making a request for has been deleted:

```json
{
  "errors" => [
    [0] "This site has been deleted."
  ]
}
```

### Secure Applications

Please note that it is NOT possible to make API requests directly from the customer's browser or device.  Doing so would expose your API key on the client side, and anyone who has that key has full access to all of your Chargify data.

Instead you will need to take care to tokenize sensitive information by using [Chargify.js](https://developers.chargify.com/docs/developer-docs/ZG9jOjE0NjAzNDI0-overview) or a similar JavaScript library provided by your gateway, and then post the token and other information to your own server, from which you can make the API call to Chargify.

#### Troubleshooting

If you attempt to make a Chargify API request directly from the customer's browser, you may see an error such as:

```
Response to preflight request doesn't pass access control check: No 'Access-Control-Allow-Origin' header is present on the requested resource.
```

or

```
Origin 'https://example.com' is therefore not allowed access.` `The response had HTTP status code 404.
```

This is an error message indicating that Cross-Origin Resource Sharing (CORS) is not enabled on the Chargify server.

### Relationship Invoicing

#### API Compatibility for Relationship Invoicing

This section describes the API for the new, [Relationship Invoicing](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405078794253) style of invoices introduced in January 2018.

If you are an existing customer from prior to January 2018 or have not otherwise explicitly opted into this new style of invoices, you are probably looking for the legacy "Invoices" section that describes [invoice-billing legacy-style invoices](./b3A6MTQxMDgzNjQ-read-invoice).

These new invoices provide a single representation of all of your Chargify billing, whether you collect automatically or via remittance.

#### About Decimal Numbers

In order to prevent losing precision, we serialize decimal numbers as strings instead of as JSON numbers.

We recommend parsing these strings into their decimal equivalent using a decimal number library in your programming language (i.e. `BigDecimal` in Ruby) instead of relying on floating point values or arithmetic.

#### About Amount Fields

Fields holding amount values are given as a string representing a decimal whole currency amount.

For example, `"1.23"` in currency `"USD"` would equate to `$1.23`.

Not all fields will be rounded to the smallest currency denomination. Intermediate results, such as those that derive from line-level tax calculations, may hold precision up to 8 decimal places.  However, the top-level totals we provide (e.g. `total_amount`) will be rounded to the smallest currency denomination.

It is up to API consumers to parse the string into a decimal number representation and do any rounding necessary for your application.

##### Relationship Invoicing Summary

+ If your site **is** using relationship invoicing, you may only use the methods described in this section for working with invoices.

+ If your site is **not** using relationship invoicing, please use the legacy invoice methods:
  
  + [Invoices](./b3A6MTQxMTA0MTA-read-invoice)
  + [Invoices: Payments](./b3A6MTQxMTA0MTI-create-invoice-payment)
  + [Invoices: Charges](./b3A6MTQxMTA0MTM-create-charge)
  + [Invoices: Credits](./b3A6MTQxMTA0MTQ-create-invoice-credit)

## Building

The generated code has dependencies over external libraries like UniRest and JsonMapper. JsonMapper requires docblock annotations like `@var`, `@maps`, and `@factory` to map JSON responses with our class definitions. Hence the docblocks in generated code cannot be disabled by deactivating the PHP configurations like `opcache.save_comments`. These dependencies are defined in the `composer.json` file that comes with the SDK. To resolve these dependencies, we use the Composer package manager which requires PHP greater than or equal to 7.2 installed in your system. Visit [https://getcomposer.org/download/](https://getcomposer.org/download/) to download the installer file for Composer and run it in your system. Open command prompt and type `composer --version`. This should display the current version of the Composer installed if the installation was successful.

* Using command line, navigate to the directory containing the generated files (including `composer.json`) for the SDK.
* Run the command `composer install`. This should install all the required dependencies and create the `vendor` directory in your project directory.

![Building SDK - Step 1](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=installDependencies)

### Configuring CURL Certificate Path in php.ini

:information_source: **Note** This is for Windows users only.

CURL used to include a list of accepted CAs, but no longer bundles ANY CA certs. So by default it will reject all SSL certificates as unverifiable. You will have to get your CA's cert and point curl at it. The steps are as follows:

1. Download the certificate bundle (.pem file) from [https://curl.haxx.se/docs/caextract.html](https://curl.haxx.se/docs/caextract.html) on to your system.
2. Add curl.cainfo = "PATH_TO/cacert.pem" to your php.ini file located in your php installation. “PATH_TO” must be an absolute path containing the .pem file.

```
[curl]; A default value for the CURLOPT_CAINFO option. This is required to be an
; absolute path.
curl.cainfo = PATH_TO/cacert.pem
```

## Installation

The following section explains how to use the AdvancedBilling library in a new project.

### 1. Open Project in an IDE

Open an IDE for PHP like PhpStorm. The basic workflow presented here is also applicable if you prefer using a different editor or IDE.

![Open project in PHPStorm - Step 1](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=openIDE)

Click on `Open` in PhpStorm to browse to your generated SDK directory and then click `OK`.

![Open project in PHPStorm - Step 2](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=openProject0)

### 2. Add a new Test Project

Create a new directory by right clicking on the solution name as shown below:

![Add a new project in PHPStorm - Step 1](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=createDirectory)

Name the directory as "test".

![Add a new project in PHPStorm - Step 2](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=nameDirectory)

Add a PHP file to this project.

![Add a new project in PHPStorm - Step 3](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=createFile)

Name it "testSDK".

![Add a new project in PHPStorm - Step 4](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=nameFile)

Depending on your project setup, you might need to include composer's autoloader in your PHP code to enable auto loading of classes.

```php
require_once "vendor/autoload.php";
```

It is important that the path inside require_once correctly points to the file `autoload.php` inside the vendor directory created during dependency installations.

![Add a new project in PHPStorm - Step 5](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=projectFiles)

After this you can add code to initialize the client library and acquire the instance of a Controller class. Sample code to initialize the client library and use the Controller methods is given in the subsequent sections.

### 3. Run the Test Project

To run your project you must set the Interpreter for your project. Interpreter is the PHP engine installed on your computer.

Open `Settings` from `File` menu.

![Run Test Project - Step 1](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=openSettings)

Select `PHP` from within `Languages & Frameworks`.

![Run Test Project - Step 2](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=setInterpreter0)

Browse for Interpreters near the `Interpreter` option and choose your interpreter.

![Run Test Project - Step 3](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=setInterpreter1)

Once the interpreter is selected, click `OK`.

![Run Test Project - Step 4](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=setInterpreter2)

To run your project, right click on your PHP file inside your Test project and click on `Run`.

![Run Test Project - Step 5](https://apidocs.io/illustration/php?workspaceFolder=AdvancedBilling&step=runProject)

## Initialize the API Client

**_Note:_** Documentation for the client can be found [here.](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/client.md)

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

## Environments

The SDK can be configured to use a different environment for making API calls. Available environments are:

### Fields

| Name | Description |
|  --- | --- |
| production | **Default** Production server |
| environment2 | Production server |

## Authorization

This API uses `Basic Authentication`.

## List of APIs

* [API Exports](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/api-exports.md)
* [Advance Invoice](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/advance-invoice.md)
* [Billing Portal](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/billing-portal.md)
* [Custom Fields](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/custom-fields.md)
* [Events-Based Billing Segments](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/events-based-billing-segments.md)
* [Payment Profiles](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/payment-profiles.md)
* [Product Families](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/product-families.md)
* [Product Price Points](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/product-price-points.md)
* [Proforma Invoices](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/proforma-invoices.md)
* [Reason Codes](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/reason-codes.md)
* [Referral Codes](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/referral-codes.md)
* [Sales Commissions](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/sales-commissions.md)
* [Subscription Components](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/subscription-components.md)
* [Subscription Groups](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/subscription-groups.md)
* [Subscription Group Invoice Account](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/subscription-group-invoice-account.md)
* [Subscription Group Status](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/subscription-group-status.md)
* [Subscription Invoice Account](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/subscription-invoice-account.md)
* [Subscription Notes](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/subscription-notes.md)
* [Subscription Products](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/subscription-products.md)
* [Subscription Status](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/subscription-status.md)
* [Coupons](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/coupons.md)
* [Components](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/components.md)
* [Customers](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/customers.md)
* [Events](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/events.md)
* [Insights](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/insights.md)
* [Invoices](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/invoices.md)
* [Offers](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/offers.md)
* [Products](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/products.md)
* [Sites](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/sites.md)
* [Subscriptions](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/subscriptions.md)
* [Webhooks](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/controllers/webhooks.md)

## Classes Documentation

* [ApiException](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/api-exception.md)
* [HttpRequest](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/http-request.md)
* [HttpResponse](https://www.github.com/maxio-com/ab-php-sdk/tree/0.0.3/doc/http-response.md)

