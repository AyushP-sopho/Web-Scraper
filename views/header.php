<!DOCTYPE html>

<html>

    <head>

        <!-- http://getbootstrap.com/ -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>

        <link href="/css/styles.css" rel="stylesheet"/>
        

        <?php if (isset($title)): ?>
            <title>Scrapper: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Scrapper</title>
        <?php endif ?>

        <!-- https://jquery.com/ -->
        <script src="/js/jquery-1.11.3.min.js"></script>

        <!-- http://getbootstrap.com/ -->
        <script src="/js/bootstrap.min.js"></script>

        <script src="/js/scripts.js"></script>

    </head>

    <body>

        <div class="container">

            <div id="top">
                <div>
                    <a href="/quer.php"><img alt="Web Crawler" src="/img/logo.png"/></a>
                </div>
                
            </div>

            <div id="middle">
