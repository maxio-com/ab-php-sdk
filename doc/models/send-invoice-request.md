
# Send Invoice Request

## Structure

`SendInvoiceRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `recipientEmails` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `5` | getRecipientEmails(): ?array | setRecipientEmails(?array recipientEmails): void |
| `ccRecipientEmails` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `5` | getCcRecipientEmails(): ?array | setCcRecipientEmails(?array ccRecipientEmails): void |
| `bccRecipientEmails` | `?(string[])` | Optional | **Constraints**: *Maximum Items*: `5` | getBccRecipientEmails(): ?array | setBccRecipientEmails(?array bccRecipientEmails): void |

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
  ]
}
```

