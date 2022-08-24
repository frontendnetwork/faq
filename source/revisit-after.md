## MetaExtension revisit-after

Is used to tell crawler-robots of search engines when to revisit the page. Should be set if the page content changes regularly.

We recommend using a [robots.txt-file](https://developers.google.com/search/docs/advanced/robots/intro) insteads of this meta-extension or a combination of both. 

## Usage

````html
<meta name="revisit-after" content="5 days">
````

Also see [`revisit`](revisit) and [`robots`](robots).
