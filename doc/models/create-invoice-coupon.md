
# Create Invoice Coupon

## Structure

`CreateInvoiceCoupon`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | - | getCode(): ?string | setCode(?string code): void |
| `percentage` | string\|float\|null | Optional | This is a container for one-of cases. | getPercentage(): | setPercentage( percentage): void |
| `amount` | string\|float\|null | Optional | This is a container for one-of cases. | getAmount(): | setAmount( amount): void |
| `description` | `?string` | Optional | **Constraints**: *Maximum Length*: `255` | getDescription(): ?string | setDescription(?string description): void |
| `productFamilyId` | string\|int\|null | Optional | This is a container for one-of cases. | getProductFamilyId(): | setProductFamilyId( productFamilyId): void |
| `compoundingStrategy` | [`?string(CompoundingStrategy)`](../../doc/models/compounding-strategy.md) | Optional | Applicable only to stackable coupons. For `compound`, Percentage-based discounts will be calculated against the remaining price, after prior discounts have been calculated. For `full-price`, Percentage-based discounts will always be calculated against the original item price, before other discounts are applied. | getCompoundingStrategy(): ?string | setCompoundingStrategy(?string compoundingStrategy): void |

## Example (as JSON)

```json
{
  "percentage": 50.0,
  "code": "code4",
  "amount": "String9",
  "description": "description4",
  "product_family_id": "String3"
}
```

