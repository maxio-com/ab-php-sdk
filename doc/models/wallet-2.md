
# Wallet 2

## Structure

`Wallet2`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | A merchant-facing label for the wallet. Surrounding spaces are stripped; a blank or `null` value clears it.<br><br>**Constraints**: *Maximum Length*: `255` | getName(): ?string | setName(?string name): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\Wallet2Builder;

$wallet2 = Wallet2Builder::init()
    ->name('name2')
    ->build();
```

