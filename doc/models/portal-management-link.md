
# Portal Management Link

## Structure

`PortalManagementLink`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `url` | `?string` | Optional | - | getUrl(): ?string | setUrl(?string url): void |
| `fetchCount` | `?int` | Optional | - | getFetchCount(): ?int | setFetchCount(?int fetchCount): void |
| `createdAt` | `?DateTime` | Optional | - | getCreatedAt(): ?\DateTime | setCreatedAt(?\DateTime createdAt): void |
| `newLinkAvailableAt` | `?DateTime` | Optional | - | getNewLinkAvailableAt(): ?\DateTime | setNewLinkAvailableAt(?\DateTime newLinkAvailableAt): void |
| `expiresAt` | `?DateTime` | Optional | - | getExpiresAt(): ?\DateTime | setExpiresAt(?\DateTime expiresAt): void |
| `lastInviteSentAt` | `?DateTime` | Optional | - | getLastInviteSentAt(): ?\DateTime | setLastInviteSentAt(?\DateTime lastInviteSentAt): void |

## Example (as JSON)

```json
{
  "url": "url0",
  "fetch_count": 222,
  "created_at": "2016-03-13T12:52:32.123Z",
  "new_link_available_at": "2016-03-13T12:52:32.123Z",
  "expires_at": "2016-03-13T12:52:32.123Z"
}
```

