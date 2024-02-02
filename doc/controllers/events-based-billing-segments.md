# Events-Based Billing Segments

```php
$eventsBasedBillingSegmentsController = $client->getEventsBasedBillingSegmentsController();
```

## Class Name

`EventsBasedBillingSegmentsController`

## Methods

* [Create Segment](../../doc/controllers/events-based-billing-segments.md#create-segment)
* [List Segments for Price Point](../../doc/controllers/events-based-billing-segments.md#list-segments-for-price-point)
* [Update Segment](../../doc/controllers/events-based-billing-segments.md#update-segment)
* [Delete Segment](../../doc/controllers/events-based-billing-segments.md#delete-segment)
* [Bulk Create Segments](../../doc/controllers/events-based-billing-segments.md#bulk-create-segments)
* [Bulk Update Segments](../../doc/controllers/events-based-billing-segments.md#bulk-update-segments)


# Create Segment

This endpoint creates a new Segment for a Component with segmented Metric. It allows you to specify properties to bill upon and prices for each Segment. You can only pass as many "property_values" as the related Metric has segmenting properties defined.

You may specify component and/or price point by using either the numeric ID or the `handle:gold` syntax.

```php
function createSegment(
    string $componentId,
    string $pricePointId,
    ?CreateSegmentRequest $body = null
): SegmentResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | `string` | Template, Required | ID or Handle for the Component |
| `pricePointId` | `string` | Template, Required | ID or Handle for the Price Point belonging to the Component |
| `body` | [`?CreateSegmentRequest`](../../doc/models/create-segment-request.md) | Body, Optional | - |

## Response Type

[`SegmentResponse`](../../doc/models/segment-response.md)

## Example Usage

```php
$componentId = 'component_id8';

$pricePointId = 'price_point_id8';

$body = CreateSegmentRequestBuilder::init(
    CreateSegmentBuilder::init(
        PricingScheme::VOLUME
    )
        ->segmentProperty1Value(
            'France'
        )
        ->segmentProperty2Value(
            'Spain'
        )
        ->prices(
            [
                CreateOrUpdateSegmentPriceBuilder::init(
                    0.19
                )
                    ->startingQuantity(1)
                    ->endingQuantity(10000)
                    ->build(),
                CreateOrUpdateSegmentPriceBuilder::init(
                    0.09
                )
                    ->startingQuantity(10001)
                    ->build()
            ]
        )
        ->build()
)->build();

$result = $eventsBasedBillingSegmentsController->createSegment(
    $componentId,
    $pricePointId,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity (WebDAV) | [`EventBasedBillingSegmentErrorsException`](../../doc/models/event-based-billing-segment-errors-exception.md) |


# List Segments for Price Point

This endpoint allows you to fetch Segments created for a given Price Point. They will be returned in the order of creation.

You can pass `page` and `per_page` parameters in order to access all of the segments. By default it will return `30` records. You can set `per_page` to `200` at most.

You may specify component and/or price point by using either the numeric ID or the `handle:gold` syntax.

```php
function listSegmentsForPricePoint(array $options): ListSegmentsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | `string` | Template, Required | ID or Handle for the Component |
| `pricePointId` | `string` | Template, Required | ID or Handle for the Price Point belonging to the Component |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`. |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request. Default value is 30. The maximum allowed values is 200; any per_page value over 200 will be changed to 200.<br>Use in query `per_page=200`. |
| `filterSegmentProperty1Value` | `?string` | Query, Optional | The value passed here would be used to filter segments. Pass a value related to `segment_property_1` on attached Metric. If empty string is passed, this filter would be rejected. Use in query `filter[segment_property_1_value]=EU`. |
| `filterSegmentProperty2Value` | `?string` | Query, Optional | The value passed here would be used to filter segments. Pass a value related to `segment_property_2` on attached Metric. If empty string is passed, this filter would be rejected. |
| `filterSegmentProperty3Value` | `?string` | Query, Optional | The value passed here would be used to filter segments. Pass a value related to `segment_property_3` on attached Metric. If empty string is passed, this filter would be rejected. |
| `filterSegmentProperty4Value` | `?string` | Query, Optional | The value passed here would be used to filter segments. Pass a value related to `segment_property_4` on attached Metric. If empty string is passed, this filter would be rejected. |

## Response Type

[`ListSegmentsResponse`](../../doc/models/list-segments-response.md)

## Example Usage

```php
$collect = Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')Liquid error: Value cannot be null. (Parameter 'key')[
    'component_id' => 'component_id8',
    'price_point_id' => 'price_point_id8',
    'page' => 2,
    'per_page' => 50
];

$result = $eventsBasedBillingSegmentsController->listSegmentsForPricePoint($collect);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity (WebDAV) | [`EventBasedBillingListSegmentsErrorsException`](../../doc/models/event-based-billing-list-segments-errors-exception.md) |


# Update Segment

This endpoint updates a single Segment for a Component with a segmented Metric. It allows you to update the pricing for the segment.

You may specify component and/or price point by using either the numeric ID or the `handle:gold` syntax.

```php
function updateSegment(
    string $componentId,
    string $pricePointId,
    float $id,
    ?UpdateSegmentRequest $body = null
): SegmentResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | `string` | Template, Required | ID or Handle of the Component |
| `pricePointId` | `string` | Template, Required | ID or Handle of the Price Point belonging to the Component |
| `id` | `float` | Template, Required | The ID of the Segment |
| `body` | [`?UpdateSegmentRequest`](../../doc/models/update-segment-request.md) | Body, Optional | - |

## Response Type

[`SegmentResponse`](../../doc/models/segment-response.md)

## Example Usage

```php
$componentId = 'component_id8';

$pricePointId = 'price_point_id8';

$id = 60;

$result = $eventsBasedBillingSegmentsController->updateSegment(
    $componentId,
    $pricePointId,
    $id
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity (WebDAV) | [`EventBasedBillingSegmentErrorsException`](../../doc/models/event-based-billing-segment-errors-exception.md) |


# Delete Segment

This endpoint allows you to delete a Segment with specified ID.

You may specify component and/or price point by using either the numeric ID or the `handle:gold` syntax.

```php
function deleteSegment(string $componentId, string $pricePointId, float $id): void
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | `string` | Template, Required | ID or Handle of the Component |
| `pricePointId` | `string` | Template, Required | ID or Handle of the Price Point belonging to the Component |
| `id` | `float` | Template, Required | The ID of the Segment |

## Response Type

`void`

## Example Usage

```php
$componentId = 'component_id8';

$pricePointId = 'price_point_id8';

$id = 60;

$eventsBasedBillingSegmentsController->deleteSegment(
    $componentId,
    $pricePointId,
    $id
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity (WebDAV) | `ApiException` |


# Bulk Create Segments

This endpoint allows you to create multiple segments in one request. The array of segments can contain up to `2000` records.

If any of the records contain an error the whole request would fail and none of the requested segments get created. The error response contains a message for only the one segment that failed validation, with the corresponding index in the array.

You may specify component and/or price point by using either the numeric ID or the `handle:gold` syntax.

```php
function bulkCreateSegments(
    string $componentId,
    string $pricePointId,
    ?BulkCreateSegments $body = null
): ListSegmentsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | `string` | Template, Required | ID or Handle for the Component |
| `pricePointId` | `string` | Template, Required | ID or Handle for the Price Point belonging to the Component |
| `body` | [`?BulkCreateSegments`](../../doc/models/bulk-create-segments.md) | Body, Optional | - |

## Response Type

[`ListSegmentsResponse`](../../doc/models/list-segments-response.md)

## Example Usage

```php
$componentId = 'component_id8';

$pricePointId = 'price_point_id8';

$result = $eventsBasedBillingSegmentsController->bulkCreateSegments(
    $componentId,
    $pricePointId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity (WebDAV) | [`EventBasedBillingSegmentException`](../../doc/models/event-based-billing-segment-exception.md) |


# Bulk Update Segments

This endpoint allows you to update multiple segments in one request. The array of segments can contain up to `1000` records.

If any of the records contain an error the whole request would fail and none of the requested segments get updated. The error response contains a message for only the one segment that failed validation, with the corresponding index in the array.

You may specify component and/or price point by using either the numeric ID or the `handle:gold` syntax.

```php
function bulkUpdateSegments(
    string $componentId,
    string $pricePointId,
    ?BulkUpdateSegments $body = null
): ListSegmentsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | `string` | Template, Required | ID or Handle for the Component |
| `pricePointId` | `string` | Template, Required | ID or Handle for the Price Point belonging to the Component |
| `body` | [`?BulkUpdateSegments`](../../doc/models/bulk-update-segments.md) | Body, Optional | - |

## Response Type

[`ListSegmentsResponse`](../../doc/models/list-segments-response.md)

## Example Usage

```php
$componentId = 'component_id8';

$pricePointId = 'price_point_id8';

$result = $eventsBasedBillingSegmentsController->bulkUpdateSegments(
    $componentId,
    $pricePointId
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity (WebDAV) | [`EventBasedBillingSegmentException`](../../doc/models/event-based-billing-segment-exception.md) |

