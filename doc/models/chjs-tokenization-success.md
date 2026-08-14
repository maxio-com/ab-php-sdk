
# Chjs Tokenization Success

## Structure

`ChjsTokenizationSuccess`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfile` | [`TokenizedPaymentProfile`](../../doc/models/tokenized-payment-profile.md) | Required | - | getPaymentProfile(): TokenizedPaymentProfile | setPaymentProfile(TokenizedPaymentProfile paymentProfile): void |
| `gatewayCustomerId` | `?int` | Optional | - | getGatewayCustomerId(): ?int | setGatewayCustomerId(?int gatewayCustomerId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ChjsTokenizationSuccessBuilder;
use AdvancedBillingLib\Models\Builders\TokenizedPaymentProfileBuilder;

$chjsTokenizationSuccess = ChjsTokenizationSuccessBuilder::init(
    TokenizedPaymentProfileBuilder::init(
        44
    )
        ->vaultToken('vault_token6')
        ->gatewayHandle('gateway_handle4')
        ->customerVaultToken('customer_vault_token2')
        ->build()
)
    ->gatewayCustomerId(228)
    ->build();
```

