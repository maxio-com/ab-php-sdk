
# Create Reason Code

## Structure

`CreateReasonCode`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `code` | `string` | Required | The unique identifier for the ReasonCode | getCode(): string | setCode(string code): void |
| `description` | `string` | Required | The friendly summary of what the code signifies | getDescription(): string | setDescription(string description): void |
| `position` | `?int` | Optional | The order that code appears in lists | getPosition(): ?int | setPosition(?int position): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\CreateReasonCodeBuilder;

$createReasonCode = CreateReasonCodeBuilder::init(
    'code4',
    'description6'
)
    ->position(40)
    ->build();
```

