
# Credit Scheme Request

## Structure

`CreditSchemeRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `creditScheme` | [`string(CreditScheme)`](../../doc/models/credit-scheme.md) | Required | - | getCreditScheme(): string | setCreditScheme(string creditScheme): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreditSchemeRequestBuilder;
use AdvancedBillingLib\Models\CreditScheme;

$creditSchemeRequest = CreditSchemeRequestBuilder::init(
    CreditScheme::CREDIT
)->build();
```

