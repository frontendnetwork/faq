<img src="https://faq.jokenetwork.de/img/logo.svg" alt="Logo Alternative" width="100">

## About MetaTags

> The `<meta>` tag defines metadata about an HTML document. Metadata is data (information) about data.

`<meta>`-tags are always placed in the `<head>`-section of a HTML document and are used to specify metadata about a page, such as the charset (most likely UTF-8), a page description or the pages author. 
Metadata can also be used to verify page-ownership, or to en- or disable certain functions of a browser.

Metadata is not displayed on the page itself, and is therefore not intended for the end-user, but is **machine parsable**.

That means that
- __**search engines**__, such as Google, use Metadata to gather additional information about a page,
-  __**browsers**__ use Metadata to know how to display content (or even reload the page / follow a redirection) and
-  __**other web services**__ use Metadata for a variety of purposes.

### Examples for MetaTags
`<meta>`-tags can look anything like this in your `<head>` section:

    <meta charset="UTF-8">
    <meta http-equiv="language" content="en">
    <meta name="description" content="JokeNetworks FAQ">
    <meta name="keywords" content="Documentation, FAQ, MetaTags, HTML, WHATWG">
    <meta name="author" content="JokeNetwork">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex,nofollow">
    <meta http-equiv="refresh" content="10">
    <meta http-equiv="refresh" content="5;url=https://faq.jokenetwork.de">


## About MetaExtensions

Meta Extensions are extension values for the `name=""` attribute of the HTML `<meta>` element.

