
# List Public Keys Response

## Structure

`ListPublicKeysResponse`

## Fields

| Name | Type | Tags | Description | Getter | Setter |
|  --- | --- | --- | --- | --- | --- |
| `chargifyJsKeys` | [`?(PublicKey[])`](../../doc/models/public-key.md) | Optional | - | getChargifyJsKeys(): ?array | setChargifyJsKeys(?array chargifyJsKeys): void |
| `meta` | [`?ListPublicKeysMeta`](../../doc/models/list-public-keys-meta.md) | Optional | - | getMeta(): ?ListPublicKeysMeta | setMeta(?ListPublicKeysMeta meta): void |

## Example (as JSON)

```json
{
  "chargify_js_keys": [
    {
      "public_key": "public_key8",
      "requires_security_token": false,
      "created_at": "2016-03-13T12:52:32.123Z"
    },
    {
      "public_key": "public_key8",
      "requires_security_token": false,
      "created_at": "2016-03-13T12:52:32.123Z"
    }
  ],
  "meta": {
    "total_count": 150,
    "current_page": 126,
    "total_pages": 138,
    "per_page": 152
  }
}
```

