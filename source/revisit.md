## MetaExtension revisit

Is used to tell crawler-robots of search engines when to revisit the page. Should be set if the page content changes regularly.
As crawler-bots crawl regularly nowadays, this tag is marked as <span class="badge bg-secondary">Deprecated</span>.

We recommend using a [robots.txt-file](https://developers.google.com/search/docs/advanced/robots/intro) insteads of this meta-extension or a combination of both. 

## Usage

````html
<meta name="revisit" content="5 days">
````

Also see [`revisit-after`](revisit-after) and [`robots`](robots).
