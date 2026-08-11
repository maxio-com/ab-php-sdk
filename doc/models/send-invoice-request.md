
# Send Invoice Request

## Structure

`SendInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `recipientEmails` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `5` | getRecipientEmails(): ?array | setRecipientEmails(?array recipientEmails): void |
| `ccRecipientEmails` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `5` | getCcRecipientEmails(): ?array | setCcRecipientEmails(?array ccRecipientEmails): void |
| `bccRecipientEmails` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `5` | getBccRecipientEmails(): ?array | setBccRecipientEmails(?array bccRecipientEmails): void |
| `attachmentUrls` | `?(string[])` | Optional | Array of URLs to files to attach to the invoice email. Max 10 files, 10MB each.<br><br>**Constraints**: *Maximum Items*: `10` | getAttachmentUrls(): ?array | setAttachmentUrls(?array attachmentUrls): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SendInvoiceRequestBuilder;

$sendInvoiceRequest = SendInvoiceRequestBuilder::init()
    ->recipientEmails(
        [
            'recipient_emails7'
        ]
    )
    ->ccRecipientEmails(
        [
            'cc_recipient_emails2'
        ]
    )
    ->bccRecipientEmails(
        [
            'bcc_recipient_emails0',
            'bcc_recipient_emails1',
            'bcc_recipient_emails2'
        ]
    )
    ->attachmentUrls(
        [
            'attachment_urls4'
        ]
    )
    ->build();
```

