
# List Subscription Components for Site Filter

## Structure

`ListSubscriptionComponentsForSiteFilter`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `currencies` | `?(string[])` | Optional | Allows fetching components allocation with matching currency based on provided values. Use in query `filter[currencies]=USD,EUR`.<br><br>**Constraints**: *Minimum Items*: `1` | getCurrencies(): ?array | setCurrencies(?array currencies): void |
| `useSiteExchangeRate` | `?bool` | Optional | Allows fetching components allocation with matching use_site_exchange_rate based on provided value. Use in query `filter[use_site_exchange_rate]=true`. | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `subscription` | [`?SubscriptionFilter`](../../doc/models/subscription-filter.md) | Optional | Nested filter used for List Subscription Components For Site Filter | getSubscription(): ?SubscriptionFilter | setSubscription(?SubscriptionFilter subscription): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListSubscriptionComponentsForSiteFilterBuilder;
use AdvancedBillingLib\Models\Builders\SubscriptionFilterBuilder;
use AdvancedBillingLib\Models\SubscriptionStateFilter;
use AdvancedBillingLib\Models\SubscriptionListDateField;
use AdvancedBillingLib\Utils\DateTimeHelper;

$listSubscriptionComponentsForSiteFilter = ListSubscriptionComponentsForSiteFilterBuilder::init()
    ->currencies(
        [
            'EUR',
            'USD'
        ]
    )
    ->useSiteExchangeRate(false)
    ->subscription(
        SubscriptionFilterBuilder::init()
            ->states(
                [
                    SubscriptionStateFilter::TRIALING,
                    SubscriptionStateFilter::UNPAID,
                    SubscriptionStateFilter::ACTIVE
                ]
            )
            ->dateField(SubscriptionListDateField::UPDATED_AT)
            ->startDate(DateTimeHelper::fromSimpleDate('2016-03-13'))
            ->endDate(DateTimeHelper::fromSimpleDate('2016-03-13'))
            ->startDatetime(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
            ->build()
    )
    ->build();
```

