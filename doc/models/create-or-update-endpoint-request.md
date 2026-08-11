
# Create or Update Endpoint Request

Used to Create or Update Endpoint.

## Structure

`CreateOrUpdateEndpointRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `endpoint` | [`CreateOrUpdateEndpoint`](../../doc/models/create-or-update-endpoint.md) | Required | Used to Create or Update Endpoint. | getEndpoint(): CreateOrUpdateEndpoint | setEndpoint(CreateOrUpdateEndpoint endpoint): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateOrUpdateEndpointRequestBuilder;
use AdvancedBillingLib\Models\Builders\CreateOrUpdateEndpointBuilder;
use AdvancedBillingLib\Models\WebhookSubscription;

$createOrUpdateEndpointRequest = CreateOrUpdateEndpointRequestBuilder::init(
    CreateOrUpdateEndpointBuilder::init(
        'url2',
        [
            WebhookSubscription::STATEMENT_CLOSED
        ]
    )->build()
)->build();
```

