
# Chjs Tokenization Success

## Structure

`ChjsTokenizationSuccess`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfile` | [`TokenizedPaymentProfile`](../../doc/models/tokenized-payment-profile.md) | Required | - | getPaymentProfile(): TokenizedPaymentProfile | setPaymentProfile(TokenizedPaymentProfile paymentProfile): void |
| `gatewayCustomerId` | `?int` | Optional | - | getGatewayCustomerId(): ?int | setGatewayCustomerId(?int gatewayCustomerId): void |

## Example (as JSON)

```json
{
  "payment_profile": {
    "id": 44,
    "vault_token": "vault_token6",
    "gateway_handle": "gateway_handle4",
    "customer_vault_token": "customer_vault_token2"
  },
  "gateway_customer_id": 44
}
```

