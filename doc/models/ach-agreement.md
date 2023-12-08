
# ACH Agreement

(Optional) If passed, the proof of the authorized ACH agreement terms will be persisted.

## Structure

`ACHAgreement`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `agreementTerms` | `?string` | Optional | (Required when providing ACH agreement params) The ACH authorization agreement terms. | getAgreementTerms(): ?string | setAgreementTerms(?string agreementTerms): void |
| `authorizerFirstName` | `?string` | Optional | (Required when providing ACH agreement params) The first name of the person authorizing the ACH agreement. | getAuthorizerFirstName(): ?string | setAuthorizerFirstName(?string authorizerFirstName): void |
| `authorizerLastName` | `?string` | Optional | (Required when providing ACH agreement params) The last name of the person authorizing the ACH agreement. | getAuthorizerLastName(): ?string | setAuthorizerLastName(?string authorizerLastName): void |
| `ipAddress` | `?string` | Optional | (Required when providing ACH agreement params) The IP address of the person authorizing the ACH agreement. | getIpAddress(): ?string | setIpAddress(?string ipAddress): void |

## Example (as JSON)

```json
{
  "agreement_terms": "agreement_terms4",
  "authorizer_first_name": "authorizer_first_name2",
  "authorizer_last_name": "authorizer_last_name2",
  "ip_address": "ip_address2"
}
```

