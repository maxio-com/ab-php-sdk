
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
| `startDate` | `?string` | Optional | - | getStartDate(): ?string | setStartDate(?string startDate): void |
| `endDate` | `?string` | Optional | - | getEndDate(): ?string | setEndDate(?string endDate): void |
| `percentage` | `?float` | Optional | - | getPercentage(): ?float | setPercentage(?float percentage): void |
| `recurring` | `?bool` | Optional | - | getRecurring(): ?bool | setRecurring(?bool recurring): void |
| `recurringScheme` | [`?string(RecurringScheme)`](../../doc/models/recurring-scheme.md) | Optional | - | getRecurringScheme(): ?string | setRecurringScheme(?string recurringScheme): void |
| `durationPeriodCount` | `?int` | Optional | - | getDurationPeriodCount(): ?int | setDurationPeriodCount(?int durationPeriodCount): void |
| `durationInterval` | `?int` | Optional | - | getDurationInterval(): ?int | setDurationInterval(?int durationInterval): void |
| `durationIntervalUnit` | `?string` | Optional | - | getDurationIntervalUnit(): ?string | setDurationIntervalUnit(?string durationIntervalUnit): void |
| `durationIntervalSpan` | `?string` | Optional | - | getDurationIntervalSpan(): ?string | setDurationIntervalSpan(?string durationIntervalSpan): void |
| `allowNegativeBalance` | `?bool` | Optional | - | getAllowNegativeBalance(): ?bool | setAllowNegativeBalance(?bool allowNegativeBalance): void |
| `archivedAt` | `?string` | Optional | - | getArchivedAt(): ?string | setArchivedAt(?string archivedAt): void |
| `conversionLimit` | `?string` | Optional | - | getConversionLimit(): ?string | setConversionLimit(?string conversionLimit): void |
| `stackable` | `?bool` | Optional | - | getStackable(): ?bool | setStackable(?bool stackable): void |
| `compoundingStrategy` | string([CompoundingStrategy](../../doc/models/compounding-strategy.md))\|null | Optional | This is a container for any-of cases. | getCompoundingStrategy(): ?string | setCompoundingStrategy(?string compoundingStrategy): void |
| `useSiteExchangeRate` | `?bool` | Optional | - | getUseSiteExchangeRate(): ?bool | setUseSiteExchangeRate(?bool useSiteExchangeRate): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `discountType` | [`?string(DiscountType)`](../../doc/models/discount-type.md) | Optional | - | getDiscountType(): ?string | setDiscountType(?string discountType): void |
| `excludeMidPeriodAllocations` | `?bool` | Optional | - | getExcludeMidPeriodAllocations(): ?bool | setExcludeMidPeriodAllocations(?bool excludeMidPeriodAllocations): void |
| `applyOnCancelAtEndOfPeriod` | `?bool` | Optional | - | getApplyOnCancelAtEndOfPeriod(): ?bool | setApplyOnCancelAtEndOfPeriod(?bool applyOnCancelAtEndOfPeriod): void |
| `couponRestrictions` | [`?(CouponRestriction[])`](../../doc/models/coupon-restriction.md) | Optional | - | getCouponRestrictions(): ?array | setCouponRestrictions(?array couponRestrictions): void |

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

