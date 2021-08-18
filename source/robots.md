## MetaExtension robots

Is used to tell crawler-robots of search engines which sites to index.

## Usage

````html
<meta name="robots" content="noindex,nofollow">
````

`content` may be:

* `all`: Standard: No restrictions, indexes all pages, doesn't need to be specified
* `index,follow`: Equivalent to `all`
* `noindex`: Page will not be shown in search results
* `nofollow`: Do not follow (internal) links on this page
* `none`: Equivalent to `noindex,nofollow`
* `noarchive`: Do not cache the page, do not show a "Show in cache"-link in search results
* `nosnippet`: Do not show a text/video snippet in search results
* `notranslate`: Do not offer translation of this page in search results
* `noimageindex`: Do not index images on this page, do not show images in search results
* `unavailable_after: [date/time]`: Do not show this page in search results after `[date/time]`

Read more at [Google Search Central](https://developers.google.com/search/docs/advanced/robots/robots_meta_tag#directives).

## W3

<i class="fas fa-check"></i> In the WHATWG Wiki | <i class="fas fa-check"></i> In the W3 Validator