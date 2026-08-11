
# Public Key

## Structure

`PublicKey`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `publicKey` | `?string` | Optional | - | getPublicKey(): ?string | setPublicKey(?string publicKey): void |
| `requiresSecurityToken` | `?bool` | Optional | - | getRequiresSecurityToken(): ?bool | setRequiresSecurityToken(?bool requiresSecurityToken): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\PublicKeyBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$publicKey = PublicKeyBuilder::init()
    ->publicKey('public_key2')
    ->requiresSecurityToken(false)
    ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
    ->build();
```

