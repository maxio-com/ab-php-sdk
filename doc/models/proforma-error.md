
# Proforma Error

## Structure

`ProformaError`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `subscription` | [`?BaseStringError`](../../doc/models/base-string-error.md) | Optional | The error is base if it is not directly associated with a single attribute. | getSubscription(): ?BaseStringError | setSubscription(?BaseStringError subscription): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ProformaErrorBuilder;
use AdvancedBillingLib\Models\Builders\BaseStringErrorBuilder;

$proformaError = ProformaErrorBuilder::init()
    ->subscription(
        BaseStringErrorBuilder::init()
            ->base(
                [
                    'base3',
                    'base4'
                ]
            )
            ->build()
    )
    ->build();
```

