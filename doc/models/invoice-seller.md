
# Invoice Seller

Information about the seller (merchant) listed on the masthead of the invoice.

## Structure

`InvoiceSeller`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `?string` | Optional | - | getName(): ?string | setName(?string name): void |
| `address` | [`?InvoiceAddress`](../../doc/models/invoice-address.md) | Optional | - | getAddress(): ?InvoiceAddress | setAddress(?InvoiceAddress address): void |
| `phone` | `?string` | Optional | - | getPhone(): ?string | setPhone(?string phone): void |
| `logoUrl` | `?string` | Optional | - | getLogoUrl(): ?string | setLogoUrl(?string logoUrl): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceSellerBuilder;
use AdvancedBillingLib\Models\Builders\InvoiceAddressBuilder;

$invoiceSeller = InvoiceSellerBuilder::init()
    ->name('name4')
    ->address(
        InvoiceAddressBuilder::init()
            ->street('street6')
            ->line2('line20')
            ->city('city6')
            ->state('state2')
            ->zip('zip0')
            ->build()
    )
    ->phone('phone6')
    ->logoUrl('logo_url6')
    ->build();
```

