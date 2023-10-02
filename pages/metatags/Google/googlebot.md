## MetaExtension googlebot

Is used to tell the google crawler specifically, what to do with search results from your website. 

Google announced in 2017 that this tag is no longer supported, which is why it's marked as <span class="badge bg-danger">Unsupported</span>. Use a [`robots.txt`](https://developers.google.com/search/docs/advanced/robots/intro) instead.

## Usage

````html
<meta name="googlebot" content="noindex,nofollow">
````

`content` may be:

| content                          | Usage                                                                         |
|----------------------------------|-------------------------------------------------------------------------------|
| `noarchive`                      | Do not cache the page, do not show a "Show in cache"-link in search results   |
| `nosnippet`                      | Do not show a text/video snippet in search results                   		     |
| `noindex`                        | Page will not be shown in search results                         		         |
| `nofollow`                       | Do not follow (internal) links on this page                            	     |


### Usage samples

````html
<meta name="googlebot" content="noarchive">
<meta name="googlebot" content="nosnippet">
````

## Results
* `nosnippet`:
	![DuckDuckGo search result](/img/nosnippet.svg)

* `noarchive`:
	![DuckDuckGo search result](/img/noarchive.svg)

Read more at [Google Search Central](https://developers.google.com/search/docs/advanced/crawling/special-tags).

Also see [`robots`](robots) and [`google`](google).
