
# Deliver Proforma Invoice Request

## Structure

`DeliverProformaInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `recipientEmails` | `?(string[])` | Optional | - | getRecipientEmails(): ?array | setRecipientEmails(?array recipientEmails): void |
| `ccRecipientEmails` | `?(string[])` | Optional | - | getCcRecipientEmails(): ?array | setCcRecipientEmails(?array ccRecipientEmails): void |
| `bccRecipientEmails` | `?(string[])` | Optional | - | getBccRecipientEmails(): ?array | setBccRecipientEmails(?array bccRecipientEmails): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\DeliverProformaInvoiceRequestBuilder;

$deliverProformaInvoiceRequest = DeliverProformaInvoiceRequestBuilder::init()
    ->recipientEmails(
        [
            'recipient_emails3',
            'recipient_emails4'
        ]
    )
    ->ccRecipientEmails(
        [
            'cc_recipient_emails2',
            'cc_recipient_emails1',
            'cc_recipient_emails0'
        ]
    )
    ->bccRecipientEmails(
        [
            'bcc_recipient_emails6'
        ]
    )
    ->build();
```

