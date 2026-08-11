
# Create Product Price Point

## Structure

`CreateProductPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The product price point name | getName(): string | setName(string name): void |
| `handle` | `?string` | Optional | The product price point API handle | getHandle(): ?string | setHandle(?string handle): void |
| `priceInCents` | `int` | Required | The product price point price, in integer cents | getPriceInCents(): int | setPriceInCents(int priceInCents): void |
| `interval` | `int` | Required | The numerical interval. e.g., an interval of ‘30’ coupled with an interval_unit of day would mean this product price point would renew every 30 days. | getInterval(): int | setInterval(int interval): void |
| `intervalUnit` | [`string(IntervalUnit)`](../../doc/models/interval-unit.md) | Required | A string representing the interval unit for this product price point, either month or day | getIntervalUnit(): string | setIntervalUnit(string intervalUnit): void |
| `trialPriceInCents` | `?int` | Optional | The product price point trial price, in integer cents | getTrialPriceInCents(): ?int | setTrialPriceInCents(?int trialPriceInCents): void |
| `trialInterval` | `?int` | Optional | The numerical trial interval. e.g., an interval of ‘30’ coupled with a trial_interval_unit of day would mean this product price point trial would last 30 days. | getTrialInterval(): ?int | setTrialInterval(?int trialInterval): void |
| `trialIntervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the trial interval unit for this product price point, either month or day | getTrialIntervalUnit(): ?string | setTrialIntervalUnit(?string trialIntervalUnit): void |
| `trialType` | [`?string(TrialType)`](../../doc/models/trial-type.md) | Optional | Indicates how a trial is handled when the trial period ends and there is no credit card on file. For `no_obligation`, the subscription transitions to a Trial Ended state. Maxio will not send any emails or statements. For `payment_expected`, the subscription transitions to a Past Due state. Maxio will send normal dunning emails and statements according to your other settings. | getTrialType(): ?string | setTrialType(?string trialType): void |
| `initialChargeInCents` | `?int` | Optional | The product price point initial charge, in integer cents | getInitialChargeInCents(): ?int | setInitialChargeInCents(?int initialChargeInCents): void |
| `initialChargeAfterTrial` | `?bool` | Optional | - | getInitialChargeAfterTrial(): ?bool | setInitialChargeAfterTrial(?bool initialChargeAfterTrial): void |
| `expirationInterval` | `?int` | Optional | The numerical expiration interval. e.g., an expiration_interval of ‘30’ coupled with an expiration_interval_unit of day would mean this product price point would expire after 30 days. | getExpirationInterval(): ?int | setExpirationInterval(?int expirationInterval): void |
| `expirationIntervalUnit` | [`?string(ExpirationIntervalUnit)`](../../doc/models/expiration-interval-unit.md) | Optional | A string representing the expiration interval unit for this product price point, either month, day or never | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether or not to use the site's exchange rate or define your own pricing when your site has multiple currencies defined.<br><br>**Default**: `true` | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateProductPricePointBuilder;
use AdvancedBillingLib\Models\IntervalUnit;
use AdvancedBillingLib\Models\TrialType;

$createProductPricePoint = CreateProductPricePointBuilder::init(
    'name6',
    180,
    60,
    IntervalUnit::DAY
)
    ->handle('handle2')
    ->trialPriceInCents(92)
    ->trialInterval(218)
    ->trialIntervalUnit(IntervalUnit::DAY)
    ->trialType(TrialType::NO_OBLIGATION)
    ->useSiteExchangeRate(true)
    ->build();
```

