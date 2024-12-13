
# Coupon

## Structure

`Coupon`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `amount` | `?float` | Optional | - | getAmount(): ?float | setAmount(?float amount): void |
| `amountInCents` | `?int` | Optional | - | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `productFamilyId` | `?int` | Optional | - | getProductFamilyId(): ?int | setProductFamilyId(?int productFamilyId): void |
| `productFamilyName` | `?string` | Optional | - | getProductFamilyName(): ?string | setProductFamilyName(?string productFamilyName): void |
| `startDate` | `?DateTime` | Optional | - | getStartDate(): ?\DateTime | setStartDate(?\DateTime startDate): void |
| `endDate` | `?DateTime` | Optional | After the given time, this coupon code will be invalid for new signups. Recurring discounts started before this date will continue to recur even after this date. | getEndDate(): ?\DateTime | setEndDate(?\DateTime endDate): void |
| `percentage` | `?string` | Optional | - | getPercentage(): ?string | setPercentage(?string percentage): void |
| `recurring` | `?bool` | Optional | - | getRecurring(): ?bool | setRecurring(?bool recurring): void |
| `recurringScheme` | [`?string(RecurringScheme)`](../../doc/models/recurring-scheme.md) | Optional | - | getRecurringScheme(): ?string | setRecurringScheme(?string recurringScheme): void |
| `durationPeriodCount` | `?int` | Optional | - | getDurationPeriodCount(): ?int | setDurationPeriodCount(?int durationPeriodCount): void |
| `durationInterval` | `?int` | Optional | - | getDurationInterval(): ?int | setDurationInterval(?int durationInterval): void |
| `durationIntervalUnit` | `?string` | Optional | - | getDurationIntervalUnit(): ?string | setDurationIntervalUnit(?string durationIntervalUnit): void |
| `durationIntervalSpan` | `?string` | Optional | - | getDurationIntervalSpan(): ?string | setDurationIntervalSpan(?string durationIntervalSpan): void |
| `allowNegativeBalance` | `?bool` | Optional | If set to true, discount is not limited (credits will carry forward to next billing). | getAllowNegativeBalance(): ?bool | setAllowNegativeBalance(?bool allowNegativeBalance): void |
| `archivedAt` | `?DateTime` | Optional | - | getArchivedAt(): ?\DateTime | setArchivedAt(?\DateTime archivedAt): void |
| `conversionLimit` | `?string` | Optional | - | getConversionLimit(): ?string | setConversionLimit(?string conversionLimit): void |
| `stackable` | `?bool` | Optional | A stackable coupon can be combined with other coupons on a Subscription. | getStackable(): ?bool | setStackable(?bool stackable): void |
| `compoundingStrategy` | [`?string(CompoundingStrategy)`](../../doc/models/compounding-strategy.md) | Optional | Applicable only to stackable coupons. For `compound`, Percentage-based discounts will be calculated against the remaining price, after prior discounts have been calculated. For `full-price`, Percentage-based discounts will always be calculated against the original item price, before other discounts are applied. | getCompoundingStrategy(): ?string | setCompoundingStrategy(?string compoundingStrategy): void |
| `useSiteExchangeRate` | `?bool` | Optional | - | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `updatedAt` | `?DateTime` | Optional | - | getUpdatedAt(): ?\DateTime | setUpdatedAt(?\DateTime updatedAt): void |
| `discountType` | [`?string(DiscountType)`](../../doc/models/discount-type.md) | Optional | - | getDiscountType(): ?string | setDiscountType(?string discountType): void |
| `excludeMidPeriodAllocations` | `?bool` | Optional | - | getExcludeMidPeriodAllocations(): ?bool | setExcludeMidPeriodAllocations(?bool excludeMidPeriodAllocations): void |
| `applyOnCancelAtEndOfPeriod` | `?bool` | Optional | - | getApplyOnCancelAtEndOfPeriod(): ?bool | setApplyOnCancelAtEndOfPeriod(?bool applyOnCancelAtEndOfPeriod): void |
| `applyOnSubscriptionExpiration` | `?bool` | Optional | - | getApplyOnSubscriptionExpiration(): ?bool | setApplyOnSubscriptionExpiration(?bool applyOnSubscriptionExpiration): void |
| `couponRestrictions` | [`?(CouponRestriction[])`](../../doc/models/coupon-restriction.md) | Optional | - | getCouponRestrictions(): ?array | setCouponRestrictions(?array couponRestrictions): void |
| `currencyPrices` | [`?(CouponCurrency[])`](../../doc/models/coupon-currency.md) | Optional | Returned in read, find, and list endpoints if the query parameter is provided. | getCurrencyPrices(): ?array | setCurrencyPrices(?array currencyPrices): void |

## Example (as JSON)

```json
{
  "id": 22,
  "name": "name2",
  "code": "code0",
  "description": "description2",
  "amount": 62.64
}
```

