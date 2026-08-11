
# Component Allocation Error Item

## Structure

`ComponentAllocationErrorItem`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `componentId` | `?int` | Optional | - | getComponentId(): ?int | setComponentId(?int componentId): void |
| `message` | `?string` | Optional | - | getMessage(): ?string | setMessage(?string message): void |
| `kind` | `?string` | Optional | - | getKind(): ?string | setKind(?string kind): void |
| `on` | `?string` | Optional | - | getOn(): ?string | setOn(?string on): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ComponentAllocationErrorItemBuilder;

$componentAllocationErrorItem = ComponentAllocationErrorItemBuilder::init()
    ->componentId(122)
    ->message('message8')
    ->kind('kind6')
    ->on('on8')
    ->build();
```

