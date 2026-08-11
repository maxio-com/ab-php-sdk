
# Origin Invoice

## Structure

`OriginInvoice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `uid` | `?string` | Optional | The UID of the invoice serving as an origin invoice. | getUid(): ?string | setUid(?string uid): void |
| `number` | `?string` | Optional | The number of the invoice serving as an origin invoice. | getNumber(): ?string | setNumber(?string number): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\OriginInvoiceBuilder;

$originInvoice = OriginInvoiceBuilder::init()
    ->uid('uid8')
    ->number('number4')
    ->build();
```

