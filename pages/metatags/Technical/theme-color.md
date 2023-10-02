## MetaExtension theme-color

Is used to brand the address bar of a website (only on mobile devices) in a selected Hex-color. 

Read more about `theme-color` on [Googles Developer Portal](https://developers.google.com/web/updates/2014/11/Support-for-theme-color-in-Chrome-39-for-Android) or in the [HTML Specification](https://html.spec.whatwg.org/multipage/semantics.html#meta-theme-color).

## Usage

````html
<meta name="theme-color" content="#317EFB">
````

`content` can be any valid Hex-color or CSS color-value.

There can also be a `media`-attribute added to define in which system-color-scheme which color should be used for the address bar:

````html
<meta name="theme-color" content="#317EFB" media="(prefers-color-scheme: dark)">
````

`theme-color` is defined in the [HTML Specification](https://html.spec.whatwg.org/multipage/semantics.html#meta-theme-color) and is therefore a HTML Standard.
