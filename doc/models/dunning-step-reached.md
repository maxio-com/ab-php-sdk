
# Dunning Step Reached

## Structure

`DunningStepReached`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dunner` | [`DunnerData`](../../doc/models/dunner-data.md) | Required | - | getDunner(): DunnerData | setDunner(DunnerData dunner): void |
| `currentStep` | [`DunningStepData`](../../doc/models/dunning-step-data.md) | Required | - | getCurrentStep(): DunningStepData | setCurrentStep(DunningStepData currentStep): void |
| `nextStep` | [`DunningStepData`](../../doc/models/dunning-step-data.md) | Required | - | getNextStep(): DunningStepData | setNextStep(DunningStepData nextStep): void |

## Example (as JSON)

```json
{
  "dunner": {
    "state": "state8",
    "subscription_id": 194,
    "revenue_at_risk_in_cents": 98,
    "created_at": "created_at4",
    "attempts": 42,
    "last_attempted_at": "last_attempted_at0"
  },
  "current_step": {
    "day_threshold": 198,
    "action": "action4",
    "email_body": "email_body4",
    "email_subject": "email_subject6",
    "send_email": false,
    "send_bcc_email": false,
    "send_sms": false,
    "sms_body": "sms_body0"
  },
  "next_step": {
    "day_threshold": 30,
    "action": "action4",
    "email_body": "email_body4",
    "email_subject": "email_subject4",
    "send_email": false,
    "send_bcc_email": false,
    "send_sms": false,
    "sms_body": "sms_body0"
  }
}
```

