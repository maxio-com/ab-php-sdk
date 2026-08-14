
# Invoice Avatax Details

## Structure

`InvoiceAvataxDetails`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `status` | `?string` | Optional | - | getStatus(): ?string | setStatus(?string status): void |
| `documentCode` | `?string` | Optional | - | getDocumentCode(): ?string | setDocumentCode(?string documentCode): void |
| `commitDate` | `?DateTime` | Optional | - | getCommitDate(): ?\DateTime | setCommitDate(?\DateTime commitDate): void |
| `modifyDate` | `?DateTime` | Optional | - | getModifyDate(): ?\DateTime | setModifyDate(?\DateTime modifyDate): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\InvoiceAvataxDetailsBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$invoiceAvataxDetails = InvoiceAvataxDetailsBuilder::init()
    ->id(184)
    ->status('status2')
    ->documentCode('document_code4')
    ->commitDate(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->modifyDate(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

