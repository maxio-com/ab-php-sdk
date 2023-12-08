
# Dunning Step Data

## Structure

`DunningStepData`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dayThreshold` | `int` | Required | - | getDayThreshold(): int | setDayThreshold(int dayThreshold): void |
| `action` | `string` | Required | - | getAction(): string | setAction(string action): void |
| `emailBody` | `?string` | Optional | - | getEmailBody(): ?string | setEmailBody(?string emailBody): void |
| `emailSubject` | `?string` | Optional | - | getEmailSubject(): ?string | setEmailSubject(?string emailSubject): void |
| `sendEmail` | `bool` | Required | - | getSendEmail(): bool | setSendEmail(bool sendEmail): void |
| `sendBccEmail` | `bool` | Required | - | getSendBccEmail(): bool | setSendBccEmail(bool sendBccEmail): void |
| `sendSms` | `bool` | Required | - | getSendSms(): bool | setSendSms(bool sendSms): void |
| `smsBody` | `?string` | Optional | - | getSmsBody(): ?string | setSmsBody(?string smsBody): void |

## Example (as JSON)

```json
{
  "day_threshold": 88,
  "action": "action4",
  "email_body": "email_body4",
  "email_subject": "email_subject4",
  "send_email": false,
  "send_bcc_email": false,
  "send_sms": false,
  "sms_body": "sms_body0"
}
```

