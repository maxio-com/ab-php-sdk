
# Coupon Payload

## Structure

`CouponPayload`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | Required when creating a new coupon. This name is not displayed to customers and is limited to 255 characters. | getName(): ?string | setName(?string name): void |
| `code` | `?string` | Optional | Required when creating a new coupon. The code is limited to 255 characters. May contain uppercase alphanumeric characters and these special characters (which allow for email addresses to be used): “%”, “@”, “+”, “-”, “_”, and “.” | getCode(): ?string | setCode(?string code): void |
| `description` | `?string` | Optional | Required when creating a new coupon. A description of the coupon that can be displayed to customers in transactions and on statements. The description is limited to 255 characters. | getDescription(): ?string | setDescription(?string description): void |
| `percentage` | string\|float\|null | Optional | This is a container for one-of cases. | getPercentage(): | setPercentage( percentage): void |
| `amountInCents` | `?int` | Optional | Required when creating a new flat amount coupon. Can't be used together with percentage. Flat USD discount | getAmountInCents(): ?int | setAmountInCents(?int amountInCents): void |
| `allowNegativeBalance` | `?bool` | Optional | If set to true, discount is not limited (credits will carry forward to next billing). Can't be used together with restrictions. | getAllowNegativeBalance(): ?bool | setAllowNegativeBalance(?bool allowNegativeBalance): void |
| `recurring` | `?bool` | Optional | - | getRecurring(): ?bool | setRecurring(?bool recurring): void |
| `endDate` | `?DateTime` | Optional | After the end of the given day, this coupon code will be invalid for new signups. Recurring discounts started before this date will continue to recur even after this date. | getEndDate(): ?\DateTime | setEndDate(?\DateTime endDate): void |
| `productFamilyId` | `?string` | Optional | - | getProductFamilyId(): ?string | setProductFamilyId(?string productFamilyId): void |
| `stackable` | `?bool` | Optional | A stackable coupon can be combined with other coupons on a Subscription. | getStackable(): ?bool | setStackable(?bool stackable): void |
| `compoundingStrategy` | [`?string(CompoundingStrategy)`](../../doc/models/compounding-strategy.md) | Optional | Applicable only to stackable coupons. For `compound`, Percentage-based discounts will be calculated against the remaining price, after prior discounts have been calculated. For `full-price`, Percentage-based discounts will always be calculated against the original item price, before other discounts are applied. | getCompoundingStrategy(): ?string | setCompoundingStrategy(?string compoundingStrategy): void |
| `excludeMidPeriodAllocations` | `?bool` | Optional | - | getExcludeMidPeriodAllocations(): ?bool | setExcludeMidPeriodAllocations(?bool excludeMidPeriodAllocations): void |
| `applyOnCancelAtEndOfPeriod` | `?bool` | Optional | - | getApplyOnCancelAtEndOfPeriod(): ?bool | setApplyOnCancelAtEndOfPeriod(?bool applyOnCancelAtEndOfPeriod): void |
| `applyOnSubscriptionExpiration` | `?bool` | Optional | - | getApplyOnSubscriptionExpiration(): ?bool | setApplyOnSubscriptionExpiration(?bool applyOnSubscriptionExpiration): void |

## Example (as JSON)

```json
{
  "name": "name8",
  "code": "code6",
  "description": "description8",
  "percentage": "String7",
  "amount_in_cents": 110
}
```

