
# Refund Success

## Structure

`RefundSuccess`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refundId` | `int` | Required | - | getRefundId(): int | setRefundId(int refundId): void |
| `gatewayTransactionId` | `int` | Required | - | getGatewayTransactionId(): int | setGatewayTransactionId(int gatewayTransactionId): void |
| `productId` | `int` | Required | - | getProductId(): int | setProductId(int productId): void |

## Example (as JSON)

```json
{
  "refund_id": 12,
  "gateway_transaction_id": 182,
  "product_id": 168
}
```

