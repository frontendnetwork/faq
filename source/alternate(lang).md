## MetaExtension alternate hreflang

Is used to tell the crawlers, such as GoogleBot, about localized versions of your page. 
If your website is available in multiple languages, make sure to declare them.

## Usage

````html
<link rel="alternate" hreflang="en" href="url_of_page/en">
````

`hreflang` may be any language code, e.g. `en-en` or `en`. You can also set a fallback if no language is detected: 

````html
<link rel="alternate" href="url_of_page" hreflang="x-default" />
````


### Usage samples

````html
<link rel="alternate" hreflang="de" href="url_of_page/de">
<link rel="alternate" hreflang="en" href="url_of_page/en">
<link rel="alternate" hreflang="es" href="url_of_page/es">
<link rel="alternate" href="url_of_page" hreflang="x-default" />
````

Read more at [Google Search Central](https://developers.google.com/search/docs/specialty/international/localized-versions).
