
# Invoice Refund

## Structure

`InvoiceRefund`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `transactionId` | `?int` | Optional | - | getTransactionId(): ?int | setTransactionId(?int transactionId): void |
| `paymentId` | `?int` | Optional | - | getPaymentId(): ?int | setPaymentId(?int paymentId): void |
| `memo` | `?string` | Optional | - | getMemo(): ?string | setMemo(?string memo): void |
| `originalAmount` | `?string` | Optional | - | getOriginalAmount(): ?string | setOriginalAmount(?string originalAmount): void |
| `appliedAmount` | `?string` | Optional | - | getAppliedAmount(): ?string | setAppliedAmount(?string appliedAmount): void |
| `gatewayTransactionId` | `?string` | Optional | The transaction ID for the refund as returned from the payment gateway | getGatewayTransactionId(): ?string | setGatewayTransactionId(?string gatewayTransactionId): void |
| `gatewayUsed` | `?string` | Optional | - | getGatewayUsed(): ?string | setGatewayUsed(?string gatewayUsed): void |
| `gatewayHandle` | `?string` | Optional | - | getGatewayHandle(): ?string | setGatewayHandle(?string gatewayHandle): void |
| `achLateReject` | `?bool` | Optional | - | getAchLateReject(): ?bool | setAchLateReject(?bool achLateReject): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceRefundBuilder;

$invoiceRefund = InvoiceRefundBuilder::init()
    ->transactionId(166)
    ->paymentId(36)
    ->memo('memo6')
    ->originalAmount('original_amount6')
    ->appliedAmount('applied_amount6')
    ->build();
```

