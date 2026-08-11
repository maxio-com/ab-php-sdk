
# Refund Success

## Structure

`RefundSuccess`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `refundId` | `int` | Required | - | getRefundId(): int | setRefundId(int refundId): void |
| `gatewayTransactionId` | `int` | Required | - | getGatewayTransactionId(): int | setGatewayTransactionId(int gatewayTransactionId): void |
| `productId` | `int` | Required | - | getProductId(): int | setProductId(int productId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RefundSuccessBuilder;

$refundSuccess = RefundSuccessBuilder::init(
    34,
    160,
    190
)->build();
```

