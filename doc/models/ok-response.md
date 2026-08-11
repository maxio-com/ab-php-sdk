
# Ok Response

## Structure

`OkResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ok` | `?string` | Optional | - | getOk(): ?string | setOk(?string ok): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\OkResponseBuilder;

$okResponse = OkResponseBuilder::init()
    ->ok('ok8')
    ->build();
```

