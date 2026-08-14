
# Subscription Component Allocation Error Exception

## Structure

`SubscriptionComponentAllocationErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`?(SubscriptionComponentAllocationErrorItem[])`](../../doc/models/subscription-component-allocation-error-item.md) | Optional | - | getErrors(): ?array | setErrors(?array errors): void |

## Example

```php
try {
    // make the API call
} catch (SubscriptionComponentAllocationErrorException $exp) {
    echo 'Caught SubscriptionComponentAllocationErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

