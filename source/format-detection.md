## MetaExtension format-detection

The format-detection metatag defines wether phone numbers are detected automatically in iOS Safari or not.

Since this is blocking an acessibility-feature, it should only be used when there is no other workaround.

Read more about Apple's iOS meta-tags at [Apple's official documentation](https://developer.apple.com/library/safari/documentation/appleapplications/reference/SafariHTMLRef/Articles/MetaTags.html).

## Usage

````html
<meta name="format-detection" content="telephone=no">
````

`content` can also be `telephone=yes`, but the meta-tag is obsolete then, since the browser does this automatically.