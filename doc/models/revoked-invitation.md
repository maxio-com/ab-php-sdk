
# Revoked Invitation

## Structure

`RevokedInvitation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `lastSentAt` | `?string` | Optional | - | getLastSentAt(): ?string | setLastSentAt(?string lastSentAt): void |
| `lastAcceptedAt` | `?string` | Optional | - | getLastAcceptedAt(): ?string | setLastAcceptedAt(?string lastAcceptedAt): void |
| `uninvitedCount` | `?int` | Optional | - | getUninvitedCount(): ?int | setUninvitedCount(?int uninvitedCount): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\RevokedInvitationBuilder;

$revokedInvitation = RevokedInvitationBuilder::init()
    ->lastSentAt('last_sent_at8')
    ->lastAcceptedAt('last_accepted_at8')
    ->uninvitedCount(130)
    ->build();
```

