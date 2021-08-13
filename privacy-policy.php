<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>MetaTag Docs » Privacy Policy</title>
    <meta name="description" content="Documentation for MetaTags in HTML">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/fa/all.min.css" rel="stylesheet">
    <link href="css/addons.css" rel="stylesheet">
    <link href="css/darkmode.css" rel="stylesheet">
</head>

<body data-theme="dark">
    <div class="col-lg-8 mx-auto p-3 py-md-5">
    <header class="mb-5">
      <h1 class="float-md-start"><a href="/">Docs</a> » Privacy Policy</h1>
      <nav class="nav justify-content-center float-md-end">
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
            <?php
            $datenschutz = file_get_contents('https://philipbrembeck.com/includes/datenschutz.php');
            echo $datenschutz;
            ?>
        </main>
        <footer class="pt-3 my-4 text-muted border-top fs-6">
            <p class="float-start fs-6">
                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de" itemprop="url"><span itemprop="title">Documentations (Metatags)</span></a> ›</span>
                <span itemscope itemtype="http://data-vocabulary.org/Breadcrumb"><a href="https://faq.jokenetwork.de/privacy-policy" itemprop="url"><span itemprop="title">Privacy Policy</span></a></span>
            </p></p>

            <div class="float-end">
             <a href="//github.com/sponsors/philipbrembeck/" class="btn-dark" role="button"><i class="far fa-heart"></i> Consider Sponsoring</a>
            </div>
        </footer>
    </div>
    <script src="js/dark-mode-switch.min.js"></script>
    <?php 
        header('Access-Control-Allow-Origin: https://analytics.jokenetwork.de'); 
        if (isset($_COOKIE['log']) && $_COOKIE['log'] == "Yes"){echo '<script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475" data-ackee-opts=\'{ "detailed": true }\'></script>';}  
        elseif (isset($_COOKIE['log']) && $_COOKIE['log'] == "No"){echo '<script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475"></script>';}  
        else{echo '<script async src="https://analytics.jokenetwork.de/tracker.js" data-ackee-server="https://analytics.jokenetwork.de" data-ackee-domain-id="ad280e82-bc14-44a1-9758-e000a6c2f475" data-ackee-opts=\'{ "detailed": true }\'></script>';} 
    ?>
</body>

</html>