<?php  
$CurPageURL = $_SERVER['REQUEST_URI'];  
$CurPageURL = ltrim($CurPageURL, '/');

if (file_exists('source/'.$CurPageURL.'.md')) {
  include 'Parsedown.php';
  $file = basename($CurPageURL);
  $content = file_get_contents('source/'.$file.'.md');
  $Parsedown = new Parsedown();

  echo '<!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JokeNetwork » '.$file.'</title>
  <link href="https://faq.jokenetwork.de/css/bootstrap.css" rel="stylesheet">
  <link href="https://faq.jokenetwork.de/css/fa/all.min.css" rel="stylesheet">
  </head>

  <body>
  <div class="container">
    <div class="page-header">
      <h1><a href="/">Docs</a> » <a href="'.$file.'">'.$file.'</a></h1>
      <p><a href="https://github.com/JokeNetwork/faq/blob/main/source/'.$file.'.md"><i class="fab fa-github"></i> Edit on GitHub</a></p>
    </div>
    '.$Parsedown->text($content).'
  <hr>  
  <p class="pull-right">Licensed under <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><i class="fab fa-creative-commons"></i> C-BY-NC-SA 4.0</a></p>
    <p>
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de" itemprop="url"><span itemprop="title">Documentations (Metatags)</span></a> ›</span>

   <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de/'.$file.'" itemprop="url"><span itemprop="title">'.$file.'</span></a></span>
  </p>
    </div>
    <script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>
  </body>
  </html>';

} 

elseif (empty($CurPageURL)) {
  include 'Parsedown.php';
  $file = basename(index);
  $content = file_get_contents('source/'.$file.'.md');
  $Parsedown = new Parsedown();

  echo '<!DOCTYPE html>
  <html lang="en">
  <head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>JokeNetwork » Meta Tags</title>
  <link href="https://faq.jokenetwork.de/css/bootstrap.css" rel="stylesheet">
  <link href="https://faq.jokenetwork.de/css/fa/all.min.css" rel="stylesheet">
  </head>

  <body>
  <div class="container">
    <div class="page-header">
      <h1><a href="/">Docs</a></h1>
      <p><a href="https://github.com/JokeNetwork/faq/blob/main/source/'.$file.'.md"><i class="fab fa-github"></i> Edit on GitHub</a></p>
    </div>
    '.$Parsedown->text($content).'
  <hr> 
  <p class="pull-right">Licensed under <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><i class="fab fa-creative-commons"></i> C-BY-NC-SA 4.0</a></p>
    <p>
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de/'.$file.'" itemprop="url"><span itemprop="title">Documentations (Metatags)</span></a></span>
  </p>
    </div>
    <script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>
  </body>
  </html>';
}

else {
  if($_GET['code'] == "404"){$error = "No such file";}
  elseif ($_GET['code'] == "403"){$error = "Access failed";}
  else {$error = "Error";}
  echo '<!DOCTYPE html>
  <html lang="en">
    <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>JokeNetwork » Error '.$_GET['code'].'</title>
      <link href="https://faq.jokenetwork.de/css/bootstrap.css" rel="stylesheet">
      <link href="https://faq.jokenetwork.de/css/fa/all.min.css" rel="stylesheet">
    </head>

    <body>
      <div class="container">

        <div class="page-header">
          <h1><a href="/">Docs</a> » <a href="'.$file.'">Error Code '.$_GET['code'].'</a></h1>
          <p class="lead">Server returned error code '.$_GET['code'].' for '.$CurPageURL.'</p>
        </div>
        <h3>'.$CurPageURL.': '.$error.'</h3>
        Go to <a href="https://faq.jokenetwork.de/index">index</a> for an overview.
        <hr>

  <p class="pull-right">Licensed under <a href="https://creativecommons.org/licenses/by-nc-sa/4.0/"><i class="fab fa-creative-commons"></i> C-BY-NC-SA 4.0</a></p>

    <p>
    <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de" itemprop="url"><span itemprop="title">Documentations (Metatags)</span></a> ›</span>

   <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de/<?php echo $file ?>" itemprop="url"><span itemprop="title">'.$CurPageURL.'</span></a></span>
  </p>
   </div>

     <script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>
    </body>
  </html>';
}

?>