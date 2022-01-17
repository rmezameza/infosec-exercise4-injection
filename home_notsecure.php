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
            <!-- Navigation section -->
            <div id="navigation" class="container pt-5">
                <?php
                include_once 'website-notsecure/content/navigation.html';
                ?>
            </div>

            <!-- Content section -->
            <div id="content" class="container pt-5">
                <?php
                // Include main mechanic for website which checks
                // id in url for specific content and clears url input
                include_once 'website-notsecure/func/inc/main.inc.php';
                include_once (takeURLType());
                ?>
            </div>
        </div>

        <script src="../jquery-3.6.0.js"></script>
        <script src="../js/bootstrap/bootstrap.bundle.js"></script>
    </body>
</html>