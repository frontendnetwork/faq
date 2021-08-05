# JokeNetwork FAQ
[<img src="https://faq.jokenetwork.de/css/sponsor.png" alt="Sponsor" width="100">](https://github.com/sponsors/philipbrembeck)

Welcome to JokeNetworks Documentation page 🥳


Here you can find and contribute to the source-code of our FAQ-page, which is publicly available at https://faq.jokenetwork.de.

## What is this about?

In our documentation anyone can find public ~~docs for our (deprecated) services (which aren't important for that matter) and also~~ **docs for the W3 WHATWG community** ([the MetaExtensions part of WhatWG](https://wiki.whatwg.org/wiki/MetaExtensions)).

The "faq" page with questions answered, that weren't asked frequently, was created in January 2014, when [@philipbrembeck](https://github.com/philipbrembeck) was in need of creating a new HTML MetaExtension, which would not be marked as an error in the W3 Validator.

## Contribute
If you want to contribute, fork the Git-Repro (jokenetwork/faq) and create a new document under `source/` with `<title of your page>.md`.

You can also change existing doc-pages.
Then just open a pull request and we'll review your page and add it. 

**Please note that file-names are case-sensitive!**

The main purpose of this "faq"/doc-page is now being a documentation-source to the @WHATWG Wiki.

Anyone can:

- Create a new page (source/ → new file → .md file)
- Edit files
> Please don't open issues but instead directly make a Pull Request with your edits/new creations.

### Add extensions to the WHATWG Wiki
If you want to add your meta-extensions to the WhatWG-Wiki, please register on [WHATWG Wiki](https://wiki.whatwg.org). To request an account, ask an autoconfirmed user on [Chat](https://whatwg.org/chat).
Then go to the Registry [<meta name>](https://wiki.whatwg.org/wiki/MetaExtensions), edit the page and add your meta tag (in alphabetical order!). 
You can link to https://faq.jokenetwork.de/[your-metaextension] for docs (_If you created them before_). 

### File Structure

	index.php
	Parsedown.php/
	README.md
	├── source/
	│   ├── apple-mobile-web-app-title.md
	│   ├── bitcoin.md
	│   ├── Blazerr.md
	│   ├── index.md
	│   ├── license:uri.md
	│   ├── license.md
	│   ├── README.md
	│   └── start.md
	└── css 


## Credits 

This repo uses:

 - [Bootstrap v3.0.3](https://getbootstrap.com)
 - [Parsedown](https://github.com/erusev/parsedown) by [Emanuil Rusev](https://erusev.com)
 - [Font Awesome v5.15.3](https://github.com/FortAwesome/Font-Awesome)

## License

All text and code in this repository is licensed under [CC-BY-NC-SA 4.0](https://creativecommons.org/licenses/by-nc-sa/4.0/).
