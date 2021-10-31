## MetaExtension viewport

Is used to give the browser instructions on how to control the page's scaling and dimensions.

**Attention:** Is essential for the use of media-queries in css!

## Usage

````html
<meta name="viewport" content="width=device-width, initial-scale=1.0">
````

`content` may be:

* `width=device-width`: Sets the pages width to the screen-size of the device
* `initial-scale=1.0`: Sets the initial zoom level (in this case to 1)
* `user-scalable=no`: Tells the browser if the user should be abled to scale a page or not.
  Is not reccommended and will be marked as a warning in W3 Validator since zooming in is an important accessibility feature, which is why it won't work in most browsers and is therefore marked as <span class="badge bg-danger">Unsupported</span>.

Read more at [W3Schools](https://www.w3schools.com/css/css_rwd_viewport.asp).
