
# Create Metafields Request Metafields

## Data Type

`CreateMetafield|CreateMetafield[]`

## Cases

| Type |
|  --- |
| [`CreateMetafield`](../../../doc/models/create-metafield.md) |
| [`CreateMetafield[]`](../../../doc/models/create-metafield.md) |

## CreateMetafield

### Initialization Code

#### Example

```php
$value = CreateMetafieldBuilder::init()
    ->name('my_field')
    ->scope(
        MetafieldScopeBuilder::init()
            ->csv(IncludeOption::EXCLUDE)
            ->invoices(IncludeOption::EXCLUDE)
            ->statements(IncludeOption::EXCLUDE)
            ->portal(IncludeOption::EXCLUDE)
            ->publicShow(IncludeOption::EXCLUDE)
            ->publicEdit(IncludeOption::EXCLUDE)
            ->build()
    )
    ->inputType(MetafieldInput::TEXT)
    ->enum(
        [
            'string'
        ]
    )
    ->build();
```

## CreateMetafield[]

### Initialization Code

#### Example

```php
$value = [
    CreateMetafieldBuilder::init()->build()
];
```

