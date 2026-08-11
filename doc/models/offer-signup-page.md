
# Offer Signup Page

## Structure

`OfferSignupPage`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `id` | `?int` | Optional | - | getId(): ?int | setId(?int id): void |
| `nickname` | `?string` | Optional | - | getNickname(): ?string | setNickname(?string nickname): void |
| `enabled` | `?bool` | Optional | - | getEnabled(): ?bool | setEnabled(?bool enabled): void |
| `returnUrl` | `?string` | Optional | - | getReturnUrl(): ?string | setReturnUrl(?string returnUrl): void |
| `returnParams` | `?string` | Optional | - | getReturnParams(): ?string | setReturnParams(?string returnParams): void |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\OfferSignupPageBuilder;

$offerSignupPage = OfferSignupPageBuilder::init()
    ->id(102)
    ->nickname('nickname6')
    ->enabled(false)
    ->returnUrl('return_url6')
    ->returnParams('return_params8')
    ->build();
```

