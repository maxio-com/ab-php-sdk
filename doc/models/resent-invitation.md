
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

## Example (as JSON)

```json
{
  "last_invite_sent_at": "01/01/2024 04:30:00",
  "last_invite_accepted_at": "01/01/2024 04:35:00",
  "last_sent_at": "last_sent_at8",
  "last_accepted_at": "last_accepted_at8",
  "send_invite_link_text": "send_invite_link_text6",
  "uninvited_count": 6
}
```

