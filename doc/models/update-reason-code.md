
# Update Reason Code

## Structure

`UpdateReasonCode`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `?string` | Optional | The unique identifier for the ReasonCode | getCode(): ?string | setCode(?string code): void |
| `description` | `?string` | Optional | The friendly summary of what the code signifies | getDescription(): ?string | setDescription(?string description): void |
| `position` | `?int` | Optional | The order that code appears in lists | getPosition(): ?int | setPosition(?int position): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\UpdateReasonCodeBuilder;

$updateReasonCode = UpdateReasonCodeBuilder::init()
    ->code('code4')
    ->description('description6')
    ->position(4)
    ->build();
```

