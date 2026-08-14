
# List Service Credits Response

## Structure

`ListServiceCreditsResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `serviceCredits` | [`?(ServiceCredit1[])`](../../doc/models/service-credit-1.md) | Optional | - | getServiceCredits(): ?array | setServiceCredits(?array serviceCredits): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListServiceCreditsResponseBuilder;
use AdvancedBillingLib\Models\Builders\ServiceCredit1Builder;
use AdvancedBillingLib\Models\ServiceCreditType;

$listServiceCreditsResponse = ListServiceCreditsResponseBuilder::init()
    ->serviceCredits(
        [
            ServiceCredit1Builder::init()
                ->id(224)
                ->amountInCents(54)
                ->endingBalanceInCents(94)
                ->entryType(ServiceCreditType::CREDIT)
                ->memo('memo2')
                ->build(),
            ServiceCredit1Builder::init()
                ->id(224)
                ->amountInCents(54)
                ->endingBalanceInCents(94)
                ->entryType(ServiceCreditType::CREDIT)
                ->memo('memo2')
                ->build(),
            ServiceCredit1Builder::init()
                ->id(224)
                ->amountInCents(54)
                ->endingBalanceInCents(94)
                ->entryType(ServiceCreditType::CREDIT)
                ->memo('memo2')
                ->build()
        ]
    )
    ->build();
```

