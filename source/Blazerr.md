This is an overview over all meta tags used by [Blazerr by JokeNetwork <i class="fas fa-external-link-alt"></i>](https://jokenetwork.de).

## blazerr-support-identifier
Is used to identify users along with a cookie, which you get from the libary `blazerr-lib.php` (available at the member-center). 
Please see "blazerr-support-id-noncookies" for a GDPR conform version.

### Usage: 

	<meta name="blazerr-support-identifier" content="Your uniqid">

<hr>

## blazerr-support-id-noncookies (Deprecated)
Is used to identify users without a cookie, you can get your uniqid from libary "blazerr-cookies-eu.php" (available at the Member-Center).

### Usage:
	<meta name="blazerr-support-id-noncookies" content="Your uniqid">

<hr> 

## blazerr-ssl
Decides whether connect via a secure connection or not to JokeNetwork's Blazerr-System. If this tag is not set, Blazerr automatically connects via a SSL-Connection.

### Usage:
	<meta name="blazerr-ssl" content="yes">

<hr>

## blazerr-secure (Deprecated)
Decides whether connect via a secure connection or not to JokeNetwork's Blazerr-System. Synonym to blazerr-ssl, but only for old browsers such as Internet Explorer 7.

### Usage:
	<meta name="blazerr-secure" content="yes">

<hr>

## blazerr-seo
Checks whether Blazerr SEO has been used or not. It contains the user-id and the SEO Version

### Usage:
	<meta name="blazerr-seo" content="0001;v0.7">
 0001 is an example for a user id, v0.7 identifies which version of SEO is used (In this case version Beta 7 / 0.7). If you're using Blazerr SEO, you have to include this meta-tag. Otherwise the tool will not work.

### W3
<i class="fas fa-check"></i> In the WHATWG Wiki | <i class="fas fa-check"></i>  In the W3 Validator
