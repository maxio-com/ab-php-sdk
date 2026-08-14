
# Resumption Charge

(For calendar billing subscriptions only) The way that the resumed subscription's charge should be handled

## Enumeration

`ResumptionCharge`

## Fields

| Name |
|  --- |
| `PRORATED` |
| `IMMEDIATE` |
| `DELAYED` |

## Example

```php
use AdvancedBillingLib\Models\ResumptionCharge;

$resumptionCharge = ResumptionCharge::IMMEDIATE;
```

