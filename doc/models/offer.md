
# Offer

## Structure

`Offer`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `siteId` | `?int` | Optional | - | getSiteId(): ?int | setSiteId(?int siteId): void |
| `productFamilyId` | `?int` | Optional | - | getProductFamilyId(): ?int | setProductFamilyId(?int productFamilyId): void |
| `productId` | `?int` | Optional | - | getProductId(): ?int | setProductId(?int productId): void |
| `productPricePointId` | `?int` | Optional | - | getProductPricePointId(): ?int | setProductPricePointId(?int productPricePointId): void |
| `productRevisableNumber` | `?int` | Optional | - | getProductRevisableNumber(): ?int | setProductRevisableNumber(?int productRevisableNumber): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `handle` | `?string` | Optional | - | getHandle(): ?string | setHandle(?string handle): void |
| `description` | `?string` | Optional | - | getDescription(): ?string | setDescription(?string description): void |
| `createdAt` | `?string` | Optional | - | getCreatedAt(): ?string | setCreatedAt(?string createdAt): void |
| `updatedAt` | `?string` | Optional | - | getUpdatedAt(): ?string | setUpdatedAt(?string updatedAt): void |
| `archivedAt` | `?string` | Optional | - | getArchivedAt(): ?string | setArchivedAt(?string archivedAt): void |
| `offerItems` | [`?(OfferItem[])`](../../doc/models/offer-item.md) | Optional | - | getOfferItems(): ?array | setOfferItems(?array offerItems): void |
| `offerDiscounts` | [`?(OfferDiscount[])`](../../doc/models/offer-discount.md) | Optional | - | getOfferDiscounts(): ?array | setOfferDiscounts(?array offerDiscounts): void |
| `productFamilyName` | `?string` | Optional | - | getProductFamilyName(): ?string | setProductFamilyName(?string productFamilyName): void |
| `productName` | `?string` | Optional | - | getProductName(): ?string | setProductName(?string productName): void |
| `productPricePointName` | `?string` | Optional | - | getProductPricePointName(): ?string | setProductPricePointName(?string productPricePointName): void |
| `productPriceInCents` | `?int` | Optional | - | getProductPriceInCents(): ?int | setProductPriceInCents(?int productPriceInCents): void |
| `offerSignupPages` | [`?(OfferSignupPage[])`](../../doc/models/offer-signup-page.md) | Optional | - | getOfferSignupPages(): ?array | setOfferSignupPages(?array offerSignupPages): void |

## Example (as JSON)

```json
{
  "id": 154,
  "site_id": 80,
  "product_family_id": 158,
  "product_id": 96,
  "product_price_point_id": 20
}
```

