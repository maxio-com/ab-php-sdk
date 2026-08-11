
# Send Email

## Structure

`SendEmail`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `canExecute` | `bool` | Required | - | getCanExecute(): bool | setCanExecute(bool canExecute): void |
| `url` | `string` | Required | - | getUrl(): string | setUrl(string url): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SendEmailBuilder;

$sendEmail = SendEmailBuilder::init(
    false,
    'url2'
)->build();
```

