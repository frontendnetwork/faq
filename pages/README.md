<p align="center">
 <img width="100px" src="img/logo.svg" align="center" alt="JokeNetwork FAQ Logo">
 <h1 align="center">FrontendNetwork FAQ</h1>
 <p align="center">Documenting MetaExtensions for the WHATWG Community</p>
</p>

Welcome to FrontendNetworks Documentation page 🥳

Here you can find and contribute to the source-code of our documentation-page, which is publicly available at <https://faq.frontendnet.work>.

## What is this about?

In our documentation anyone can find public ~~docs for our (deprecated) services (which aren't important for that matter) and also~~ **docs for the W3 WHATWG community** ([the MetaExtensions part of WhatWG](https://wiki.whatwg.org/wiki/MetaExtensions)).

The "faq" page with questions answered, that weren't asked frequently, was created in January 2014, when [@philipbrembeck](https://github.com/philipbrembeck) was in need of creating a new HTML MetaExtension, which would not be marked as an error in the W3 Validator.

## Contribute

If you want to contribute, fork the Git-Repro ([frontendnetwork/faq](https://github.com/frontendnetwork/faq)) and create a new document under `pages/metatags/` named `<title of your page>.md`.

You can also change existing doc-pages. Just click on "Edit on GitHub" on the corresponding page.
Then just open a pull request and we'll review your page and add it.

### How to contribute

Please write your changes in [Markdown](https://www.markdownguide.org). 

**Anyone can:**

- Create a new page (pages/metatags/ → new file → .md file)
- Edit files


> Please don't open issues but instead directly make a Pull Request with your edits/new creations.


### Add extensions to the WHATWG Wiki

<img width="100px" src="img/logo_alt.svg" align="center" alt="FrontendNetwork FAQ Logo">

If you want to add your meta-extensions to the WhatWG-Wiki, please register on [WHATWG Wiki](https://wiki.whatwg.org/). To request an account, ask an autoconfirmed user on [Chat](https://whatwg.org/chat). Then go to [Registry `<meta name>`](https://wiki.whatwg.org/wiki/MetaExtensions), edit the page and add your meta tag (in alphabetical order!).
You can link to https://faq.jokenetwork.de/[your-metaextension] (**Please note that file-names are case-sensitive!**) for the documentation of your meta-tag (Only if you created them before).

### Add extension to W3 Validator 

Just send an e-mail to [www-validator@w3.org](mailto:www-validator@w3.org), informing the W3 about the meta-tag you added to the WHATWG Wiki, their purpose, and state that you added them to the WHATWG Wiki.

### File Structure

	index.php
	Parsedown.php/
	README.md
	├── source/
	│   └── [sourcefiles].md
	└── css 

## Credits 

This repo uses:

- [Bootstrap v3.0.3](https://getbootstrap.com) 
- [Parsedown](https://github.com/erusev/parsedown) by [Emanuil Rusev](https://erusev.com)
- [alpine.js](https://alpinejs.dev)
- [Prism.js](https://prismjs.com)
- [Font Awesome v5.15.3](https://github.com/FortAwesome/Font-Awesome)

## License

All text and code in this repository is licensed under [CC-BY 4.0](https://creativecommons.org/licenses/by/4.0/).
