## MetaExtension refresh

Is used to refresh the page after a defined timespan or to redirect to another page.

**Please note:** It is not recommended to not use the `refresh`-Meta Extension to redirect to another page but instead to use HTTP-Headers or other redirection methods.

## Usage

````html
<meta http-equiv="refresh" content="5;url=https://faq.jokenetwork.de">
````

In this example, `5` defines a timespan of 5 seconds before a redirection to the defined URI `https://faq.jokenetwork.de` takes place.
