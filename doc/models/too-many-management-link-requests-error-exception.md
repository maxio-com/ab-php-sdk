
# Too Many Management Link Requests Error Exception

## Structure

`TooManyManagementLinkRequestsErrorException`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `errors` | [`TooManyManagementLinkRequests`](../../doc/models/too-many-management-link-requests.md) | Required | - | getErrors(): TooManyManagementLinkRequests | setErrors(TooManyManagementLinkRequests errors): void |

## Example

```php
try {
    // make the API call
} catch (TooManyManagementLinkRequestsErrorException $exp) {
    echo 'Caught TooManyManagementLinkRequestsErrorException:', $exp;
} catch (ApiException $exp) {
    echo 'Caught ApiException:', $exp;
}
```

