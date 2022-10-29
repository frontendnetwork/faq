## MetaExtension apple-itunes-app

Is used as a promotional method, to show the corresponding iOS app to a website in the websites header. 

Read more about `apple-itunes-app` on [Apples Developer Guide to Webkit](https://developer.apple.com/documentation/webkit/promoting_apps_with_smart_app_banners).

## Usage

````html
<meta name="apple-itunes-app" content="app-id=myAppStoreID, app-argument=myURL">
````

`app-id` is required and should include your app’s unique identifier.

`app-argument` is optional and helps your user to jump to the corresponding position to the websites position in your app.
