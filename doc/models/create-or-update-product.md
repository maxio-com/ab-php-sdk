
# Create or Update Product

## Structure

`CreateOrUpdateProduct`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | The product name | getName(): string | setName(string name): void |
| `handle` | `?string` | Optional | The product API handle | getHandle(): ?string | setHandle(?string handle): void |
| `description` | `string` | Required | The product description | getDescription(): string | setDescription(string description): void |
| `accountingCode` | `?string` | Optional | E.g. Internal ID or SKU Number | getAccountingCode(): ?string | setAccountingCode(?string accountingCode): void |
| `requireCreditCard` | `?bool` | Optional | Deprecated value that can be ignored unless you have legacy hosted pages. For Public Signup Page users, please read this attribute from under the signup page. | getRequireCreditCard(): ?bool | setRequireCreditCard(?bool requireCreditCard): void |
| `priceInCents` | `int` | Required | The product price, in integer cents | getPriceInCents(): int | setPriceInCents(int priceInCents): void |
| `interval` | `int` | Required | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this product would renew every 30 days | getInterval(): int | setInterval(int interval): void |
| `intervalUnit` | [`string(IntervalUnit)`](../../doc/models/interval-unit.md) | Required | A string representing the interval unit for this product, either month or day | getIntervalUnit(): string | setIntervalUnit(string intervalUnit): void |
| `trialPriceInCents` | `?int` | Optional | The product trial price, in integer cents | getTrialPriceInCents(): ?int | setTrialPriceInCents(?int trialPriceInCents): void |
| `trialInterval` | `?int` | Optional | The numerical trial interval. i.e. an interval of ‘30’ coupled with a trial_interval_unit of day would mean this product trial would last 30 days. | getTrialInterval(): ?int | setTrialInterval(?int trialInterval): void |
| `trialIntervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the trial interval unit for this product, either month or day | getTrialIntervalUnit(): ?string | setTrialIntervalUnit(?string trialIntervalUnit): void |
| `trialType` | `?string` | Optional | - | getTrialType(): ?string | setTrialType(?string trialType): void |
| `expirationInterval` | `?int` | Optional | The numerical expiration interval. i.e. an expiration_interval of ‘30’ coupled with an expiration_interval_unit of day would mean this product would expire after 30 days. | getExpirationInterval(): ?int | setExpirationInterval(?int expirationInterval): void |
| `expirationIntervalUnit` | [`?string(ExpirationIntervalUnit)`](../../doc/models/expiration-interval-unit.md) | Optional | A string representing the expiration interval unit for this product, either month, day or never | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |
| `autoCreateSignupPage` | `?bool` | Optional | - | getAutoCreateSignupPage(): ?bool | setAutoCreateSignupPage(?bool autoCreateSignupPage): void |
| `taxCode` | `?string` | Optional | A string representing the tax code related to the product type. This is especially important when using the Avalara service to tax based on locale. This attribute has a max length of 10 characters.<br>**Constraints**: *Maximum Length*: `10` | getTaxCode(): ?string | setTaxCode(?string taxCode): void |

## Example (as JSON)

```json
{
  "name": "name8",
  "handle": "handle4",
  "description": "description8",
  "accounting_code": "accounting_code4",
  "require_credit_card": false,
  "price_in_cents": 190,
  "interval": 174,
  "interval_unit": "day",
  "trial_price_in_cents": 22,
  "trial_interval": 76
}
```

