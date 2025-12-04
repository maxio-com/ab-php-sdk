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

This API returns an array of exported proforma invoices for a provided `batch_id`. Pay close attention to pagination in order to control responses from the server.

Example: `GET https://{subdomain}.chargify.com/api_exports/proforma_invoices/123/rows?per_page=10000&page=1`.

```php
function listExportedProformaInvoices(array $options): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request.<br>Default value is 100.<br>The maximum allowed values is 10000; any per_page value over 10000 will be changed to 10000.<br><br>**Default**: `100`<br><br>**Constraints**: `>= 1`, `<= 10000` |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br><br>**Default**: `1`<br><br>**Constraints**: `>= 1` |

## Response Type

[`ProformaInvoice[]`](../../doc/models/proforma-invoice.md)

## Example Usage

```php
$collect = [
    'batchId' => 'batch_id8',
    'perPage' => 100,
    'page' => 1
];

$result = $aPIExportsController->listExportedProformaInvoices($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# List Exported Invoices

This API returns an array of exported invoices for a provided `batch_id`. Pay close attention to pagination in order to control responses from the server.

Example: `GET https://{subdomain}.chargify.com/api_exports/invoices/123/rows?per_page=10000&page=1`.

```php
function listExportedInvoices(array $options): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request.<br>Default value is 100.<br>The maximum allowed values is 10000; any per_page value over 10000 will be changed to 10000.<br><br>**Default**: `100`<br><br>**Constraints**: `>= 1`, `<= 10000` |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br><br>**Default**: `1`<br><br>**Constraints**: `>= 1` |

## Response Type

[`Invoice[]`](../../doc/models/invoice.md)

## Example Usage

```php
$collect = [
    'batchId' => 'batch_id8',
    'perPage' => 100,
    'page' => 1
];

$result = $aPIExportsController->listExportedInvoices($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# List Exported Subscriptions

This API returns an array of exported subscriptions for a provided `batch_id`. Pay close attention to pagination in order to control responses from the server.

Example: `GET https://{subdomain}.chargify.com/api_exports/subscriptions/123/rows?per_page=200&page=1`.

```php
function listExportedSubscriptions(array $options): array
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request.<br>Default value is 100.<br>The maximum allowed values is 10000; any per_page value over 10000 will be changed to 10000.<br><br>**Default**: `100`<br><br>**Constraints**: `>= 1`, `<= 10000` |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br><br>**Default**: `1`<br><br>**Constraints**: `>= 1` |

## Response Type

[`Subscription[]`](../../doc/models/subscription.md)

## Example Usage

```php
$collect = [
    'batchId' => 'batch_id8',
    'perPage' => 100,
    'page' => 1
];

$result = $aPIExportsController->listExportedSubscriptions($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# Export Proforma Invoices

This API creates a proforma invoices export and returns a batchjob object.

It is only available for Relationship Invoicing architecture.

```php
function exportProformaInvoices(): BatchJobResponse
```

## Response Type

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$result = $aPIExportsController->exportProformaInvoices();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 409 | Conflict | [`SingleErrorResponseException`](../../doc/models/single-error-response-exception.md) |


# Export Invoices

This API creates an invoices export and returns a batchjob object.

```php
function exportInvoices(): BatchJobResponse
```

## Response Type

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$result = $aPIExportsController->exportInvoices();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 409 | Conflict | [`SingleErrorResponseException`](../../doc/models/single-error-response-exception.md) |


# Export Subscriptions

This API creates a subscriptions export and returns a batchjob object.

```php
function exportSubscriptions(): BatchJobResponse
```

## Response Type

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$result = $aPIExportsController->exportSubscriptions();
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 409 | Conflict | [`SingleErrorResponseException`](../../doc/models/single-error-response-exception.md) |


# Read Proforma Invoices Export

This API returns a batchjob object for proforma invoices export.

```php
function readProformaInvoicesExport(string $batchId): BatchJobResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |

## Response Type

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$batchId = 'batch_id8';

$result = $aPIExportsController->readProformaInvoicesExport($batchId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# Read Invoices Export

This API returns a batchjob object for invoices export.

```php
function readInvoicesExport(string $batchId): BatchJobResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |

## Response Type

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$batchId = 'batch_id8';

$result = $aPIExportsController->readInvoicesExport($batchId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |


# Read Subscriptions Export

This API returns a batchjob object for subscriptions export.

```php
function readSubscriptionsExport(string $batchId): BatchJobResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `batchId` | `string` | Template, Required | Id of a Batch Job. |

## Response Type

[`BatchJobResponse`](../../doc/models/batch-job-response.md)

## Example Usage

```php
$batchId = 'batch_id8';

$result = $aPIExportsController->readSubscriptionsExport($batchId);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |

