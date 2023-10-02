## MetaExtension google

Is used to tell the google crawler specifically, what to do with search results from your website. 

## Usage

````html
<meta name="google" content="notranslate">
````

`content` may be:

| content                          | Usage                                                                         |
|----------------------------------|-------------------------------------------------------------------------------|
| `notranslate`                    | Tells the crawler not to provide a translation link within the search result. |
| `nopagereadaloud`                | Prevents the website from being read aloud with the Google Assistant.		   |
| `nositelinkssearchbox`           | Prevents a search-field from appearing within the search results. 		       |


### Usage samples

````html
<meta name="google" content="nopagereadaloud">
<meta name="google" content="nositelinkssearchbox">
````

Read more at [Google Search Central](https://developers.google.com/search/docs/advanced/crawling/special-tags).