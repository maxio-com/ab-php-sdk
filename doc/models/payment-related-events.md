
# Payment Related Events

## Structure

`PaymentRelatedEvents`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `productId` | `int` | Required | - | getProductId(): int | setProductId(int productId): void |
| `accountTransactionId` | `int` | Required | - | getAccountTransactionId(): int | setAccountTransactionId(int accountTransactionId): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PaymentRelatedEventsBuilder;

$paymentRelatedEvents = PaymentRelatedEventsBuilder::init(
    186,
    170
)->build();
```

