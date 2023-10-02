## MetaExtension canonical

The canonical Meta Extension is practically a link element, which defines what the original URL of a document is. 
The result displays in search engines as well as on printed pages.

It's mostly used if you have a mobile-version of your page on a subdomain like `https://m.jomenetwork.de` and a desktop version like `https://jokenetwork.de`. 
Search engines will only index the defined URL and not the mobile-page if a canonical link is set. 

To avoid problems that could appear when indexing your page, you should always set a canonical link in the `<head>`-section of your documents. 

## Usage

````html
<link rel="canonical" href="https://faq.jokenetwork.de">
````
