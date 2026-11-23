
# Wallet Product Price Point Summary

A summary of the Wallet Product's default price point, for rendering a catalog listing without a separate price points call.

## Structure

`WalletProductPricePointSummary`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `archivedCount` | `?int` | Optional | Number of archived price points on this Wallet Product. | getArchivedCount(): ?int | setArchivedCount(?int archivedCount): void |
| `pricingScheme` | `?string` | Optional | The default price point's pricing scheme. `null` if the Wallet Product has no default price point. | getPricingScheme(): ?string | setPricingScheme(?string pricingScheme): void |
| `tierCount` | `?int` | Optional | Number of price brackets on the default price point. A `per_unit` scheme always stores exactly one synthesized bracket, so this is `1` for `per_unit`, not `0`. | getTierCount(): ?int | setTierCount(?int tierCount): void |
| `entryPrice` | `?string` | Optional | The unit price of the default price point's first bracket, as a decimal string. `null` if there are no brackets. | getEntryPrice(): ?string | setEntryPrice(?string entryPrice): void |
| `finalPrice` | `?string` | Optional | The unit price of the default price point's last bracket, as a decimal string. `null` if there are no brackets. | getFinalPrice(): ?string | setFinalPrice(?string finalPrice): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\WalletProductPricePointSummaryBuilder;

$walletProductPricePointSummary = WalletProductPricePointSummaryBuilder::init()
    ->archivedCount(244)
    ->pricingScheme('pricing_scheme8')
    ->tierCount(30)
    ->entryPrice('entry_price8')
    ->finalPrice('final_price4')
    ->build();
```

