## About MetaTags

The `<meta>` tag defines metadata about an HTML document. Metadata is data (information) about data.

`<meta>`-tags are always placed in the `<head>`-section of a HTML document and are used to specify metadata about a page, such as the charset (most likely UTF-8), a page description or the pages author. 

Metadata can also be used to verify page-ownership, or to en- or disable certain functions of a browser.

Metadata is not displayed on the page itself, and is therefore not intended for the end-user, but is **machine parsable**.

That means that
- **search engines**, such as Google, use Metadata to gather additional information about a page,
-  **browsers** use Metadata to know how to display content (or even reload the page / follow a redirection) and
-  **other web services** use Metadata for a variety of purposes.

### Examples for MetaTags
`<meta>`-tags may look something like this in your `<head>` section:

	<meta charset="UTF-8">
	<meta http-equiv="language" content="en">
	<meta name="description" content="JokeNetworks FAQ">
	<meta name="keywords" content="Documentation, FAQ, MetaTags, HTML, WHATWG">
	<meta name="author" content="JokeNetwork">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="robots" content="noindex,nofollow">
	<meta name="revisit" content="10 days">
	<meta http-equiv="refresh" content="10">
	<meta http-equiv="refresh" content="5;url=https://faq.jokenetwork.de">

    
### Using MetaTags for SEO
Some `<meta>`-tags are relevant for search engine optimazation. 

A full overview over MetaTags which are understood by Google and other search engines is listed on a [Google Search Central Page](https://developers.google.com/search/docs/advanced/crawling/special-tags).

**⚠️ Please note:**
While `name="keywords"` is marked as <span class="badge bg-secondary">Deprecated</span> and is therefore not relevant anymore,
`name="description"` is not fully ignored by search enginges, but Google encourages you to put more effort into your pages content instead of describing it through the description-extension. 

### Reference
Read more about MetaTags at [W3Schools](https://www.w3schools.com/tags/tag_meta.asp) or at [Google Search Central](https://developers.google.com/search/docs/advanced/crawling/special-tags).

## About MetaExtensions
Meta Extensions are extension values for the `name=""` attribute of the HTML `<meta>` element and are the main subject of the Docs at [faq.jokenetwork.de](/).

The `name=""`attributes for the `<meta>`-tags should be well documented to be understood by everyone and listed as "*Proposal*" in the [WHATWG Wiki](https://wiki.whatwg.org/wiki/MetaExtensions).

~~Also, if they should not be marked as an error in the [W3 Validator](https://validator.w3.org/nu/), they have to be added from the WHATWG Wiki to the Validator.~~

Learn more about adding a MetaExtension to the WHATWG Wiki and to the W3 Validator here: [Contribute](README#Contribute).

### Reference
Read more about MetaExtensions at the [WHATWG Wiki](https://wiki.whatwg.org/wiki/MetaExtensions).
