## Meta-Tag apple-mobile-web-app-status-bar-style

The apple-mobile-web-app-status-bar-style metatag sets the status-bar color of a web-app on iOS, when [apple-mobile-web-app-capable](apple-mobile-web-app-capable) is also set to `true`.

This does not work anymore, as there is no status-bar in iOS 10 and above, and is therefore marked as <span class="badge bg-secondary">Deprecated</span>.

Read more about Apple's Webapps at [Apple's official documentation](https://developer.apple.com/library/safari/documentation/appleapplications/reference/SafariHTMLRef/Articles/MetaTags.html).

## Usage:

````html
<meta name="apple-mobile-web-app-status-bar-style" content="black">
````


Variables for `content`:
- `default`
- `black`
- `black-translucent`

Requires the [apple-mobile-web-app-capable](apple-mobile-web-app-capable) meta-tag to be set to `true`.

## W3
<i class="fas fa-check"></i> In the WHATWG Wiki | <i class="fas fa-check"></i>  In the W3 Validator
