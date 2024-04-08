
# Product

## Structure

`Product`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | The product name | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | The product API handle | getHandle(): ?string | setHandle(?string handle): void |
| `description` | `?string` | Optional | The product description | getDescription(): ?string | setDescription(?string description): void |
| `accountingCode` | `?string` | Optional | E.g. Internal ID or SKU Number | getAccountingCode(): ?string | setAccountingCode(?string accountingCode): void |
| `requestCreditCard` | `?bool` | Optional | Deprecated value that can be ignored unless you have legacy hosted pages. For Public Signup Page users, please read this attribute from under the signup page. | getRequestCreditCard(): ?bool | setRequestCreditCard(?bool requestCreditCard): void |
| `expirationInterval` | `?int` | Optional | A numerical interval for the length a subscription to this product will run before it expires. See the description of interval for a description of how this value is coupled with an interval unit to calculate the full interval | getExpirationInterval(): ?int | setExpirationInterval(?int expirationInterval): void |
| `expirationIntervalUnit` | [`?string(ExtendedIntervalUnit)`](../../doc/models/extended-interval-unit.md) | Optional | A string representing the expiration interval unit for this product, either month or day | getExpirationIntervalUnit(): ?string | setExpirationIntervalUnit(?string expirationIntervalUnit): void |
| `createdAt` | `?DateTime` | Optional | Timestamp indicating when this product was created | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | Timestamp indicating when this product was last updated | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `priceInCents` | `?int` | Optional | The product price, in integer cents | getPriceInCents(): ?int | setPriceInCents(?int priceInCents): void |
| `interval` | `?int` | Optional | The numerical interval. i.e. an interval of ‘30’ coupled with an interval_unit of day would mean this product would renew every 30 days | getInterval(): ?int | setInterval(?int interval): void |
| `intervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the interval unit for this product, either month or day | getIntervalUnit(): ?string | setIntervalUnit(?string intervalUnit): void |
| `initialChargeInCents` | `?int` | Optional | The up front charge you have specified. | getInitialChargeInCents(): ?int | setInitialChargeInCents(?int initialChargeInCents): void |
| `trialPriceInCents` | `?int` | Optional | The price of the trial period for a subscription to this product, in integer cents. | getTrialPriceInCents(): ?int | setTrialPriceInCents(?int trialPriceInCents): void |
| `trialInterval` | `?int` | Optional | A numerical interval for the length of the trial period of a subscription to this product. See the description of interval for a description of how this value is coupled with an interval unit to calculate the full interval | getTrialInterval(): ?int | setTrialInterval(?int trialInterval): void |
| `trialIntervalUnit` | [`?string(IntervalUnit)`](../../doc/models/interval-unit.md) | Optional | A string representing the trial interval unit for this product, either month or day | getTrialIntervalUnit(): ?string | setTrialIntervalUnit(?string trialIntervalUnit): void |
| `archivedAt` | `?DateTime` | Optional | Timestamp indicating when this product was archived | getArchivedAt(): ?\DateTime | setArchivedAt(?\DateTime archivedAt): void |
| `requireCreditCard` | `?bool` | Optional | Boolean that controls whether a payment profile is required to be entered for customers wishing to sign up on this product. | getRequireCreditCard(): ?bool | setRequireCreditCard(?bool requireCreditCard): void |
| `returnParams` | `?string` | Optional | - | getReturnParams(): ?string | setReturnParams(?string returnParams): void |
| `taxable` | `?bool` | Optional | - | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `updateReturnUrl` | `?string` | Optional | The url to which a customer will be returned after a successful account update | getUpdateReturnUrl(): ?string | setUpdateReturnUrl(?string updateReturnUrl): void |
| `initialChargeAfterTrial` | `?bool` | Optional | - | getInitialChargeAfterTrial(): ?bool | setInitialChargeAfterTrial(?bool initialChargeAfterTrial): void |
| `versionNumber` | `?int` | Optional | The version of the product | getVersionNumber(): ?int | setVersionNumber(?int versionNumber): void |
| `updateReturnParams` | `?string` | Optional | The parameters will append to the url after a successful account update. See [help documentation](https://help.chargify.com/products/product-editing.html#return-parameters-after-account-update) | getUpdateReturnParams(): ?string | setUpdateReturnParams(?string updateReturnParams): void |
| `productFamily` | [`?ProductFamily`](../../doc/models/product-family.md) | Optional | - | getProductFamily(): ?ProductFamily | setProductFamily(?ProductFamily productFamily): void |
| `publicSignupPages` | [`?(PublicSignupPage[])`](../../doc/models/public-signup-page.md) | Optional | - | getPublicSignupPages(): ?array | setPublicSignupPages(?array publicSignupPages): void |
| `productPricePointName` | `?string` | Optional | - | getProductPricePointName(): ?string | setProductPricePointName(?string productPricePointName): void |
| `requestBillingAddress` | `?bool` | Optional | A boolean indicating whether to request a billing address on any Self-Service Pages that are used by subscribers of this product. | getRequestBillingAddress(): ?bool | setRequestBillingAddress(?bool requestBillingAddress): void |
| `requireBillingAddress` | `?bool` | Optional | A boolean indicating whether a billing address is required to add a payment profile, especially at signup. | getRequireBillingAddress(): ?bool | setRequireBillingAddress(?bool requireBillingAddress): void |
| `requireShippingAddress` | `?bool` | Optional | A boolean indicating whether a shipping address is required for the customer, especially at signup. | getRequireShippingAddress(): ?bool | setRequireShippingAddress(?bool requireShippingAddress): void |
| `taxCode` | `?string` | Optional | A string representing the tax code related to the product type. This is especially important when using the Avalara service to tax based on locale. This attribute has a max length of 10 characters. | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `defaultProductPricePointId` | `?int` | Optional | - | getDefaultProductPricePointId(): ?int | setDefaultProductPricePointId(?int defaultProductPricePointId): void |
| `useSiteExchangeRate` | `?bool` | Optional | - | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `itemCategory` | `?string` | Optional | One of the following: Business Software, Consumer Software, Digital Services, Physical Goods, Other | getItemCategory(): ?string | setItemCategory(?string itemCategory): void |
| `productPricePointId` | `?int` | Optional | - | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `productPricePointHandle` | `?string` | Optional | - | getProductPricePointHandle(): ?string | setProductPricePointHandle(?string productPricePointHandle): void |

## Example (as JSON)

```json
{
  "id": 180,
  "name": "name4",
  "handle": "handle0",
  "description": "description4",
  "accounting_code": "accounting_code0"
}
```

