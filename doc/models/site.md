
# Site

## Structure

`Site`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `subdomain` | `?string` | Optional | - | getSubdomain(): ?string | setSubdomain(?string subdomain): void |
| `currency` | `?string` | Optional | - | getCurrency(): ?string | setCurrency(?string currency): void |
| `sellerId` | `?int` | Optional | - | getSellerId(): ?int | setSellerId(?int sellerId): void |
| `nonPrimaryCurrencies` | `?(string[])` | Optional | - | getNonPrimaryCurrencies(): ?array | setNonPrimaryCurrencies(?array nonPrimaryCurrencies): void |
| `relationshipInvoicingEnabled` | `?bool` | Optional | - | getRelationshipInvoicingEnabled(): ?bool | setRelationshipInvoicingEnabled(?bool relationshipInvoicingEnabled): void |
| `customerHierarchyEnabled` | `?bool` | Optional | - | getCustomerHierarchyEnabled(): ?bool | setCustomerHierarchyEnabled(?bool customerHierarchyEnabled): void |
| `whopaysEnabled` | `?bool` | Optional | - | getWhopaysEnabled(): ?bool | setWhopaysEnabled(?bool whopaysEnabled): void |
| `whopaysDefaultPayer` | `?string` | Optional | - | getWhopaysDefaultPayer(): ?string | setWhopaysDefaultPayer(?string whopaysDefaultPayer): void |
| `allocationSettings` | [`?AllocationSettings`](../../doc/models/allocation-settings.md) | Optional | - | getAllocationSettings(): ?AllocationSettings | setAllocationSettings(?AllocationSettings allocationSettings): void |
| `defaultPaymentCollectionMethod` | `?string` | Optional | - | getDefaultPaymentCollectionMethod(): ?string | setDefaultPaymentCollectionMethod(?string defaultPaymentCollectionMethod): void |
| `organizationAddress` | [`?OrganizationAddress`](../../doc/models/organization-address.md) | Optional | - | getOrganizationAddress(): ?OrganizationAddress | setOrganizationAddress(?OrganizationAddress organizationAddress): void |
| `taxConfiguration` | [`?TaxConfiguration`](../../doc/models/tax-configuration.md) | Optional | - | getTaxConfiguration(): ?TaxConfiguration | setTaxConfiguration(?TaxConfiguration taxConfiguration): void |
| `netTerms` | [`?NetTerms`](../../doc/models/net-terms.md) | Optional | - | getNetTerms(): ?NetTerms | setNetTerms(?NetTerms netTerms): void |
| `test` | `?bool` | Optional | - | getTest(): ?bool | setTest(?bool test): void |

## Example (as JSON)

```json
{
  "id": 34,
  "name": "name0",
  "subdomain": "subdomain4",
  "currency": "currency0",
  "seller_id": 198
}
```

