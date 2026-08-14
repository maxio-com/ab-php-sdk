
# Scheduled Renewal Product Price Point

Custom pricing for a product within a scheduled renewal.

## Structure

`ScheduledRenewalProductPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | (Optional) | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | (Optional) | getHandle(): ?string | setHandle(?string handle): void |
| `priceInCents` | string\|int | Required | This is a container for one-of cases. | getPriceInCents(): | setPriceInCents( priceInCents): void |
| `interval` | string\|int | Required | This is a container for one-of cases. | getInterval(): | setInterval( interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Required | Required if using `custom_price` attribute. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `taxIncluded` | `?bool` | Optional | (Optional) | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |
| `initialChargeInCents` | `?int` | Optional | The product price point initial charge, in integer cents. | getInitialChargeInCents(): ?int | setInitialChargeInCents(?int initialChargeInCents): void |
| `expirationInterval` | `?int` | Optional | The numerical expiration interval. e.g., an expiration_interval of ‘30’ coupled with an expiration_interval_unit of day would mean this product price point would expire after 30 days. | getExpirationInterval(): ?int | setExpirationInterval(?int expirationInterval): void |
| `expirationIntervalUnit` | [`?string(ExpirationIntervalUnit)`](../../doc/models/expiration-interval-unit.md) | Optional | A string representing the expiration interval unit for this product price point, either month, day or never | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ScheduledRenewalProductPricePointBuilder;
use AdvancedBillingLib\Models\IntervalUnit;

$scheduledRenewalProductPricePoint = ScheduledRenewalProductPricePointBuilder::init(
    'String1',
    'String7'
)
    ->name('name6')
    ->handle('handle2')
    ->intervalUnit(IntervalUnit::DAY)
    ->taxIncluded(false)
    ->initialChargeInCents(218)
    ->expirationInterval(240)
    ->build();
```

