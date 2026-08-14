
# Dunning Step Reached

## Structure

`DunningStepReached`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `dunner` | [`DunnerData`](../../doc/models/dunner-data.md) | Required | - | getDunner(): DunnerData | setDunner(DunnerData dunner): void |
| `currentStep` | [`DunningStepData`](../../doc/models/dunning-step-data.md) | Required | - | getCurrentStep(): DunningStepData | setCurrentStep(DunningStepData currentStep): void |
| `nextStep` | [`DunningStepData`](../../doc/models/dunning-step-data.md) | Required | - | getNextStep(): DunningStepData | setNextStep(DunningStepData nextStep): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\DunningStepReachedBuilder;
use AdvancedBillingLib\Models\Builders\DunnerDataBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\DunningStepDataBuilder;

$dunningStepReached = DunningStepReachedBuilder::init(
    DunnerDataBuilder::init(
        'state8',
        194,
        98,
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z'),
        42,
        DateTimeHelper::fromRfc3339DateTimeRequired('2016-03-13T12:52:32.123Z')
    )->build(),
    DunningStepDataBuilder::init(
        198,
        'action4',
        false,
        false,
        false
    )
        ->emailBody('email_body4')
        ->emailSubject('email_subject6')
        ->smsBody('sms_body0')
        ->build(),
    DunningStepDataBuilder::init(
        30,
        'action4',
        false,
        false,
        false
    )
        ->emailBody('email_body4')
        ->emailSubject('email_subject4')
        ->smsBody('sms_body0')
        ->build()
)->build();
```

