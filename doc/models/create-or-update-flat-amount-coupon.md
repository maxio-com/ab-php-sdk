
# Create or Update Flat Amount Coupon

## Structure

`CreateOrUpdateFlatAmountCoupon`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | the name of the coupon | getName(): string | setName(string name): void |
| `code` | `string` | Required | may contain uppercase alphanumeric characters and these special characters (which allow for email addresses to be used): “%”, “@”, “+”, “-”, “_”, and “.” | getCode(): string | setCode(string code): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `amountInCents` | `int` | Required | - | getAmountInCents(): int | setAmountInCents(int amountInCents): void |
| `allowNegativeBalance` | `?bool` | Optional | - | getAllowNegativeBalance(): ?bool | setAllowNegativeBalance(?bool allowNegativeBalance): void |
| `recurring` | `?bool` | Optional | - | getRecurring(): ?bool | setRecurring(?bool recurring): void |
| `endDate` | `?DateTime` | Optional | - | getEndDate(): ?\DateTime | setEndDate(?\DateTime endDate): void |
| `productFamilyId` | `?string` | Optional | - | getProductFamilyId(): ?string | setProductFamilyId(?string productFamilyId): void |
| `stackable` | `?bool` | Optional | - | getStackable(): ?bool | setStackable(?bool stackable): void |
| `compoundingStrategy` | [`?string(CompoundingStrategy)`](../../doc/models/compounding-strategy.md) | Optional | - | getCompoundingStrategy(): ?string | setCompoundingStrategy(?string compoundingStrategy): void |
| `excludeMidPeriodAllocations` | `?bool` | Optional | - | getExcludeMidPeriodAllocations(): ?bool | setExcludeMidPeriodAllocations(?bool excludeMidPeriodAllocations): void |
| `applyOnCancelAtEndOfPeriod` | `?bool` | Optional | - | getApplyOnCancelAtEndOfPeriod(): ?bool | setApplyOnCancelAtEndOfPeriod(?bool applyOnCancelAtEndOfPeriod): void |
| `applyOnSubscriptionExpiration` | `?bool` | Optional | - | getApplyOnSubscriptionExpiration(): ?bool | setApplyOnSubscriptionExpiration(?bool applyOnSubscriptionExpiration): void |

## Example (as JSON)

```json
{
  "name": "name0",
  "code": "code8",
  "description": "description0",
  "amount_in_cents": 120,
  "allow_negative_balance": false,
  "recurring": false,
  "end_date": "2016-03-13T12:52:32.123Z",
  "product_family_id": "product_family_id4"
}
```

