EE URL Encoder
==============

ExpressionEngine plugin to encode URLs using PHP's (urlencode)[http://www.php.net/urlencode] or (rawurlencode)[http://www.php.net/urlencode].

### Installation & Usage
Place *url_encoder* in your *system/expressionengine/third_party* directory.

```
{exp:url_encoder method='urlencode'}http://example.com?foo=bar{/exp:url_encoder}

{exp:url_encoder method='rawurlencode'}http://example.com?foo=bar{/exp:url_encoder}

{!-- if no method is provided the plugin defaults to urlencode --}
{exp:url_encoder}http://example.com?foo=bar{/exp:url_encoder}
```

