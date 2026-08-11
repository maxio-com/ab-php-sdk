
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

## Example

```php
use AdvancedBillingLib\Models\Builders\DunningStepDataBuilder;

$dunningStepData = DunningStepDataBuilder::init(
    206,
    'action6',
    false,
    false,
    false
)
    ->emailBody('email_body6')
    ->emailSubject('email_subject6')
    ->smsBody('sms_body8')
    ->build();
```

