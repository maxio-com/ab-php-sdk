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
* [Clone Component Price Point](../../doc/controllers/component-price-points.md#clone-component-price-point)
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

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->promoteComponentPricePointToDefault(
        $componentId,
        $pricePointId
    );
    echo 'ComponentResponse:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

Creates a price point for an existing component.

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
            )
                ->endingQuantity(
                    '200'
                )
                ->build()
        ]
    )
        ->handle('wholesale-handle')
        ->useSiteExchangeRate(false)
        ->build()
)->build();

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->createComponentPricePoint(
        $componentId,
        $body
    );
    echo 'ComponentPricePointResponse:';
    var_dump($result);
} catch (ErrorArrayMapResponseException $exp) {
    echo 'Caught ErrorArrayMapResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorArrayMapResponseException`](../../doc/models/error-array-map-response-exception.md) |


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
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br><br>**Default**: `1`<br><br>**Constraints**: `>= 1` |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request. Default value is 20. The maximum allowed values is 200; any per_page value over 200 will be changed to 200.<br>Use in query `per_page=200`.<br><br>**Default**: `20`<br><br>**Constraints**: `<= 200` |
| `filterType` | [`?(string(PricePointType)[])`](../../doc/models/price-point-type.md) | Query, Optional | Use in query: `filter[type]=catalog,default`. |

## Response Type

[`ComponentPricePointsResponse`](../../doc/models/component-price-points-response.md)

## Example Usage

```php
$collect = [
    'componentId' => 222,
    'page' => 1,
    'perPage' => 50,
    'filterType' => Liquid error: Value cannot be null. (Parameter 'key')
];

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->listComponentPricePoints($collect);
    echo 'ComponentPricePointsResponse:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->bulkCreateComponentPricePoints(
        $componentId,
        $body
    );
    echo 'ComponentPricePointsResponse:';
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

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |


# Clone Component Price Point

Clones a component price point. Custom price points (tied to a specific subscription) cannot be cloned. The following attributes are copied from the source price point:

- Pricing scheme
- All price tiers (with starting/ending quantities and unit prices)
- Tax included setting
- Currency prices (if definitive pricing is set)
- Overage pricing (for prepaid usage components)
- Interval settings (if multi-frequency is enabled)
- Event-based billing segments (if applicable)

```php
function cloneComponentPricePoint(
    $componentId,
    $pricePointId,
    ?CloneComponentPricePointRequest $body = null
): ComponentPricePointCurrencyOverageResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | int\|string | Template, Required | This is a container for one-of cases. |
| `pricePointId` | int\|string | Template, Required | This is a container for one-of cases. |
| `body` | [`?CloneComponentPricePointRequest`](../../doc/models/clone-component-price-point-request.md) | Body, Optional | - |

## Response Type

[`ComponentPricePointCurrencyOverageResponse`](../../doc/models/component-price-point-currency-overage-response.md)

## Example Usage

```php
$componentId = 144;

$pricePointId = 188;

$body = CloneComponentPricePointRequestBuilder::init(
    CloneComponentPricePointBuilder::init(
        'Pro Usage Tiered Clone'
    )->build()
)->build();

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->cloneComponentPricePoint(
        $componentId,
        $pricePointId,
        $body
    );
    echo 'ComponentPricePointCurrencyOverageResponse:';
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
  "price_point": {
    "id": 9012,
    "name": "Pro Usage Tiered Clone",
    "type": "catalog",
    "pricing_scheme": "tiered",
    "component_id": 1234,
    "handle": "pro-usage-tiered-clone",
    "archived_at": null,
    "created_at": "2024-05-01T12:34:56-04:00",
    "updated_at": "2024-05-01T12:34:56-04:00",
    "use_site_exchange_rate": false,
    "currency_prices": [
      {
        "id": 3001,
        "currency": "EUR",
        "price": "9.99",
        "formatted_price": "€9.99",
        "price_id": 4001,
        "price_point_id": 9012
      }
    ],
    "currency_overage_prices": [
      {
        "id": 3002,
        "currency": "EUR",
        "price": "2.50",
        "formatted_price": "€2.50",
        "price_id": 4002,
        "price_point_id": 9012
      }
    ],
    "renew_prepaid_allocation": true,
    "rollover_prepaid_remainder": false,
    "expiration_interval": 1,
    "expiration_interval_unit": "month",
    "overage_pricing_scheme": "tiered",
    "subscription_id": 4321,
    "prices": [
      {
        "id": 4001,
        "component_id": 1234,
        "starting_quantity": 1,
        "ending_quantity": 100,
        "unit_price": "9.99",
        "price_point_id": 9012,
        "formatted_unit_price": "$9.99",
        "segment_id": null
      }
    ],
    "overage_prices": [
      {
        "id": 4002,
        "component_id": 1234,
        "starting_quantity": 101,
        "ending_quantity": null,
        "unit_price": "2.50",
        "price_point_id": 9012,
        "formatted_unit_price": "$2.50",
        "segment_id": null
      }
    ],
    "tax_included": false,
    "interval": 1,
    "interval_unit": "month"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | `ApiException` |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorListResponseException`](../../doc/models/error-list-response-exception.md) |


# Update Component Price Point

When updating a price point, prices can be updated as well by creating new prices or editing / removing existing ones.

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

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->updateComponentPricePoint(
        $componentId,
        $pricePointId,
        $body
    );
    echo 'ComponentPricePointResponse:';
    var_dump($result);
} catch (ErrorArrayMapResponseException $exp) {
    echo 'Caught ErrorArrayMapResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 422 | Unprocessable Entity (WebDAV) | [`ErrorArrayMapResponseException`](../../doc/models/error-array-map-response-exception.md) |


# Read Component Price Point

Use this endpoint to retrieve details for a specific component price point. You can achieve this by using either the component price point ID or handle.

```php
function readComponentPricePoint(
    $componentId,
    $pricePointId,
    ?bool $currencyPrices = null
): ComponentPricePointCurrencyOverageResponse
```

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `componentId` | int\|string | Template, Required | This is a container for one-of cases. |
| `pricePointId` | int\|string | Template, Required | This is a container for one-of cases. |
| `currencyPrices` | `?bool` | Query, Optional | Include an array of currency price data |

## Response Type

[`ComponentPricePointCurrencyOverageResponse`](../../doc/models/component-price-point-currency-overage-response.md)

## Example Usage

```php
$componentId = 144;

$pricePointId = 188;

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->readComponentPricePoint(
        $componentId,
        $pricePointId
    );
    echo 'ComponentPricePointCurrencyOverageResponse:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->archiveComponentPricePoint(
        $componentId,
        $pricePointId
    );
    echo 'ComponentPricePointResponse:';
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

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->unarchiveComponentPricePoint(
        $componentId,
        $pricePointId
    );
    echo 'ComponentPricePointResponse:';
    var_dump($result);
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->createCurrencyPrices(
        $pricePointId,
        $body
    );
    echo 'ComponentCurrencyPricesResponse:';
    var_dump($result);
} catch (ErrorArrayMapResponseException $exp) {
    echo 'Caught ErrorArrayMapResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->updateCurrencyPrices(
        $pricePointId,
        $body
    );
    echo 'ComponentCurrencyPricesResponse:';
    var_dump($result);
} catch (ErrorArrayMapResponseException $exp) {
    echo 'Caught ErrorArrayMapResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
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
| `page` | `?int` | Query, Optional | Result records are organized in pages. By default, the first page of results is displayed. The page parameter specifies a page number of results to fetch. You can start navigating through the pages to consume the results. You do this by passing in a page parameter. Retrieve the next page by adding ?page=2 to the query string. If there are no results to return, then an empty result set will be returned.<br>Use in query `page=1`.<br><br>**Default**: `1`<br><br>**Constraints**: `>= 1` |
| `perPage` | `?int` | Query, Optional | This parameter indicates how many records to fetch in each request. Default value is 20. The maximum allowed values is 200; any per_page value over 200 will be changed to 200.<br>Use in query `per_page=200`.<br><br>**Default**: `20`<br><br>**Constraints**: `<= 200` |
| `direction` | [`?string(SortingDirection)`](../../doc/models/sorting-direction.md) | Query, Optional | Controls the order in which results are returned.<br>Use in query `direction=asc`. |
| `filter` | [`?ListPricePointsFilter`](../../doc/models/list-price-points-filter.md) | Query, Optional | Filter to use for List PricePoints operations |

## Response Type

[`ListComponentsPricePointsResponse`](../../doc/models/list-components-price-points-response.md)

## Example Usage

```php
$collect = [
    'mInclude' => ListComponentsPricePointsInclude::CURRENCY_PRICES,
    'page' => 1,
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

$componentPricePointsController = $client->getComponentPricePointsController();

try {
    $result = $componentPricePointsController->listAllComponentPricePoints($collect);
    echo 'ListComponentsPricePointsResponse:';
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

