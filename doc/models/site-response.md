
# Site Response

## Structure

`SiteResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `site` | [`Site`](../../doc/models/site.md) | Required | - | getSite(): Site | setSite(Site site): void |

## Example

```php
use AdvancedBillingLib\Models\Builders\SiteResponseBuilder;
use AdvancedBillingLib\Models\Builders\SiteBuilder;

$siteResponse = SiteResponseBuilder::init(
    SiteBuilder::init()
        ->id(64)
        ->name('name4')
        ->subdomain('subdomain0')
        ->currency('currency4')
        ->sellerId(228)
        ->build()
)->build();
```

