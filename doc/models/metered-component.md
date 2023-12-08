
# Metered Component

## Structure

`MeteredComponent`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `name` | `string` | Required | A name for this component that is suitable for showing customers and displaying on billing statements, ie. "Minutes". | getName(): string | setName(string name): void |
| `unitName` | `string` | Required | The name of the unit of measurement for the component. It should be singular since it will be automatically pluralized when necessary. i.e. “message”, which may then be shown as “5 messages” on a subscription’s component line-item | getUnitName(): string | setUnitName(string unitName): void |
| `description` | `?string` | Optional | A description for the component that will be displayed to the user on the hosted signup page. | getDescription(): ?string | setDescription(?string description): void |
| `handle` | `?string` | Optional | A unique identifier for your use that can be used to retrieve this component is subsequent requests.  Must start with a letter or number and may only contain lowercase letters, numbers, or the characters '.', ':', '-', or '_'.<br>**Constraints**: *Pattern*: `^[a-z0-9][a-z0-9\-_:.]*$` | getHandle(): ?string | setHandle(?string handle): void |
| `taxable` | `?bool` | Optional | Boolean flag describing whether a component is taxable or not. | getTaxable(): ?bool | setTaxable(?bool taxable): void |
| `pricingScheme` | [`string(PricingScheme)`](../../doc/models/pricing-scheme.md) | Required | The identifier for the pricing scheme. See [Product Components](https://help.chargify.com/products/product-components.html) for an overview of pricing schemes. | getPricingScheme(): string | setPricingScheme(string pricingScheme): void |
| `prices` | [`?(Price[])`](../../doc/models/price.md) | Optional | (Not required for ‘per_unit’ pricing schemes) One or more price brackets. See [Price Bracket Rules](https://maxio-chargify.zendesk.com/hc/en-us/articles/5405020625677#price-bracket-rules) for an overview of how price brackets work for different pricing schemes. | getPrices(): ?array | setPrices(?array prices): void |
| `upgradeCharge` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getUpgradeCharge(): ?string | setUpgradeCharge(?string upgradeCharge): void |
| `downgradeCredit` | [`?string(CreditType)`](../../doc/models/credit-type.md) | Optional | The type of credit to be created when upgrading/downgrading. Defaults to the component and then site setting if one is not provided.<br>Available values: `full`, `prorated`, `none`. | getDowngradeCredit(): ?string | setDowngradeCredit(?string downgradeCredit): void |
| `pricePoints` | [`?(ComponentPricePointItem[])`](../../doc/models/component-price-point-item.md) | Optional | - | getPricePoints(): ?array | setPricePoints(?array pricePoints): void |
| `unitPrice` | string\|float\|null | Optional | This is a container for one-of cases. | getUnitPrice(): | setUnitPrice( unitPrice): void |
| `taxCode` | `?string` | Optional | A string representing the tax code related to the component type. This is especially important when using the Avalara service to tax based on locale. This attribute has a max length of 10 characters. | getTaxCode(): ?string | setTaxCode(?string taxCode): void |
| `hideDateRangeOnInvoice` | `?bool` | Optional | (Only available on Relationship Invoicing sites) Boolean flag describing if the service date range should show for the component on generated invoices. | getHideDateRangeOnInvoice(): ?bool | setHideDateRangeOnInvoice(?bool hideDateRangeOnInvoice): void |
| `priceInCents` | `?string` | Optional | deprecated May 2011 - use unit_price instead | getPriceInCents(): ?string | setPriceInCents(?string priceInCents): void |
| `displayOnHostedPage` | `?bool` | Optional | - | getDisplayOnHostedPage(): ?bool | setDisplayOnHostedPage(?bool displayOnHostedPage): void |
| `allowFractionalQuantities` | `?bool` | Optional | - | getAllowFractionalQuantities(): ?bool | setAllowFractionalQuantities(?bool allowFractionalQuantities): void |
| `publicSignupPageIds` | `?(int[])` | Optional | - | getPublicSignupPageIds(): ?array | setPublicSignupPageIds(?array publicSignupPageIds): void |

## Example (as JSON)

```json
{
  "name": "name4",
  "unit_name": "unit_name6",
  "description": "description6",
  "handle": "handle0",
  "taxable": false,
  "pricing_scheme": "stairstep",
  "prices": [
    {
      "starting_quantity": 242,
      "ending_quantity": 40,
      "unit_price": 23.26
    }
  ],
  "upgrade_charge": "full"
}
```

