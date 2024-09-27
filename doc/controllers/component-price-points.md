# Component Price Points

```php
$componentPricePointsController = $client->getComponentPricePointsController();
```

## Class Name

`ComponentPricePointsController`

## Methods

* [Promote Component Price Point to Default](../../doc/controllers/component-price-points.md#promote-component-price-point-to-default)
* [Create Component Price Point](../../doc/controllers/component-price-points.md#create-component-price-point)
* [List Component Price Points](../../doc/controllers/component-price-points.md#list-component-price-points)
* [Bulk Create Component Price Points](../../doc/controllers/component-price-points.md#bulk-create-component-price-points)
* [Update Component Price Point](../../doc/controllers/component-price-points.md#update-component-price-point)
* [Read Component Price Point](../../doc/controllers/component-price-points.md#read-component-price-point)
* [Archive Component Price Point](../../doc/controllers/component-price-points.md#archive-component-price-point)
* [Unarchive Component Price Point](../../doc/controllers/component-price-points.md#unarchive-component-price-point)
* [Create Currency Prices](../../doc/controllers/component-price-points.md#create-currency-prices)
* [Update Currency Prices](../../doc/controllers/component-price-points.md#update-currency-prices)
* [List All Component Price Points](../../doc/controllers/component-price-points.md#list-all-component-price-points)


# Promote Component Price Point to Default

Sets a new default price point for the component. This new default will apply to all new subscriptions going forward - existing subscriptions will remain on their current price point.

See [Price Points Documentation](https://maxio.zendesk.com/hc/en-us/articles/24261191737101-Price-Points-Components) for more information on price points and moving subscriptions between price points.

Note: Custom price points are not able to be set as the default for a component.

```php
function promoteComponentPricePointToDefault(int $componentId, int $pricePointId): ComponentResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | `int` | Template, Required | The Advanced Billing id of the component to which the price point belongs |
| `pricePointId` | `int` | Template, Required | The Advanced Billing id of the price point |

## Response Type

[`ComponentResponse`](../../doc/models/component-response.md)

## Example Usage

```php
$componentId = 222;

$pricePointId = 10;

$result = $componentPricePointsController->promoteComponentPricePointToDefault(
    $componentId,
    $pricePointId
);
```

## Example Response *(as JSON)*

```json
{
  "component": {
    "id": 292609,
    "name": "Text messages",
    "pricing_scheme": "stairstep",
    "unit_name": "text message",
    "unit_price": null,
    "product_family_id": 528484,
    "price_per_unit_in_cents": null,
    "kind": "metered_component",
    "archived": false,
    "taxable": false,
    "description": null,
    "created_at": "2019-08-02T05:54:53-04:00",
    "prices": [
      {
        "id": 47,
        "component_id": 292609,
        "starting_quantity": 1,
        "ending_quantity": null,
        "unit_price": "1.0",
        "price_point_id": 173,
        "formatted_unit_price": "$1.00"
      }
    ],
    "default_price_point_name": "Original"
  }
}
```


# Create Component Price Point

This endpoint can be used to create a new price point for an existing component.

```php
function createComponentPricePoint(
    int $componentId,
    ?CreateComponentPricePointRequest $body = null
): ComponentPricePointResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | `int` | Template, Required | The Advanced Billing id of the component |
| `body` | [`?CreateComponentPricePointRequest`](../../doc/models/create-component-price-point-request.md) | Body, Optional | - |

## Response Type

[`ComponentPricePointResponse`](../../doc/models/component-price-point-response.md)

## Example Usage

```php
$componentId = 222;

$body = CreateComponentPricePointRequestBuilder::init(
    CreateComponentPricePointBuilder::init(
        'Wholesale',
        PricingScheme::STAIRSTEP,
        [
            PriceBuilder::init(
                '1',
                '5.00'
            )
                ->endingQuantity(
                    '100'
                )
                ->build(),
            PriceBuilder::init(
                '101',
                '4.00'
            )->build()
        ]
    )
        ->handle('wholesale-handle')
        ->useSiteExchangeRate(false)
        ->build()
)->build();

$result = $componentPricePointsController->createComponentPricePoint(
    $componentId,
    $body
);
```


# List Component Price Points

Use this endpoint to read current price points that are associated with a component.

You may specify the component by using either the numeric id or the `handle:gold` syntax.

When fetching a component's price points, if you have defined multiple currencies at the site level, you can optionally pass the `?currency_prices=true` query param to include an array of currency price data in the response.

If the price point is set to `use_site_exchange_rate: true`, it will return pricing based on the current exchange rate. If the flag is set to false, it will return all of the defined prices for each currency.

```php
function listComponentPricePoints(array $options): ComponentPricePointsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | `int` | Template, Required | The Advanced Billing id of the component |
| `currencyPrices` | `?bool` | Query, Optional | Include an array of currency price data |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br>**Default**: `1`<br>**Constraints**: `>= 1` |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request. Default value is 20. The maximum allowed values is 200; any per_page value over 200 will be changed to 200.<br>Use in query `per_page=200`.<br>**Default**: `20`<br>**Constraints**: `<= 200` |
| `filterType` | [`?(string(PricePointType)[])`](../../doc/models/price-point-type.md) | Query, Optional | Use in query: `filter[type]=catalog,default`. |

## Response Type

[`ComponentPricePointsResponse`](../../doc/models/component-price-points-response.md)

## Example Usage

```php
$collect = Liquid error: Value cannot be null. (Parameter 'key')[
    'componentId' => 222,
    'page' => 2,
    'perPage' => 50
];

$result = $componentPricePointsController->listComponentPricePoints($collect);
```

## Example Response *(as JSON)*

```json
{
  "price_points": [
    {
      "id": 80,
      "default": false,
      "name": "Wholesale Two",
      "pricing_scheme": "per_unit",
      "component_id": 74,
      "handle": "wholesale-two",
      "archived_at": null,
      "created_at": "2017-07-05T13:55:40-04:00",
      "updated_at": "2017-07-05T13:55:40-04:00",
      "prices": [
        {
          "id": 121,
          "component_id": 74,
          "starting_quantity": 1,
          "ending_quantity": null,
          "unit_price": "5.0"
        }
      ]
    },
    {
      "id": 81,
      "default": false,
      "name": "MSRP",
      "pricing_scheme": "per_unit",
      "component_id": 74,
      "handle": "msrp",
      "archived_at": null,
      "created_at": "2017-07-05T13:55:40-04:00",
      "updated_at": "2017-07-05T13:55:40-04:00",
      "prices": [
        {
          "id": 122,
          "component_id": 74,
          "starting_quantity": 1,
          "ending_quantity": null,
          "unit_price": "4.0"
        }
      ]
    }
  ]
}
```


# Bulk Create Component Price Points

Use this endpoint to create multiple component price points in one request.

```php
function bulkCreateComponentPricePoints(
    string $componentId,
    ?CreateComponentPricePointsRequest $body = null
): ComponentPricePointsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | `string` | Template, Required | The Advanced Billing id of the component for which you want to fetch price points. |
| `body` | [`?CreateComponentPricePointsRequest`](../../doc/models/create-component-price-points-request.md) | Body, Optional | - |

## Response Type

[`ComponentPricePointsResponse`](../../doc/models/component-price-points-response.md)

## Example Usage

```php
$componentId = 'component_id8';

$body = CreateComponentPricePointsRequestBuilder::init(
    [
        CreateComponentPricePointBuilder::init(
            'Wholesale',
            PricingScheme::PER_UNIT,
            [
                PriceBuilder::init(
                    1,
                    5
                )->build()
            ]
        )
            ->handle('wholesale')
            ->build(),
        CreateComponentPricePointBuilder::init(
            'MSRP',
            PricingScheme::PER_UNIT,
            [
                PriceBuilder::init(
                    1,
                    4
                )->build()
            ]
        )
            ->handle('msrp')
            ->build(),
        CreateComponentPricePointBuilder::init(
            'Special Pricing',
            PricingScheme::PER_UNIT,
            [
                PriceBuilder::init(
                    1,
                    5
                )->build()
            ]
        )
            ->handle('special')
            ->build()
    ]
)->build();

$result = $componentPricePointsController->bulkCreateComponentPricePoints(
    $componentId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "price_points": [
    {
      "id": 80,
      "default": false,
      "name": "Wholesale Two",
      "pricing_scheme": "per_unit",
      "component_id": 74,
      "handle": "wholesale-two",
      "archived_at": null,
      "created_at": "2017-07-05T13:55:40-04:00",
      "updated_at": "2017-07-05T13:55:40-04:00",
      "prices": [
        {
          "id": 121,
          "component_id": 74,
          "starting_quantity": 1,
          "ending_quantity": null,
          "unit_price": "5.0"
        }
      ]
    },
    {
      "id": 81,
      "default": false,
      "name": "MSRP",
      "pricing_scheme": "per_unit",
      "component_id": 74,
      "handle": "msrp",
      "archived_at": null,
      "created_at": "2017-07-05T13:55:40-04:00",
      "updated_at": "2017-07-05T13:55:40-04:00",
      "prices": [
        {
          "id": 122,
          "component_id": 74,
          "starting_quantity": 1,
          "ending_quantity": null,
          "unit_price": "4.0"
        }
      ]
    }
  ]
}
```


# Update Component Price Point

When updating a price point, it's prices can be updated as well by creating new prices or editing / removing existing ones.

Passing in a price bracket without an `id` will attempt to create a new price.

Including an `id` will update the corresponding price, and including the `_destroy` flag set to true along with the `id` will remove that price.

Note: Custom price points cannot be updated directly. They must be edited through the Subscription.

```php
function updateComponentPricePoint(
    $componentId,
    $pricePointId,
    ?UpdateComponentPricePointRequest $body = null
): ComponentPricePointResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | int\|string | Template, Required | This is a container for one-of cases. |
| `pricePointId` | int\|string | Template, Required | This is a container for one-of cases. |
| `body` | [`?UpdateComponentPricePointRequest`](../../doc/models/update-component-price-point-request.md) | Body, Optional | - |

## Response Type

[`ComponentPricePointResponse`](../../doc/models/component-price-point-response.md)

## Example Usage

```php
$componentId = 144;

$pricePointId = 188;

$body = UpdateComponentPricePointRequestBuilder::init()
    ->pricePoint(
        UpdateComponentPricePointBuilder::init()
            ->name('Default')
            ->prices(
                [
                    UpdatePriceBuilder::init()
                        ->id(1)
                        ->endingQuantity(
                            100
                        )
                        ->unitPrice(
                            5
                        )
                        ->build(),
                    UpdatePriceBuilder::init()
                        ->id(2)
                        ->destroy(true)
                        ->build(),
                    UpdatePriceBuilder::init()
                        ->unitPrice(
                            4
                        )
                        ->startingQuantity(
                            101
                        )
                        ->build()
                ]
            )
            ->build()
    )
    ->build();

$result = $componentPricePointsController->updateComponentPricePoint(
    $componentId,
    $pricePointId,
    $body
);
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorArrayMapResponseException`](../../doc/models/error-array-map-response-exception.md) |


# Read Component Price Point

Use this endpoint to retrieve details for a specific component price point. You can achieve this by using either the component price point ID or handle.

```php
function readComponentPricePoint($componentId, $pricePointId): ComponentPricePointResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | int\|string | Template, Required | This is a container for one-of cases. |
| `pricePointId` | int\|string | Template, Required | This is a container for one-of cases. |

## Response Type

[`ComponentPricePointResponse`](../../doc/models/component-price-point-response.md)

## Example Usage

```php
$componentId = 144;

$pricePointId = 188;

$result = $componentPricePointsController->readComponentPricePoint(
    $componentId,
    $pricePointId
);
```


# Archive Component Price Point

A price point can be archived at any time. Subscriptions using a price point that has been archived will continue using it until they're moved to another price point.

```php
function archiveComponentPricePoint($componentId, $pricePointId): ComponentPricePointResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | int\|string | Template, Required | This is a container for one-of cases. |
| `pricePointId` | int\|string | Template, Required | This is a container for one-of cases. |

## Response Type

[`ComponentPricePointResponse`](../../doc/models/component-price-point-response.md)

## Example Usage

```php
$componentId = 144;

$pricePointId = 188;

$result = $componentPricePointsController->archiveComponentPricePoint(
    $componentId,
    $pricePointId
);
```

## Example Response *(as JSON)*

```json
{
  "price_point": {
    "id": 79,
    "default": false,
    "name": "Wholesale",
    "pricing_scheme": "stairstep",
    "component_id": 74,
    "handle": "wholesale-handle",
    "archived_at": "2017-07-06T15:04:00-04:00",
    "created_at": "2017-07-05T13:44:30-04:00",
    "updated_at": "2017-07-05T13:44:30-04:00",
    "prices": [
      {
        "id": 119,
        "component_id": 74,
        "starting_quantity": 1,
        "ending_quantity": 100,
        "unit_price": "5.0"
      },
      {
        "id": 120,
        "component_id": 74,
        "starting_quantity": 101,
        "ending_quantity": null,
        "unit_price": "4.0"
      }
    ]
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |


# Unarchive Component Price Point

Use this endpoint to unarchive a component price point.

```php
function unarchiveComponentPricePoint(int $componentId, int $pricePointId): ComponentPricePointResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | `int` | Template, Required | The Advanced Billing id of the component to which the price point belongs |
| `pricePointId` | `int` | Template, Required | The Advanced Billing id of the price point |

## Response Type

[`ComponentPricePointResponse`](../../doc/models/component-price-point-response.md)

## Example Usage

```php
$componentId = 222;

$pricePointId = 10;

$result = $componentPricePointsController->unarchiveComponentPricePoint(
    $componentId,
    $pricePointId
);
```

## Example Response *(as JSON)*

```json
{
  "price_point": {
    "id": 79,
    "default": false,
    "name": "Wholesale",
    "pricing_scheme": "stairstep",
    "component_id": 74,
    "handle": "wholesale-handle",
    "archived_at": null,
    "created_at": "2017-07-05T13:44:30-04:00",
    "updated_at": "2017-07-05T13:44:30-04:00",
    "prices": [
      {
        "id": 119,
        "component_id": 74,
        "starting_quantity": 1,
        "ending_quantity": 100,
        "unit_price": "5.0"
      },
      {
        "id": 120,
        "component_id": 74,
        "starting_quantity": 101,
        "ending_quantity": null,
        "unit_price": "4.0"
      }
    ]
  }
}
```


# Create Currency Prices

This endpoint allows you to create currency prices for a given currency that has been defined on the site level in your settings.

When creating currency prices, they need to mirror the structure of your primary pricing. For each price level defined on the component price point, there should be a matching price level created in the given currency.

Note: Currency Prices are not able to be created for custom price points.

```php
function createCurrencyPrices(
    int $pricePointId,
    ?CreateCurrencyPricesRequest $body = null
): ComponentCurrencyPricesResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pricePointId` | `int` | Template, Required | The Advanced Billing id of the price point |
| `body` | [`?CreateCurrencyPricesRequest`](../../doc/models/create-currency-prices-request.md) | Body, Optional | - |

## Response Type

[`ComponentCurrencyPricesResponse`](../../doc/models/component-currency-prices-response.md)

## Example Usage

```php
$pricePointId = 10;

$body = CreateCurrencyPricesRequestBuilder::init(
    [
        CreateCurrencyPriceBuilder::init()
            ->currency('EUR')
            ->price(50)
            ->priceId(20)
            ->build(),
        CreateCurrencyPriceBuilder::init()
            ->currency('EUR')
            ->price(40)
            ->priceId(21)
            ->build()
    ]
)->build();

$result = $componentPricePointsController->createCurrencyPrices(
    $pricePointId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "currency_prices": [
    {
      "id": 100,
      "currency": "EUR",
      "price": "123",
      "formatted_price": "€123,00",
      "price_id": 32669,
      "price_point_id": 25554
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorArrayMapResponseException`](../../doc/models/error-array-map-response-exception.md) |


# Update Currency Prices

This endpoint allows you to update currency prices for a given currency that has been defined on the site level in your settings.

Note: Currency Prices are not able to be updated for custom price points.

```php
function updateCurrencyPrices(
    int $pricePointId,
    ?UpdateCurrencyPricesRequest $body = null
): ComponentCurrencyPricesResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `pricePointId` | `int` | Template, Required | The Advanced Billing id of the price point |
| `body` | [`?UpdateCurrencyPricesRequest`](../../doc/models/update-currency-prices-request.md) | Body, Optional | - |

## Response Type

[`ComponentCurrencyPricesResponse`](../../doc/models/component-currency-prices-response.md)

## Example Usage

```php
$pricePointId = 10;

$body = UpdateCurrencyPricesRequestBuilder::init(
    [
        UpdateCurrencyPriceBuilder::init(
            100,
            51
        )->build(),
        UpdateCurrencyPriceBuilder::init(
            101,
            41
        )->build()
    ]
)->build();

$result = $componentPricePointsController->updateCurrencyPrices(
    $pricePointId,
    $body
);
```

## Example Response *(as JSON)*

```json
{
  "currency_prices": [
    {
      "id": 100,
      "currency": "EUR",
      "price": "123",
      "formatted_price": "€123,00",
      "price_id": 32669,
      "price_point_id": 25554
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorArrayMapResponseException`](../../doc/models/error-array-map-response-exception.md) |


# List All Component Price Points

This method allows to retrieve a list of Components Price Points belonging to a Site.

```php
function listAllComponentPricePoints(array $options): ListComponentsPricePointsResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `mInclude` | [`?string(ListComponentsPricePointsInclude)`](../../doc/models/list-components-price-points-include.md) | Query, Optional | Allows including additional data in the response. Use in query: `include=currency_prices`. |
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br>**Default**: `1`<br>**Constraints**: `>= 1` |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request. Default value is 20. The maximum allowed values is 200; any per_page value over 200 will be changed to 200.<br>Use in query `per_page=200`.<br>**Default**: `20`<br>**Constraints**: `<= 200` |
| `direction` | [`?string(SortingDirection)`](../../doc/models/sorting-direction.md) | Query, Optional | Controls the order in which results are returned.<br>Use in query `direction=asc`. |
| `filter` | [`?ListPricePointsFilter`](../../doc/models/list-price-points-filter.md) | Query, Optional | Filter to use for List PricePoints operations |

## Response Type

[`ListComponentsPricePointsResponse`](../../doc/models/list-components-price-points-response.md)

## Example Usage

```php
$collect = [
    'mInclude' => ListComponentsPricePointsInclude::CURRENCY_PRICES,
    'page' => 2,
    'perPage' => 50,
    'filter' => ListPricePointsFilterBuilder::init()
        ->startDate(DateTimeHelper::fromSimpleDate('2011-12-17'))
        ->endDate(DateTimeHelper::fromSimpleDate('2011-12-15'))
        ->startDatetime(DateTimeHelper::fromRfc3339DateTime('12/19/2011 09:15:30'))
        ->endDatetime(DateTimeHelper::fromRfc3339DateTime('06/07/2019 17:20:06'))
        ->type(
            [
                PricePointType::CATALOG,
                PricePointType::DEFAULT_,
                PricePointType::CUSTOM
            ]
        )
        ->ids(
            [
                1,
                2,
                3
            ]
        )
        ->build()
];

$result = $componentPricePointsController->listAllComponentPricePoints($collect);
```

## Example Response *(as JSON)*

```json
{
  "price_points": [
    {
      "id": 1,
      "name": "Auto-created",
      "type": "default",
      "pricing_scheme": "per_unit",
      "component_id": 2,
      "handle": "auto-created",
      "archived_at": null,
      "created_at": "2021-02-21T11:05:57-05:00",
      "updated_at": "2021-02-21T11:05:57-05:00",
      "prices": [
        {
          "id": 3,
          "component_id": 2,
          "starting_quantity": 0,
          "ending_quantity": null,
          "unit_price": "1.0",
          "price_point_id": 1,
          "formatted_unit_price": "$1.00",
          "segment_id": null
        }
      ],
      "tax_included": false
    }
  ]
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |

