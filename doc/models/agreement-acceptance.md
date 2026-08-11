
# Agreement Acceptance

Required when creating a subscription with Maxio Payments.

## Structure

`AgreementAcceptance`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `ipAddress` | `?string` | Optional | Required when providing agreement acceptance params. | getIpAddress(): ?string | setIpAddress(?string ipAddress): void |
| `termsUrl` | `?string` | Optional | Required when creating a subscription with Maxio Payments. Either terms_url or privacy_policy_url is required when providing agreement_acceptance params. | getTermsUrl(): ?string | setTermsUrl(?string termsUrl): void |
| `privacyPolicyUrl` | `?string` | Optional | - | getPrivacyPolicyUrl(): ?string | setPrivacyPolicyUrl(?string privacyPolicyUrl): void |
| `returnRefundPolicyUrl` | `?string` | Optional | - | getReturnRefundPolicyUrl(): ?string | setReturnRefundPolicyUrl(?string returnRefundPolicyUrl): void |
| `deliveryPolicyUrl` | `?string` | Optional | - | getDeliveryPolicyUrl(): ?string | setDeliveryPolicyUrl(?string deliveryPolicyUrl): void |
| `secureCheckoutPolicyUrl` | `?string` | Optional | - | getSecureCheckoutPolicyUrl(): ?string | setSecureCheckoutPolicyUrl(?string secureCheckoutPolicyUrl): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\AgreementAcceptanceBuilder;

$agreementAcceptance = AgreementAcceptanceBuilder::init()
    ->ipAddress('ip_address8')
    ->termsUrl('terms_url6')
    ->privacyPolicyUrl('privacy_policy_url4')
    ->returnRefundPolicyUrl('return_refund_policy_url0')
    ->deliveryPolicyUrl('delivery_policy_url4')
    ->build();
```

