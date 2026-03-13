
# Deliver Proforma Invoice Request

## Structure

`DeliverProformaInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `recipientEmails` | `?(string[])` | Optional | - | getRecipientEmails(): ?array | setRecipientEmails(?array recipientEmails): void |
| `ccRecipientEmails` | `?(string[])` | Optional | - | getCcRecipientEmails(): ?array | setCcRecipientEmails(?array ccRecipientEmails): void |
| `bccRecipientEmails` | `?(string[])` | Optional | - | getBccRecipientEmails(): ?array | setBccRecipientEmails(?array bccRecipientEmails): void |

## Example (as JSON)

```json
{
  "recipient_emails": [
    "recipient_emails9"
  ],
  "cc_recipient_emails": [
    "cc_recipient_emails8"
  ],
  "bcc_recipient_emails": [
    "bcc_recipient_emails2",
    "bcc_recipient_emails3",
    "bcc_recipient_emails4"
  ]
}
```

