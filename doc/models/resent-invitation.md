
# Resent Invitation

## Structure

`ResentInvitation`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `lastSentAt` | `?string` | Optional | - | getLastSentAt(): ?string | setLastSentAt(?string lastSentAt): void |
| `lastAcceptedAt` | `?string` | Optional | - | getLastAcceptedAt(): ?string | setLastAcceptedAt(?string lastAcceptedAt): void |
| `sendInviteLinkText` | `?string` | Optional | - | getSendInviteLinkText(): ?string | setSendInviteLinkText(?string sendInviteLinkText): void |
| `uninvitedCount` | `?int` | Optional | - | getUninvitedCount(): ?int | setUninvitedCount(?int uninvitedCount): void |
| `lastInviteSentAt` | `?DateTime` | Optional | - | getLastInviteSentAt(): ?\DateTime | setLastInviteSentAt(?\DateTime lastInviteSentAt): void |
| `lastInviteAcceptedAt` | `?DateTime` | Optional | - | getLastInviteAcceptedAt(): ?\DateTime | setLastInviteAcceptedAt(?\DateTime lastInviteAcceptedAt): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ResentInvitationBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;

$resentInvitation = ResentInvitationBuilder::init()
    ->lastSentAt('last_sent_at0')
    ->lastAcceptedAt('last_accepted_at0')
    ->sendInviteLinkText('send_invite_link_text8')
    ->uninvitedCount(178)
    ->lastInviteSentAt(DateTimeHelper::fromRfc3339DateTime('2024-01-01T04:30:00+00:00'))
    ->lastInviteAcceptedAt(DateTimeHelper::fromRfc3339DateTime('2024-01-01T04:35:00+00:00'))
    ->build();
```

