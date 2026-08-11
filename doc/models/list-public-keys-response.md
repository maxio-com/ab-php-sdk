
# List Public Keys Response

## Structure

`ListPublicKeysResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargifyJsKeys` | [`?(PublicKey[])`](../../doc/models/public-key.md) | Optional | - | getChargifyJsKeys(): ?array | setChargifyJsKeys(?array chargifyJsKeys): void |
| `meta` | [`?ListPublicKeysMeta`](../../doc/models/list-public-keys-meta.md) | Optional | - | getMeta(): ?ListPublicKeysMeta | setMeta(?ListPublicKeysMeta meta): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\ListPublicKeysResponseBuilder;
use AdvancedBillingLib\Models\Builders\PublicKeyBuilder;
use AdvancedBillingLib\Utils\DateTimeHelper;
use AdvancedBillingLib\Models\Builders\ListPublicKeysMetaBuilder;

$listPublicKeysResponse = ListPublicKeysResponseBuilder::init()
    ->chargifyJsKeys(
        [
            PublicKeyBuilder::init()
                ->publicKey('public_key8')
                ->requiresSecurityToken(false)
                ->createdAt(DateTimeHelper::fromRfc3339DateTime('2016-03-13T12:52:32.123Z'))
                ->build()
        ]
    )
    ->meta(
        ListPublicKeysMetaBuilder::init()
            ->totalCount(150)
            ->currentPage(126)
            ->totalPages(138)
            ->perPage(152)
            ->build()
    )
    ->build();
```

