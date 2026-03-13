
# Scheduled Renewal Configuration Request Body

## Structure

`ScheduledRenewalConfigurationRequestBody`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `startsAt` | `?DateTime` | Optional | (Optional) Start of the renewal term. | getStartsAt(): ?\DateTime | setStartsAt(?\DateTime startsAt): void |
| `endsAt` | `?DateTime` | Optional | (Optional) End of the renewal term. | getEndsAt(): ?\DateTime | setEndsAt(?\DateTime endsAt): void |
| `lockInAt` | `?DateTime` | Optional | (Optional) Lock-in date for the renewal. | getLockInAt(): ?\DateTime | setLockInAt(?\DateTime lockInAt): void |
| `contractId` | `?int` | Optional | (Optional) Existing contract to associate with the scheduled renewal. Contracts must be enabled for your site. | getContractId(): ?int | setContractId(?int contractId): void |
| `createNewContract` | `?bool` | Optional | (Optional) Set to true to create a new contract when contracts are enabled. Contracts must be enabled for your site. | getCreateNewContract(): ?bool | setCreateNewContract(?bool createNewContract): void |

## Example (as JSON)

```json
{
  "starts_at": "2016-03-13T12:52:32.123Z",
  "ends_at": "2016-03-13T12:52:32.123Z",
  "lock_in_at": "2016-03-13T12:52:32.123Z",
  "contract_id": 110,
  "create_new_contract": false
}
```

