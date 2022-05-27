<p align="center">
 <img width="100px" src="img/logo.svg" align="center" alt="JokeNetwork FAQ Logo">
 <h1 align="center">JokeNetwork FAQ</h1>
 <p align="center">Documenting MetaExtensions for the WHATWG Community</p>
</p>
  <p align="center">
	<a href="https://app.fossa.com/projects/git%2Bgithub.com%2FJokeNetwork%2Ffaq?ref=badge_shield" alt="FOSSA Status"><img src="https://app.fossa.com/api/projects/git%2Bgithub.com%2FJokeNetwork%2Ffaq.svg?type=small"/></a>
	<a href="https://jokenetwork.de/badges"><img alt="JKN Status: Active" src="https://jokenetwork.de/assets/img/gitstatus/communitybased.svg"></a>
	<a href="https://codeclimate.com/github/JokeNetwork/faq/maintainability"><img src="https://api.codeclimate.com/v1/badges/471a4451f5f942ebadc3/maintainability" /></a>
	<a href="https://www.codacy.com/gh/JokeNetwork/faq/dashboard?utm_source=github.com&amp;utm_medium=referral&amp;utm_content=JokeNetwork/faq&amp;utm_campaign=Badge_Grade"><img src="https://app.codacy.com/project/badge/Grade/289e5f20012c427283981741b1402da9" alt="Codacy Badge"></a>
    <a href="https://github.com/JokeNetwork/faq/actions/workflows/codacy-analysis.yml"><img alt="Codac Security Scan" src="https://github.com/JokeNetwork/faq/actions/workflows/codacy-analysis.yml/badge.svg"></a>
	<a href="https://creativecommons.org/licenses/by/4.0/"><img src="https://img.shields.io/badge/License-CC%20BY%204.0-lightgrey.svg" alt="License: CC BY 4.0"></a>
	<a href="https://github.com/sponsors/philipbrembeck"><img src="https://img.shields.io/badge/Sponsor-white.svg?logo=githubsponsors" alt="Consider Sponsoring"></a>
	<a href="https://www.paypal.com/donate?hosted_button_id=N4F7DAQH7ET2G"><img src="https://img.shields.io/badge/Donate-blue.svg?logo=paypal" alt="Donate"></a>
  </p>

Welcome to JokeNetworks Documentation page 🥳

Here you can find and contribute to the source-code of our documentation-page, which is publicly available at <https://faq.jokenetwork.de>.

## What is this about?

In our documentation anyone can find public ~~docs for our (deprecated) services (which aren't important for that matter) and also~~ **docs for the W3 WHATWG community** ([the MetaExtensions part of WhatWG](https://wiki.whatwg.org/wiki/MetaExtensions)).

The "faq" page with questions answered, that weren't asked frequently, was created in January 2014, when [@philipbrembeck](https://github.com/philipbrembeck) was in need of creating a new HTML MetaExtension, which would not be marked as an error in the W3 Validator.

## Contribute

If you want to contribute, fork the Git-Repro ([jokenetwork/faq](https://github.com/JokeNetwork/faq)) and create a new document under `source/` named `<title of your page>.md`.

You can also change existing doc-pages. Just click on "Edit on GitHub" on the corresponding page.
Then just open a pull request and we'll review your page and add it.

### How to contribute

Please write your changes in [Markdown](https://www.markdownguide.org). 
You can use the following components of [Bootstrap v5.0](https://getbootstrap.com):

- [`Alerts`](https://getbootstrap.com/docs/5.0/components/alerts/)
- [`Badges`](https://getbootstrap.com/docs/5.1/components/badge/)
- [`Buttons`](https://getbootstrap.com/docs/5.0/components/buttons/)
- [`Cards`](https://getbootstrap.com/docs/5.0/components/card/)

You can also use all free icons from [FontAwesome v5.0](https://fontawesome.com).

**Anyone can:**

- Create a new page (source/ → new file → .md file)
- Edit files


> Please don't open issues but instead directly make a Pull Request with your edits/new creations.


### Add extensions to the WHATWG Wiki

<img width="100px" src="img/logo_alt.svg" align="center" alt="JokeNetwork FAQ Logo">

If you want to add your meta-extensions to the WhatWG-Wiki, please register on [WHATWG Wiki](https://wiki.whatwg.org/). To request an account, ask an autoconfirmed user on [Chat](https://whatwg.org/chat). Then go to [Registry `<meta name>`](https://wiki.whatwg.org/wiki/MetaExtensions), edit the page and add your meta tag (in alphabetical order!).
You can link to https://faq.jokenetwork.de/[your-metaextension] (**Please note that file-names are case-sensitive!**) for the documentation of your meta-tag (Only if you created them before).

### Add extension to W3 Validator 

Just send an e-mail to [www-validator@w3.org](mailto:www-validator@w3.org), informing the W3 about the meta-tag you added to the WHATWG Wiki, their purpose, and state that you added them to the WHATWG Wiki.

### Installing and file Structure
#### Filestructure

	index.php
	Parsedown.php/
	README.md
	├── source/
	│   └── [sourcfiles].md
	└── css 
#### Installing
Since this repo mainly exists to change and add definitions to the WHATWG MetaExtensions documentation we don't reccomend installing it on your own server. 
If you want to do so anyways or create a mirror of the documentation (which is up and running since 2015 without any major issues), you can use the following guide to install it. Please be aware, that you need to figure out some things yourself and this documentation is not complete. 

Minimum requirements:
* Apache or Nginx webserver 
* PHP >=7.2 installed
* Composer installed
* npm installed
* Github API Personal access token (Key & Secret) 

Download the latest [release from here](https://github.com/JokeNetwork/faq/releases).

Run in the repos directory: 
````bash
composer install
npm install 
````

## Security
All security issues and vulnerabilites regarding this repo which are fixed or in the process of being fixed are listed on the [philip.media Responsible vulnerability disclosure acknowledgements](https://philip-media.github.io/security-policy/Acknowledgments.html). 

## Credits 

This repo uses:

- [Bootstrap v3.0.3](https://getbootstrap.com) (C) by [Twitter, Inc](https://twitter.com). & [The Bootstrap Authors](https://github.com/twbs/bootstrap/graphs/contributors) (Published under MIT license)
- [Parsedown](https://github.com/erusev/parsedown) (C) by [Emanuil Rusev](https://erusev.com) (Published under MIT license)
- [alpine.js](https://alpinejs.dev) (C) by [Caleb Porzio](https://github.com/calebporzio) (Published unter MIT license)
- [Prism.js](https://prismjs.com) (C) by Lea Verou (Published under MIT license) 
- [Font Awesome v5.15.3](https://github.com/FortAwesome/Font-Awesome) (C) by the [FontAwesome-Team](https://github.com/FortAwesome) (Published under MIT license, CC BY 4.0 License and SIL OFL 1.1 License)

## License

All text and code in this repository is licensed under [CC-BY 4.0](https://creativecommons.org/licenses/by/4.0/) besides the aboved named licenses for dependencies.
