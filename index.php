<?php  
$CurPageURL = $_SERVER['REQUEST_URI'];  
$CurPageURL = ltrim($CurPageURL, '/');

if (file_get_contents('https://raw.githubusercontent.com/JokeNetwork/faq/main/source/'.$CurPageURL.'.md') !== "404: Not Found" && !empty($CurPageURL) && !empty(file_get_contents('https://raw.githubusercontent.com/JokeNetwork/faq/main/source/'.$CurPageURL.'.md'))) {
  header("HTTP/1.1 200 OK");
  include 'Parsedown.php';
  $file = basename($CurPageURL);
  $content = file_get_contents('https://raw.githubusercontent.com/JokeNetwork/faq/main/source/'.$file.'.md');
  $Parsedown = new Parsedown();

  $fileshort = strlen($file) > 5 ? substr($file,0,5)."..." : $file;

  echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MetaTag Docs » '.$file.'</title>
    <meta name="description" content="Documentation for MetaTags in HTML">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fa/all.min.css" rel="stylesheet">
    <link href="css/addons.css" rel="stylesheet">
    <link href="css/darkmode.css" rel="stylesheet">
</head>

<body data-theme="dark">
    <div class="col-lg-8 mx-auto p-3 py-md-5">
    <header class="mb-5">
      <h1 class="float-md-start"><a href="/">Docs</a> » '.$fileshort.'</h1>
      <nav class="nav justify-content-center float-md-end">
        <a class="nav-link" href="https://github.com/JokeNetwork/faq/blob/main/source/'.$file.'.md"><i class="fab fa-github"></i> Edit on GitHub</a>
        <div class="nav-link">
          <div class="form-check form-switch">
            <input type="checkbox" class="form-check-input" id="darkSwitch">
            <label class="custom-control-label" id="darkmode" for="darkSwitch"></label>
          </div>
        </div>
      </nav>
      <div style="clear:both"></div>
    </header>
    <main class="content">
            '.$Parsedown->text($content).'
        </main>
        <footer class="pt-3 my-4 text-muted border-top fs-6">
            <p class="float-start fs-6">
                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de" itemprop="url"><span itemprop="title">Documentations (Metatags)</span></a> ›</span>
                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de/'.$file.'" itemprop="url"><span itemprop="title">'.$fileshort.'</span></a></span>
            </p>
            <p class="float-end fs-6">Licensed under <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><i class="fab fa-creative-commons"></i> C-BY-NC-SA 4.0</a></p>

            <div class="sponsor">
             <a href="//github.com/sponsors/philipbrembeck/" class="btn-dark" role="button"><i class="far fa-heart"></i> Consider Sponsoring</a>
            </div>
        </footer>
    </div>
    <script src="js/dark-mode-switch.min.js"></script>
    <script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>
</body>

</html>';

} 

elseif (empty($CurPageURL)) {
  header("HTTP/1.1 200 OK");
  include 'Parsedown.php';
  $file = basename(index);
  $content = file_get_contents('https://raw.githubusercontent.com/JokeNetwork/faq/main/source/'.$file.'.md');
  $Parsedown = new Parsedown();

  $fileshort = strlen($file) > 5 ? substr($file,0,5)."..." : $file;

  echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MetaTag Docs » index</title>
    <meta name="description" content="Documentation for MetaTags in HTML">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fa/all.min.css" rel="stylesheet">
    <link href="css/addons.css" rel="stylesheet">
    <link href="css/darkmode.css" rel="stylesheet">
</head>

<body data-theme="dark">
    <div class="col-lg-8 mx-auto p-3 py-md-5">
    <header class="mb-5">
      <h1 class="float-md-start">Docs</h1>
      <nav class="nav justify-content-center float-md-end">
        <a class="nav-link" href="https://github.com/JokeNetwork/faq/blob/main/source/'.$file.'.md"><i class="fab fa-github"></i> Edit on GitHub</a>
        <div class="nav-link">
          <div class="form-check form-switch">
            <input type="checkbox" class="form-check-input" id="darkSwitch">
            <label class="custom-control-label" id="darkmode" for="darkSwitch"></label>
          </div>
        </div>
      </nav>
      <div style="clear:both"></div>
    </header>
    <main class="content">
            '.$Parsedown->text($content);

            function mkmap($dir){
    echo "<ul>";   
    $folder = opendir ($dir);

    while ($file = readdir ($folder)) {   
        if ($file != "." && $file != "..") {           
            $pathfile = substr($file, 0, -3);           
            echo "<li><a href='/$pathfile'>$pathfile</a></li>";           
            if(filetype($pathfile) == 'dir'){               
                mkmap($pathfile);               
            }           
        }       
    }closedir ($folder);echo "</ul>";}mkmap('source');
    echo '

        </main>
        <footer class="pt-3 my-4 text-muted border-top fs-6">
            <p class="float-start fs-6">
                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de" itemprop="url"><span itemprop="title">Documentations (Metatags)</span></a></span>
            </p>
            <p class="float-end fs-6">Licensed under <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><i class="fab fa-creative-commons"></i> C-BY-NC-SA 4.0</a></p>

            <div class="sponsor">
             <a href="//github.com/sponsors/philipbrembeck/" class="btn-dark" role="button"><i class="far fa-heart"></i> Consider Sponsoring</a>
            </div>
        </footer>
    </div>
    <script src="js/dark-mode-switch.min.js"></script>
    <script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>
</body>

</html>';
}

elseif (!empty($CurPageURL) && file_get_contents('https://raw.githubusercontent.com/JokeNetwork/faq/main/source/'.$CurPageURL.'.md') == "404: Not Found" or empty(file_get_contents('https://raw.githubusercontent.com/JokeNetwork/faq/main/source/'.$CurPageURL.'.md'))){
  if($_GET['code'] == "404"){$error = "No such file"; header("HTTP/1.1 404 Not found");}
  elseif ($_GET['code'] == "403"){$error = "Access failed"; header("HTTP/1.1 403 Access Denied");}
  else {$error = "Error";}

  $fileshort = strlen($CurPageURL) > 5 ? substr($CurPageURL,0,5)."..." : $$CurPageURL;
  $filemid = strlen($CurPageURL) > 5 ? substr($CurPageURL,0,15)."..." : $$CurPageURL;

  echo '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MetaTag Docs » '.$error.'</title>
    <meta name="description" content="Documentation for MetaTags in HTML">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fa/all.min.css" rel="stylesheet">
    <link href="css/addons.css" rel="stylesheet">
    <link href="css/darkmode.css" rel="stylesheet">
</head>

<body data-theme="dark">
    <div class="col-lg-8 mx-auto p-3 py-md-5">
    <header class="mb-5">
      <h1 class="float-md-start"><a href="/">Docs</a> » Error code '.$_GET['code'].'</h1>
      <nav class="nav justify-content-center float-md-end">
        <a class="nav-link" href="https://github.com/JokeNetwork/faq/blob/main/source/"><i class="fab fa-github"></i> Create on GitHub</a>
        <div class="nav-link">
          <div class="form-check form-switch">
            <input type="checkbox" class="form-check-input" id="darkSwitch">
            <label class="custom-control-label" id="darkmode" for="darkSwitch"></label>
          </div>
        </div>
      </nav>
      <div style="clear:both"></div>
    </header>
    <main class="content">
            <h3>'.$filemid.': '.$error.'</h3>
            Go to <a href="index">index</a> for an overview.
        </main>
        <footer class="pt-3 my-4 text-muted border-top fs-6">
            <p class="float-start fs-6">
                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de" itemprop="url"><span itemprop="title">Documentations (Metatags)</span></a> ›</span>
                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de/'.$CurPageURL.'" itemprop="url"><span itemprop="title">'.$fileshort.'</span></a></span>
            </p>
            <p class="float-end fs-6">Licensed under <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><i class="fab fa-creative-commons"></i> C-BY-NC-SA 4.0</a></p>

            <div class="sponsor">
             <a href="//github.com/sponsors/philipbrembeck/" class="btn-dark" role="button"><i class="far fa-heart"></i> Consider Sponsoring</a>
            </div>
        </footer>
    </div>
    <script src="js/dark-mode-switch.min.js"></script>
    <script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>
</body>

</html>';
}

?>