
# Get One Time Token Request

## Structure

`GetOneTimeTokenRequest`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `paymentProfile` | [GetOneTimeTokenPaymentProfile](../../doc/models/get-one-time-token-payment-profile.md)\|[GetOneTimeTokenBankAccountPaymentProfile](../../doc/models/get-one-time-token-bank-account-payment-profile.md) | Required | This is a container for any-of cases. | getPaymentProfile(): | setPaymentProfile( paymentProfile): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\GetOneTimeTokenRequestBuilder;
use AdvancedBillingLib\Models\Builders\GetOneTimeTokenPaymentProfileBuilder;
use AdvancedBillingLib\Models\CardType;
use AdvancedBillingLib\Models\CreditCardVault;

$getOneTimeTokenRequest = GetOneTimeTokenRequestBuilder::init(
    GetOneTimeTokenPaymentProfileBuilder::init(
        'first_name2',
        'last_name0',
        'masked_card_number0',
        CardType::ROUTEX,
        187.78,
        164.44,
        CreditCardVault::BRAINTREE_BLUE,
        'vault_token4',
        'billing_address4',
        'billing_city0',
        'billing_country6',
        'billing_state6',
        'billing_zip0',
        'payment_type2',
        false,
        232
    )
        ->id('id2')
        ->customerId('customer_id0')
        ->billingAddress2('billing_address_24')
        ->customerVaultToken('customer_vault_token0')
        ->gatewayHandle('gateway_handle4')
        ->build()
)->build();
```

