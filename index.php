<?php
/**
 * JokeNetwork FAQ for WHATWG MetaExtensions
 * @link https://github.com/jokenetwork/faq
 * @author Philip Brembeck
 * @author JokeNetwork and Contributors 
 * @copyright (C) 2022 JokeNetwork
 * @license CC-BY-4.0
 * @link https://github.com/JokeNetwork/faq/blob/main/LICENSE
 * @var string $user
 * @var string $secret
 */

// Define release version
$version = "v2.3.5";

// Require GitHub API via php-github-api by KnpLabs
require_once __DIR__ . '/vendor/autoload.php';
require_once 'credentials.php';
$client = new \Github\Client();
$client->authenticate($user, $secret, Github\Client::AUTH_CLIENT_ID);
$releases   = $client->api('repo')->releases()->all('jokenetwork', 'faq');
$gitversion = $releases[0]['tag_name'];

if ($version == $gitversion) {
    $versionbadge = '<span class="badge rounded-pill bg-success">Up to date: ' . $version . ' <i class="far fa-check-circle"></i></span>';
} else {
    $versionbadge = '<span class="badge rounded-pill bg-danger">Conflict: Git: ' . $gitversion . ' <i class="far fa-times-circle"></i></span> <span class="badge rounded-pill bg-secondary">Conflict: Server ' . $version . ' <i class="far fa-question-circle"></i></span>';
}

// Server URI
$CurPageURL = $_SERVER['REQUEST_URI'];
$CurPageURL = ltrim($CurPageURL, '/');

// Check if URI contains ".md", if so, remove ".md"
if (substr($CurPageURL, -3) == ".md") {
    $CurPageURL = substr($CurPageURL, 0, -3);
}

// Check if index-page
if (empty($CurPageURL) or $CurPageURL == ".%E2%80%8A.") {
    $CurPageURL = "index";
}

// Include parsedown and initialize parsing the markdown file
include 'Parsedown.php';
$file      = basename($CurPageURL);
$content   = file_get_contents('https://raw.githubusercontent.com/JokeNetwork/faq/main/source/' . $file . '.md');
$Parsedown = new Parsedown();
$Parsedown->setBreaksEnabled(true);
$con = $Parsedown->text($content);

// docs-pages
// Check if requested file exists
if (file_get_contents('https://raw.githubusercontent.com/JokeNetwork/faq/main/source/' . $CurPageURL . '.md') !== "404: Not Found" && !empty($CurPageURL) && $CurPageURL !== "index" && !empty(file_get_contents('https://raw.githubusercontent.com/JokeNetwork/faq/main/source/' . $CurPageURL . '.md'))) {

    // Send HTTP Response Code "200 - OK"
    http_response_code(200);

    $verify = file_get_contents('https://wiki.whatwg.org/wiki/MetaExtensions');
    if (preg_match("/\b".$$CurPageURL."\b/i", $verify)) {
       $whatwgstatus = '<h2>W3</h2><p><i class="fas fa-check"></i> In the WHATWG Wiki</p>';
    }
    else {
        $whatwgstatus == '<h2>W3</h2><p><i class="fas fa-times"></i> Not in the WHATWG Wiki</p>';
    }

    // Check if filename is longer than 11 characters, shorten if true
    $fileshort = strlen($file) > 18 ? substr($file, 0, 18) . "..." : $file;

    // Render the page
    echo '<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <title>MetaTag Docs » ' . $file . '</title>
            <meta name="description" content="Documentation for MetaTags in HTML">
            <meta name="viewport" content="width=device-width">

            <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
            <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
            <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">

            <link href="css/style.css" rel="stylesheet">

        </head>

        <body data-theme="dark">
            <div class="col-lg-8 mx-auto p-3 py-md-5">
            <header class="mb-5">
              <h1 class="float-md-start">' . $file . '</h1>
              <nav class="nav justify-content-center float-md-end">
                <a class="nav-link" href="https://github.com/JokeNetwork/faq/blob/main/source/' . $file . '.md"><i class="fab fa-github"></i> Edit on GitHub</a>
                <div class="nav-link">
                  <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="darkSwitch">
                    <label class="custom-control-label" id="darkmode" for="darkSwitch"></label>
                  </div>
                </div>
              </nav>
              <div style="clear:both"></div>
              <nav aria-label="breadcrumb">
                      <ol class="breadcrumb" style="white-space: nowrap; overflow: hidden; margin-bottom: 0px;">
                        <li class="breadcrumb-item"><a href="/">Docs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">' . $file . '</li>
                      </ol>
                    </nav>
            </header>
            <main class="pb-5 content">

                    ' . $con . '
                    ' . $whatwgstatus . '
                    ' . $versionbadge . '
                </main>
                    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
                        <p class="col-md-4 mb-0 text-muted">Licensed under <a href="https://creativecommons.org/licenses/by/4.0/"><i class="fab fa-creative-commons"></i> CC-BY 4.0</a></p>
                        <span class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                          <a href="//github.com/sponsors/philipbrembeck/" class="btn-dark sponsor" role="button"><i class="far fa-heart"></i> Sponsor</a>
                        </span>
                        <ul class="nav col-md-4 justify-content-end">
                          <li class="nav-item"><a href="privacy-policy" class="nav-link px-2 text-muted">Privacy Policy</a></li>
                        </ul>
                    </footer>
                    </div>

                    <script src="js/bundle.js"></script>
                    <script>anchors.add();</script>';

    // Analytics & Cookie, ignore
    header('Access-Control-Allow-Origin: https://stats.faq.jokenetwork.de');
    if (isset($_COOKIE['log']) && $_COOKIE['log'] == "Yes") {echo '<script async src="https://stats.faq.jokenetwork.de/tracker.js" data-ackee-server="https://stats.faq.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475" data-ackee-opts=\'{ "detailed": true }\'></script>';} elseif (isset($_COOKIE['log']) && $_COOKIE['log'] == "No") {echo '<script async src="https://stats.faq.jokenetwork.de/tracker.js" data-ackee-server="https://stats.faq.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>';} else {echo '<script async src="https://stats.faq.jokenetwork.de/tracker.js" data-ackee-server="https://stats.faq.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475" data-ackee-opts=\'{ "detailed": true }\'></script>';}

    echo '
                    </body>

                    </html>';

}

// index-page
// Check if URI is empty and therefore refer to index-page
elseif ($CurPageURL == "index") {

    // Send HTTP Response Code "200 - OK"
    http_response_code(200);

    // Render the page
    echo '<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <title>MetaTag Docs » index</title>
            <meta name="description" content="Documentation for MetaTags in HTML">
            <meta name="viewport" content="width=device-width">

            <link rel="apple-touch-icon" sizes="180x180" href="img/apple-touch-icon.png">
            <link rel="icon" type="image/png" href="img/favicon-32x32.png" sizes="32x32">
            <link rel="icon" type="image/png" href="img/favicon-16x16.png" sizes="16x16">

            <link href="css/style.css" rel="stylesheet">
        </head>

        <body data-theme="dark">
            <div class="col-lg-8 mx-auto p-3 py-md-5">
            <header class="mb-5">
              <h1 class="float-md-start">Docs</h1>
              <nav class="nav justify-content-center float-md-end">
                <a class="nav-link" href="https://github.com/JokeNetwork/faq/blob/main/source/' . $file . '.md"><i class="fab fa-github"></i> Edit on GitHub</a>
                <div class="nav-link">
                  <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="darkSwitch">
                    <label class="custom-control-label" id="darkmode" for="darkSwitch"></label>
                  </div>
                </div>
              </nav>
              <div style="clear:both"></div>
               <nav aria-label="breadcrumb">
                      <ol class="breadcrumb" style="white-space: nowrap; overflow: hidden; margin-bottom: 0px;">
                        <li class="breadcrumb-item active">Docs</li>
                      </ol>
                    </nav>
            </header>
            <main class="pb-5 content">
            ' .$con;

    // Render a "index of"-style ul-menu, using GitHub as a source
    // Load files from GitHub
    $fileInfo = $client->api('repo')->contents()->show('JokeNetwork', 'faq', 'source');

    ?>

            <!-- Load list from GitHub into "items" -->
            <div x-data="{search: '', items: [<?php array_walk($fileInfo, function ($data) {print "'" . $data['name'] . "',";});?>],get filteredItems() {return this.items.filter(i => i.startsWith(this.search))}}">

            <div class="input-group input-group-sm mb-3 search">
                <input x-model="search"  type="text" class="form-control" aria-describedby="inputGroup-sizing-sm" placeholder="Search for MetaExtensions...">
                <span class="input-group-text" id="inputGroup-sizing-sm"><i class="fas fa-search"></i></span>
            </div>

                <ul>
                    <template x-for="item in filteredItems" :key="item">
                        <li x-text="item" class="link" onclick="window.open(innerHTML, '_self')"></li>
                    </template>
                    <noscript><?php array_walk($fileInfo, function ($data) {print '<li><a href="'. $data['name'].'">'. $data['name'].'</a></li>';}); ?></noscript>
                </ul>
            </div>

            <?php
    // Load contributors from GitHub
    $contributors = $client->api('repo')->contributors('JokeNetwork', 'faq');

    // Count the contributors, add +1 for WHATWG contributions
    $numbercontributors = count($contributors) + 1;

    echo '<h2 id="Contributors">Contributors <span class="badge rounded-pill bg-muted">' . $numbercontributors . '</span></h2><ul class="contributors">';

    array_walk($contributors, function ($data) {print '<li class="contribute"><div class="contributor_card"><div class="contributor_image"><a href="' . $data['html_url'] . '"><img src="' . $data['avatar_url'] . '" alt="' . $data['login'] . '" class="fullimg"></a></div><div class="contributor_info"><span class="contributor_name"><a href="' . $data['html_url'] . '">' . $data['login'] . '</a></span><span class="contributor_contributions">' . $data['contributions'] . ' Contributions</span></div></div></li>';});
    echo '
            <li class="contribute"><div class="contributor_card"><div class="contributor_image"><a href="//github.com/WHATWG"><img src="https://avatars.githubusercontent.com/u/2226336?v=4" alt="WHATWG" class="fullimg"></a></div><div class="contributor_info"><span class="contributor_name"><a href="//github.com/WHATWG">WHATWG</a></span><span class="contributor_contributions">Contributing</span></div></div></li>

            </ul>
            <p>Want to get added to this list? <a href="README.md#contribute">Learn how to contribute</a>.</p>
            ' . $versionbadge . '
                </main>
                    <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
                        <p class="col-md-4 mb-0 text-muted">Licensed under <a href="https://creativecommons.org/licenses/by/4.0/"><i class="fab fa-creative-commons"></i> CC-BY 4.0</a></p>
                        <span class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                          <a href="//github.com/sponsors/philipbrembeck/" class="btn-dark sponsor" role="button"><i class="far fa-heart"></i> Sponsor</a>
                        </span>
                        <ul class="nav col-md-4 justify-content-end">
                          <li class="nav-item"><a href="privacy-policy" class="nav-link px-2 text-muted">Privacy Policy</a></li>
                        </ul>
                    </footer>
            </div>
            <script src="js/bundle.js"></script>
            <script>anchors.add();</script>';

    // Analytics & Cookie, ignore
    header('Access-Control-Allow-Origin: https://stats.faq.jokenetwork.de');
    if (isset($_COOKIE['log']) && $_COOKIE['log'] == "Yes") {echo '<script async src="https://stats.faq.jokenetwork.de/tracker.js" data-ackee-server="https://stats.faq.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475" data-ackee-opts=\'{ "detailed": true }\'></script>';} elseif (isset($_COOKIE['log']) && $_COOKIE['log'] == "No") {echo '<script async src="https://stats.faq.jokenetwork.de/tracker.js" data-ackee-server="https://stats.faq.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>';} else {echo '<script async src="https://stats.faq.jokenetwork.de/tracker.js" data-ackee-server="https://stats.faq.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475" data-ackee-opts=\'{ "detailed": true }\'></script>';}
    echo '
        </body>

        </html>';
}

// error-page
// Check if requested file exists
elseif (!empty($CurPageURL) && file_get_contents('https://raw.githubusercontent.com/JokeNetwork/faq/main/source/' . $CurPageURL . '.md') == "404: Not Found" or empty(file_get_contents('https://raw.githubusercontent.com/JokeNetwork/faq/main/source/' . $CurPageURL . '.md'))) {

    $error = "404 - No such file";

    // Send HTTP Response Code "404 - Not found"
    http_response_code(404);

    // Check if filename is longer than 8 or 5 chars, if so, shorten
    $fileshort = strlen($CurPageURL) > 11 ? substr($CurPageURL, 0, 11) . "..." : $CurPageURL;
    $filemid   = strlen($CurPageURL) > 15 ? substr($CurPageURL, 0, 15) . "..." : $CurPageURL;

    echo '<!DOCTYPE html>
        <html lang="en">

        <head>
            <meta charset="utf-8">
            <title>MetaTag Docs » ' . $error . '</title>
            <meta name="description" content="Documentation for MetaTags in HTML">
            <meta name="viewport" content="width=device-width">

            <link href="css/style.css" rel="stylesheet">
        </head>

        <body data-theme="dark">
            <div class="col-lg-8 mx-auto p-3 py-md-5">
            <header class="mb-5">
              <h1 class="float-md-start">Error code ' . $error . '</h1>
              <nav class="nav justify-content-center float-md-end">
                <a class="nav-link" href="https://github.com/JokeNetwork/faq/new/main/source"><i class="fab fa-github"></i> Create on GitHub</a>
                <div class="nav-link">
                  <div class="form-check form-switch">
                    <input type="checkbox" class="form-check-input" id="darkSwitch">
                    <label class="custom-control-label" id="darkmode" for="darkSwitch"></label>
                  </div>
                </div>
              </nav>
              <div style="clear:both"></div>
               <nav aria-label="breadcrumb">
                      <ol class="breadcrumb" style="white-space: nowrap; overflow: hidden; margin-bottom: 0px;">
                        <li class="breadcrumb-item"><a href="/">Docs</a></li>
                        <li class="breadcrumb-item active" aria-current="page">' . $filemid . '</li>
                      </ol>
                </nav>
            </header>
            <main class="pb-5 content">
                    <h3>' . $filemid . ': ' . $error . '</h3>
                    Go to <a href="//faq.jokenetwork.de">index</a> for an overview.
                </main>
                 <footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
                        <p class="col-md-4 mb-0 text-muted">Licensed under <a href="https://creativecommons.org/licenses/by/4.0/"><i class="fab fa-creative-commons"></i> CC-BY 4.0</a></p>
                        <span class="col-md-4 d-flex align-items-center justify-content-center mb-3 mb-md-0 me-md-auto link-dark text-decoration-none">
                          <a href="//github.com/sponsors/philipbrembeck/" class="btn-dark sponsor" role="button"><i class="far fa-heart"></i> Sponsor</a>
                        </span>
                        <ul class="nav col-md-4 justify-content-end">
                          <li class="nav-item"><a href="privacy-policy" class="nav-link px-2 text-muted">Privacy Policy</a></li>
                        </ul>
                    </footer>
            </div>
            <script src="js/bundle.js"></script>
            <script>anchors.add();</script>';

    // Analytics & Cookie, ignore
    header('Access-Control-Allow-Origin: https://stats.faq.jokenetwork.de');
    if (isset($_COOKIE['log']) && $_COOKIE['log'] == "Yes") {echo '<script async src="https://stats.faq.jokenetwork.de/tracker.js" data-ackee-server="https://stats.faq.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475" data-ackee-opts=\'{ "detailed": true }\'></script>';} elseif (isset($_COOKIE['log']) && $_COOKIE['log'] == "No") {echo '<script async src="https://stats.faq.jokenetwork.de/tracker.js" data-ackee-server="https://stats.faq.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>';} else {echo '<script async src="https://stats.faq.jokenetwork.de/tracker.js" data-ackee-server="https://stats.faq.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475" data-ackee-opts=\'{ "detailed": true }\'></script>';}
    echo '
        </body>

        </html>';
}

?>