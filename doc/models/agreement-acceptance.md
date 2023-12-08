
# Agreement Acceptance

Required when creating a subscription with Maxio Payments.

## Structure

`AgreementAcceptance`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ipAddress` | `?string` | Optional | Required when providing agreement acceptance params. | getIpAddress(): ?string | setIpAddress(?string ipAddress): void |
| `termsUrl` | `?string` | Optional | Required when creating a subscription with Maxio Payments. Either terms_url or provacy_policy_url required when providing agreement_acceptance params. | getTermsUrl(): ?string | setTermsUrl(?string termsUrl): void |
| `privacyPolicyUrl` | `?string` | Optional | - | getPrivacyPolicyUrl(): ?string | setPrivacyPolicyUrl(?string privacyPolicyUrl): void |
| `returnRefundPolicyUrl` | `?string` | Optional | - | getReturnRefundPolicyUrl(): ?string | setReturnRefundPolicyUrl(?string returnRefundPolicyUrl): void |
| `deliveryPolicyUrl` | `?string` | Optional | - | getDeliveryPolicyUrl(): ?string | setDeliveryPolicyUrl(?string deliveryPolicyUrl): void |
| `secureCheckoutPolicyUrl` | `?string` | Optional | - | getSecureCheckoutPolicyUrl(): ?string | setSecureCheckoutPolicyUrl(?string secureCheckoutPolicyUrl): void |

## Example (as JSON)

```json
{
  "ip_address": "ip_address2",
  "terms_url": "terms_url0",
  "privacy_policy_url": "privacy_policy_url0",
  "return_refund_policy_url": "return_refund_policy_url4",
  "delivery_policy_url": "delivery_policy_url8"
}
```

