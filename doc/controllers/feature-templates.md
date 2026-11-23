# Feature Templates

```php
$featureTemplatesController = $client->getFeatureTemplatesController();
```

## Class Name

`FeatureTemplatesController`

## Methods

* [List Feature Templates](../../doc/controllers/feature-templates.md#list-feature-templates)
* [Create Feature Template](../../doc/controllers/feature-templates.md#create-feature-template)
* [Read Feature Template](../../doc/controllers/feature-templates.md#read-feature-template)
* [Update Feature Template](../../doc/controllers/feature-templates.md#update-feature-template)
* [Archive Feature Template](../../doc/controllers/feature-templates.md#archive-feature-template)
* [Restore Feature Template](../../doc/controllers/feature-templates.md#restore-feature-template)


# List Feature Templates

Lists the feature templates defined for your site, active (non-archived) ones by default. Pass `status=archived` or `status=all` to widen the result set.

Supply `page` or `per_page` to paginate. Without either parameter, the response includes the full result set.

```php
function listFeatureTemplates(
    ?int $page = 1,
    ?int $perPage = 20,
    ?string $status = Status1::ACTIVE,
    ?string $q = null,
    ?string $kind = null,
    ?\DateTime $updatedFrom = null,
    ?\DateTime $updatedTo = null,
    ?string $sortBy = SortBy::NAME,
    ?string $sortDirection = SortDirection::ASC
): FeatureTemplatesListResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br><br>**Default**: `1`<br><br>**Constraints**: `>= 1` |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request. Default value is 20. The maximum allowed values is 200; any per_page value over 200 will be changed to 200.<br>Use in query `per_page=200`.<br><br>**Default**: `20`<br><br>**Constraints**: `<= 200` |
| `status` | [`?string(Status1)`](../../doc/models/status-1.md) | Query, Optional | Filters by archived state. Defaults to `active` (non-archived templates only).<br><br>**Default**: `Status1::ACTIVE` |
| `q` | `?string` | Query, Optional | Filters to feature templates whose name contains this substring (case-insensitive). |
| `kind` | [`?string(Kind)`](../../doc/models/kind.md) | Query, Optional | Filters by feature kind. |
| `updatedFrom` | `?DateTime` | Query, Optional | Returns feature templates updated on or after this date. |
| `updatedTo` | `?DateTime` | Query, Optional | Returns feature templates updated on or before this date. |
| `sortBy` | [`?string(SortBy)`](../../doc/models/sort-by.md) | Query, Optional | The field to sort results by.<br><br>**Default**: `SortBy::NAME` |
| `sortDirection` | [`?string(SortDirection)`](../../doc/models/sort-direction.md) | Query, Optional | The sort direction of the returned feature templates.<br><br>**Default**: `SortDirection::ASC` |

## Response Type

**200**: OK

[`FeatureTemplatesListResponse`](../../doc/models/feature-templates-list-response.md)

## Example Usage

```php
$page = 1;

$perPage = 50;

$status = Status1::ACTIVE;

$sortBy = SortBy::NAME;

$sortDirection = SortDirection::ASC;

$featureTemplatesController = $client->getFeatureTemplatesController();

try {
    $result = $featureTemplatesController->listFeatureTemplates(
        $page,
        $perPage,
        $status,
        null,
        null,
        null,
        null,
        $sortBy,
        $sortDirection
    );
    echo 'FeatureTemplatesListResponse:';
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
  "items": [
    {
      "id": 1001,
      "key": "sso",
      "name": "Single Sign-On",
      "description": null,
      "kind": "access_right",
      "unit": null,
      "value_type": "boolean",
      "default_value": "true",
      "default_periodicity_interval": null,
      "default_periodicity_unit": null,
      "archived_at": null,
      "created_at": "2024-01-15T10:00:00-05:00",
      "updated_at": "2024-01-15T10:00:00-05:00",
      "products_count": 2,
      "plans_count": 5
    }
  ],
  "total_count": 1,
  "archived_count": 0
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 403 | Forbidden | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |


# Create Feature Template

Defines a new feature at the site level. Feature templates aren't billable on their own. Attach a template to products or components to grant the feature to subscribers.

```php
function createFeatureTemplate(?CreateFeatureTemplateRequest $body = null): FeatureTemplateResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `body` | [`?CreateFeatureTemplateRequest`](../../doc/models/create-feature-template-request.md) | Body, Optional | - |

## Response Type

**201**: Created

[`FeatureTemplateResponse`](../../doc/models/feature-template-response.md)

## Example Usage

```php
$body = CreateFeatureTemplateRequestBuilder::init(
    FeatureBuilder::init(
        'sso',
        'Single Sign-On',
        FeatureKind::ACCESS_RIGHT
    )->build()
)->build();

$featureTemplatesController = $client->getFeatureTemplatesController();

try {
    $result = $featureTemplatesController->createFeatureTemplate($body);
    echo 'FeatureTemplateResponse:';
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
  "feature": {
    "id": 1001,
    "key": "sso",
    "name": "Single Sign-On",
    "description": null,
    "kind": "access_right",
    "unit": null,
    "value_type": "boolean",
    "default_value": "true",
    "default_periodicity_interval": null,
    "default_periodicity_unit": null,
    "archived_at": null,
    "created_at": "2024-01-15T10:00:00-05:00",
    "updated_at": "2024-01-15T10:00:00-05:00",
    "products_count": 0,
    "plans_count": 0
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 403 | Forbidden | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |


# Read Feature Template

Returns a single feature template. Archived feature templates are not addressable here and return `404`. Restore a template first to read or update it.

```php
function readFeatureTemplate(int $id): FeatureTemplateResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `int` | Template, Required | The Advanced Billing id of the feature template. |

## Response Type

**200**: OK

[`FeatureTemplateResponse`](../../doc/models/feature-template-response.md)

## Example Usage

```php
$id = 112;

$featureTemplatesController = $client->getFeatureTemplatesController();

try {
    $result = $featureTemplatesController->readFeatureTemplate($id);
    echo 'FeatureTemplateResponse:';
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
| 403 | Forbidden | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |
| 404 | Not Found | `ApiException` |


# Update Feature Template

Updates the name, description, unit, value type, default value, or default periodicity of a feature template. `key` is rejected on every update. `kind` is rejected once any feature catalog item has been created from this template.

Archived feature templates are not addressable here and return `404`. Restore a template first to update it.

```php
function updateFeatureTemplate(int $id, ?UpdateFeatureTemplateRequest $body = null): FeatureTemplateResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `int` | Template, Required | The Advanced Billing id of the feature template. |
| `body` | [`?UpdateFeatureTemplateRequest`](../../doc/models/update-feature-template-request.md) | Body, Optional | - |

## Response Type

**200**: OK

[`FeatureTemplateResponse`](../../doc/models/feature-template-response.md)

## Example Usage

```php
$id = 112;

$featureTemplatesController = $client->getFeatureTemplatesController();

try {
    $result = $featureTemplatesController->updateFeatureTemplate($id);
    echo 'FeatureTemplateResponse:';
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
| 403 | Forbidden | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |


# Archive Feature Template

Archives a feature template. Archived feature templates are not addressable via [Read Feature Template](../../doc/controllers/feature-templates.md#read-feature-template) or [Update Feature Template](../../doc/controllers/feature-templates.md#update-feature-template). Both endpoints return `404` until the template is restored.

The feature template record itself is never hard-deleted, and can always be restored with [Restore Feature Template](../../doc/controllers/feature-templates.md#restore-feature-template). Reversibility does not extend to `remove_from_catalog=true`: the feature catalog items and entitlements that parameter destroys are gone permanently, and restoring the template will not bring subscriber access back.

```php
function archiveFeatureTemplate(int $id, ?bool $removeFromCatalog = false): void
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `int` | Template, Required | The Advanced Billing id of the feature template. |
| `removeFromCatalog` | `?bool` | Query, Optional | When `true`, also destroys every feature catalog item created from this template and cascades to their entitlements, revoking subscriber access immediately. When `false` (default), the feature template and its feature catalog items are archived, and existing entitlements are preserved.<br><br>**Default**: `false` |

## Response Type

**204**: No Content

`void`

## Example Usage

```php
$id = 112;

$removeFromCatalog = false;

$featureTemplatesController = $client->getFeatureTemplatesController();

try {
    $featureTemplatesController->archiveFeatureTemplate(
        $id,
        $removeFromCatalog
    );
} catch (ErrorListResponseException $exp) {
    echo 'Caught ErrorListResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 403 | Forbidden | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |
| 404 | Not Found | `ApiException` |


# Restore Feature Template

Clears the feature template's archived state. Feature catalog items created from this template are not automatically restored. Restore each one individually.

```php
function restoreFeatureTemplate(int $id): FeatureTemplateResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `id` | `int` | Template, Required | The Advanced Billing id of the feature template. |

## Response Type

**200**: OK

[`FeatureTemplateResponse`](../../doc/models/feature-template-response.md)

## Example Usage

```php
$id = 112;

$featureTemplatesController = $client->getFeatureTemplatesController();

try {
    $result = $featureTemplatesController->restoreFeatureTemplate($id);
    echo 'FeatureTemplateResponse:';
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
| 403 | Forbidden | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |

