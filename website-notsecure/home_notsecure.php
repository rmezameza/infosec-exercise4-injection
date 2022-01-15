<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
        <title>Gruppe12 | Injection | Ungesichert</title>
    </head>
    <!-- window.alert("Welcome to our website"); -->
    <body>
        <div class="container">
            <!-- Header section -->
            <div id="header" class="container pt-3 pb-3">
                <?php
                include_once 'content/header.html';
                ?>
            </div>

            <!-- Navigation section -->
            <div id="navigation" class="container pt-5">
                <?php
                include_once 'content/navigation.html';
                ?>
            </div>

            <!-- Content section -->
            <div id="content" class="container pt-5">
                <?php
                // Include main mechanic for website which checks
                // id in url for specific content and clears url input
                include_once 'func/inc/main.inc.php';
                include_once (takeURLType());
                ?>
            </div>
        </div>
    </body>
</html>