
# Subscription Custom Price

(Optional) Used in place of `product_price_point_id` to define a custom price point unique to the subscription. A subscription can have up to 30 custom price points. Exceeding this limit will result in an API error.

## Structure

`SubscriptionCustomPrice`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | (Optional) | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | (Optional) | getHandle(): ?string | setHandle(?string handle): void |
| `priceInCents` | string\|int | Required | This is a container for one-of cases. | getPriceInCents(): | setPriceInCents( priceInCents): void |
| `interval` | string\|int | Required | This is a container for one-of cases. | getInterval(): | setInterval( interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Required | Required if using `custom_price` attribute. | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `trialPriceInCents` | string\|int\|null | Optional | This is a container for one-of cases. | getTrialPriceInCents(): | setTrialPriceInCents( trialPriceInCents): void |
| `trialInterval` | string\|int\|null | Optional | This is a container for one-of cases. | getTrialInterval(): | setTrialInterval( trialInterval): void |
| `trialIntervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | (Optional) | getTrialIntervalUnit(): ?string | setTrialIntervalUnit(?string trialIntervalUnit): void |
| `trialType` | [`?string(TrialType)`](../../doc/models/trial-type.md) | Optional | Indicates how a trial is handled when the trial period ends and there is no credit card on file. For `no_obligation`, the subscription transitions to a Trial Ended state. Maxio will not send any emails or statements. For `payment_expected`, the subscription transitions to a Past Due state. Maxio will send normal dunning emails and statements according to your other settings. | getTrialType(): ?string | setTrialType(?string trialType): void |
| `initialChargeInCents` | string\|int\|null | Optional | This is a container for one-of cases. | getInitialChargeInCents(): | setInitialChargeInCents( initialChargeInCents): void |
| `initialChargeAfterTrial` | `?bool` | Optional | (Optional) | getInitialChargeAfterTrial(): ?bool | setInitialChargeAfterTrial(?bool initialChargeAfterTrial): void |
| `expirationInterval` | string\|int\|null | Optional | This is a container for one-of cases. | getExpirationInterval(): | setExpirationInterval( expirationInterval): void |
| `expirationIntervalUnit` | [`?string(ExpirationIntervalUnit)`](../../doc/models/expiration-interval-unit.md) | Optional | (Optional) | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |
| `taxIncluded` | `?bool` | Optional | (Optional) | getTaxIncluded(): ?bool | setTaxIncluded(?bool taxIncluded): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SubscriptionCustomPriceBuilder;
use AdvancedBillingLib\Models\IntervalUnit;

$subscriptionCustomPrice = SubscriptionCustomPriceBuilder::init(
    'String5',
    'String1'
)
    ->name('name2')
    ->handle('handle8')
    ->intervalUnit(IntervalUnit::DAY)
    ->trialPriceInCents(
        'String5'
    )
    ->trialInterval(
        'String9'
    )
    ->trialIntervalUnit(IntervalUnit::DAY)
    ->build();
```

