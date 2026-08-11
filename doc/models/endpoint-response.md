
# Endpoint Response

## Structure

`EndpointResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `endpoint` | [`?Endpoint`](../../doc/models/endpoint.md) | Optional | - | getEndpoint(): ?Endpoint | setEndpoint(?Endpoint endpoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\EndpointResponseBuilder;
use AdvancedBillingLib\Models\Builders\EndpointBuilder;

$endpointResponse = EndpointResponseBuilder::init()
    ->endpoint(
        EndpointBuilder::init()
            ->id(202)
            ->url('url2')
            ->siteId(128)
            ->status('status0')
            ->webhookSubscriptions(
                [
                    'webhook_subscriptions4'
                ]
            )
            ->build()
    )
    ->build();
```

