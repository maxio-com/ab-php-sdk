
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

## Example (as JSON)

```json
{
  "recipient_emails": [
    "recipient_emails3",
    "recipient_emails4"
  ],
  "cc_recipient_emails": [
    "cc_recipient_emails6",
    "cc_recipient_emails5"
  ],
  "bcc_recipient_emails": [
    "bcc_recipient_emails6"
  ],
  "attachment_urls": [
    "attachment_urls0",
    "attachment_urls1"
  ]
}
```

