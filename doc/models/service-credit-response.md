
# Service Credit Response

## Structure

`ServiceCreditResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `serviceCredit` | [`ServiceCredit`](../../doc/models/service-credit.md) | Required | - | getServiceCredit(): ServiceCredit | setServiceCredit(ServiceCredit serviceCredit): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ServiceCreditResponseBuilder;
use AdvancedBillingLib\Models\Builders\ServiceCreditBuilder;
use AdvancedBillingLib\Models\ServiceCreditType;

$serviceCreditResponse = ServiceCreditResponseBuilder::init(
    ServiceCreditBuilder::init()
        ->id(38)
        ->amountInCents(124)
        ->endingBalanceInCents(164)
        ->entryType(ServiceCreditType::CREDIT)
        ->memo('memo0')
        ->build()
)->build();
```

