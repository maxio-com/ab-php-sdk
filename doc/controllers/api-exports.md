# API Exports

```php
$aPIExportsController = $client->getAPIExportsController();
```

## Class Name

`APIExportsController`

## Methods

* [List Exported Proforma Invoices](../../doc/controllers/api-exports.md#list-exported-proforma-invoices)
* [List Exported Invoices](../../doc/controllers/api-exports.md#list-exported-invoices)
* [List Exported Subscriptions](../../doc/controllers/api-exports.md#list-exported-subscriptions)
* [Export Proforma Invoices](../../doc/controllers/api-exports.md#export-proforma-invoices)
* [Export Invoices](../../doc/controllers/api-exports.md#export-invoices)
* [Export Subscriptions](../../doc/controllers/api-exports.md#export-subscriptions)
* [Read Proforma Invoices Export](../../doc/controllers/api-exports.md#read-proforma-invoices-export)
* [Read Invoices Export](../../doc/controllers/api-exports.md#read-invoices-export)
* [Read Subscriptions Export](../../doc/controllers/api-exports.md#read-subscriptions-export)


# List Exported Proforma Invoices

Lists exported proforma invoices for a provided `batch_id`. Use pagination to control responses returned from the server.

Example: `GET https://{subdomain}.chargify.com/api_exports/proforma_invoices/123/rows?per_page=10000&page=1`.

```php
function listExportedProformaInvoices(array $options): array
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request.<br>Default value is 100.<br>The maximum allowed values is 10000; any per_page value over 10000 will be changed to 10000.<br><br>**Default**: `100`<br><br>**Constraints**: `>= 1`, `<= 10000` |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br><br>**Default**: `1`<br><br>**Constraints**: `>= 1` |

## Response Type

**200**: OK

[`ProformaInvoice[]`](../../doc/models/proforma-invoice.md)

## Example Usage

```php
$collect = [
    'batchId' => 'batch_id8',
    'perPage' => 100,
    'page' => 1
];

$aPIExportsController = $client->getAPIExportsController();

try {
    $result = $aPIExportsController->listExportedProformaInvoices($collect);
    echo 'ProformaInvoice[]:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# List Exported Invoices

Lists exported invoices for a provided `batch_id`. Use pagination to control responses returned from the server.

Example: `GET https://{subdomain}.chargify.com/api_exports/invoices/123/rows?per_page=10000&page=1`.

```php
function listExportedInvoices(array $options): array
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request.<br>Default value is 100.<br>The maximum allowed values is 10000; any per_page value over 10000 will be changed to 10000.<br><br>**Default**: `100`<br><br>**Constraints**: `>= 1`, `<= 10000` |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br><br>**Default**: `1`<br><br>**Constraints**: `>= 1` |

## Response Type

**200**: OK

[`Invoice[]`](../../doc/models/invoice.md)

## Example Usage

```php
$collect = [
    'batchId' => 'batch_id8',
    'perPage' => 100,
    'page' => 1
];

$aPIExportsController = $client->getAPIExportsController();

try {
    $result = $aPIExportsController->listExportedInvoices($collect);
    echo 'Invoice[]:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# List Exported Subscriptions

Lists exported subscriptions for a provided `batch_id`. Use pagination to control responses returned from the server.

Example: `GET https://{subdomain}.chargify.com/api_exports/subscriptions/123/rows?per_page=200&page=1`.

```php
function listExportedSubscriptions(array $options): array
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request.<br>Default value is 100.<br>The maximum allowed values is 10000; any per_page value over 10000 will be changed to 10000.<br><br>**Default**: `100`<br><br>**Constraints**: `>= 1`, `<= 10000` |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br><br>**Default**: `1`<br><br>**Constraints**: `>= 1` |

## Response Type

**200**: OK

[`Subscription[]`](../../doc/models/subscription.md)

## Example Usage

```php
$collect = [
    'batchId' => 'batch_id8',
    'perPage' => 100,
    'page' => 1
];

$aPIExportsController = $client->getAPIExportsController();

try {
    $result = $aPIExportsController->listExportedSubscriptions($collect);
    echo 'Subscription[]:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# Export Proforma Invoices

Creates a proforma invoices export and returns a batch job object.

It is only available for Relationship Invoicing architecture.

```php
function exportProformaInvoices(): BatchJobResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Response Type

**201**: Created

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$aPIExportsController = $client->getAPIExportsController();

try {
    $result = $aPIExportsController->exportProformaInvoices();
    echo 'BatchJobResponse:';
    var_dump($result);
} catch (SingleErrorResponseException $exp) {
    echo 'Caught SingleErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 409 | Conflict | [`SingleErrorResponseException`](../../doc/models/single-error-response-exception.md) |


# Export Invoices

Creates an invoices export and returns a batch job object.

```php
function exportInvoices(): BatchJobResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Response Type

**201**: Created

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$aPIExportsController = $client->getAPIExportsController();

try {
    $result = $aPIExportsController->exportInvoices();
    echo 'BatchJobResponse:';
    var_dump($result);
} catch (SingleErrorResponseException $exp) {
    echo 'Caught SingleErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 409 | Conflict | [`SingleErrorResponseException`](../../doc/models/single-error-response-exception.md) |


# Export Subscriptions

Creates a subscriptions export and returns a batch job object.

```php
function exportSubscriptions(): BatchJobResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Response Type

**201**: Created

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$aPIExportsController = $client->getAPIExportsController();

try {
    $result = $aPIExportsController->exportSubscriptions();
    echo 'BatchJobResponse:';
    var_dump($result);
} catch (SingleErrorResponseException $exp) {
    echo 'Caught SingleErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Conflict | [`SingleErrorResponseException`](../../doc/models/single-error-response-exception.md) |


# Read Proforma Invoices Export

Returns a batch job object for a proforma invoices export.

```php
function readProformaInvoicesExport(string $batchId): BatchJobResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |

## Response Type

**200**: OK

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$batchId = 'batch_id8';

$aPIExportsController = $client->getAPIExportsController();

try {
    $result = $aPIExportsController->readProformaInvoicesExport($batchId);
    echo 'BatchJobResponse:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# Read Invoices Export

Returns a batch job object for an invoices export.

```php
function readInvoicesExport(string $batchId): BatchJobResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |

## Response Type

**200**: OK

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$batchId = 'batch_id8';

$aPIExportsController = $client->getAPIExportsController();

try {
    $result = $aPIExportsController->readInvoicesExport($batchId);
    echo 'BatchJobResponse:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# Read Subscriptions Export

Returns a batch job object for a subscriptions export.

```php
function readSubscriptionsExport(string $batchId): BatchJobResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |

## Response Type

**200**: OK

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$batchId = 'batch_id8';

$aPIExportsController = $client->getAPIExportsController();

try {
    $result = $aPIExportsController->readSubscriptionsExport($batchId);
    echo 'BatchJobResponse:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |

