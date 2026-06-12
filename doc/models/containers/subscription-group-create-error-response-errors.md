
# Subscription Group Create Error Response Errors

## Data Type

`SubscriptionGroupMembersArrayError|SubscriptionGroupSingleError|string`

## Cases

| Type |
|  --- |
| [`SubscriptionGroupMembersArrayError`](../../../doc/models/subscription-group-members-array-error.md) |
| [`SubscriptionGroupSingleError`](../../../doc/models/subscription-group-single-error.md) |
| `string` |

## SubscriptionGroupMembersArrayError

### Initialization Code

#### Example

```php
$value = SubscriptionGroupMembersArrayErrorBuilder::init(
    [
        'members6'
    ]
)->build();
```

## SubscriptionGroupSingleError

### Initialization Code

#### Example

```php
$value = SubscriptionGroupSingleErrorBuilder::init(
    'subscription_group2'
)->build();
```

## string

### Initialization Code

#### Example

```php
$value = 'String0';
```

