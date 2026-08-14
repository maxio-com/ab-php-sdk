# Referral Codes

```php
$referralCodesController = $client->getReferralCodesController();
```

## Class Name

`ReferralCodesController`


# Validate Referral Code

Validates whether a referral code is valid and applicable within your site. This method is useful for validating referral codes that are entered by a customer.

For more information, see [Understanding Referrals](https://docs.maxio.com/hc/en-us/articles/24286981223693-Understanding-Referrals) in the product documentation.

```php
function validateReferralCode(string $code): ReferralValidationResponse
```

## Authentication

This endpoint requires [BasicAuth](../../doc/auth/basic-authentication.md)

## Parameters

| Parameter | Type | Tags | Description |
|  --- | --- | --- | --- |
| `code` | `string` | Query, Required | The referral code you are trying to validate |

## Response Type

**200**: OK

[`ReferralValidationResponse`](../../doc/models/referral-validation-response.md)

## Example Usage

```php
$code = 'code8';

$referralCodesController = $client->getReferralCodesController();

try {
    $result = $referralCodesController->validateReferralCode($code);
    echo 'ReferralValidationResponse:';
    var_dump($result);
} catch (SingleStringErrorResponseException $exp) {
    echo 'Caught SingleStringErrorResponseException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught:', $exp;
}
```

## Example Response *(as JSON)*

```json
{
  "referral_code": {
    "id": 1032514,
    "site_id": 31615,
    "subscription_id": 16254270,
    "code": "9b6cdw"
  }
}
```

## Errors

| HTTP Status Code | Error Description | Exception Class |
|  --- | --- | --- |
| 404 | Not Found | [`SingleStringErrorResponseException`](../../doc/models/single-string-error-response-exception.md) |

