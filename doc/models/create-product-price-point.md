
# Create Product Price Point

## Structure

`CreateProductPricePoint`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The product price point name | getName(): string | setName(string name): void |
| `handle` | `?string` | Optional | The product price point API handle | getHandle(): ?string | setHandle(?string handle): void |
| `priceInCents` | `int` | Required | The product price point price, in integer cents | getPriceInCents(): int | setPriceInCents(int priceInCents): void |
| `interval` | `int` | Required | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this product price point would renew every 30 days | getInterval(): int | setInterval(int interval): void |
| `intervalUnit` | [`string(IntervalUnit)`](../../doc/models/interval-unit.md) | Required | A string representing the interval unit for this product price point, either month or day | getIntervalUnit(): string | setIntervalUnit(string intervalUnit): void |
| `trialPriceInCents` | `?int` | Optional | The product price point trial price, in integer cents | getTrialPriceInCents(): ?int | setTrialPriceInCents(?int trialPriceInCents): void |
| `trialInterval` | `?int` | Optional | The numerical trial interval. i.e. an interval of ‘30’ coupled with a trial_interval_unit of day would mean this product price point trial would last 30 days. | getTrialInterval(): ?int | setTrialInterval(?int trialInterval): void |
| `trialIntervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the trial interval unit for this product price point, either month or day | getTrialIntervalUnit(): ?string | setTrialIntervalUnit(?string trialIntervalUnit): void |
| `trialType` | `?string` | Optional | - | getTrialType(): ?string | setTrialType(?string trialType): void |
| `initialChargeInCents` | `?int` | Optional | The product price point initial charge, in integer cents | getInitialChargeInCents(): ?int | setInitialChargeInCents(?int initialChargeInCents): void |
| `initialChargeAfterTrial` | `?bool` | Optional | - | getInitialChargeAfterTrial(): ?bool | setInitialChargeAfterTrial(?bool initialChargeAfterTrial): void |
| `expirationInterval` | `?int` | Optional | The numerical expiration interval. i.e. an expiration_interval of ‘30’ coupled with an expiration_interval_unit of day would mean this product price point would expire after 30 days. | getExpirationInterval(): ?int | setExpirationInterval(?int expirationInterval): void |
| `expirationIntervalUnit` | [`?string(ExpirationIntervalUnit)`](../../doc/models/expiration-interval-unit.md) | Optional | A string representing the expiration interval unit for this product price point, either month, day or never | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |
| `useSiteExchangeRate` | `?bool` | Optional | Whether or not to use the site's exchange rate or define your own pricing when your site has multiple currencies defined.<br><br>**Default**: `true` | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |

## Example (as JSON)

```json
{
  "name": "name6",
  "price_in_cents": 216,
  "interval": 200,
  "interval_unit": "day",
  "use_site_exchange_rate": true,
  "handle": "handle2",
  "trial_price_in_cents": 48,
  "trial_interval": 102,
  "trial_interval_unit": "day",
  "trial_type": "trial_type0"
}
```

