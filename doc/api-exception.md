
# ApiException

Thrown when there is a network error or HTTP response status code is not okay. It also extends [Exception](https://www.php.net/manual/en/class.exception.php) that provides it with methods like `getMessage()`, `getCode()`, etc.

## Methods

| Name | Type | Description |
|  --- | --- | --- |
| `getHttpRequest()` | [`HttpRequest`](../doc/http-request.md) | Returns the HTTP request. |
| `getHttpResponse()` | [`?HttpResponse`](../doc/http-response.md) | Returns the HTTP response. |
| `hasResponse()` | `bool` | Is the response available? |

