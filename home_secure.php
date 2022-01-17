<!DOCTYPE html>
<html lang="de">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../css/bootstrap/bootstrap.min.css">
        <title>Gruppe12 | Injection | Gesichert</title>
    </head>

    <body>
        <div class="container">
            <!-- Navigation section -->
            <div id="navigation" class="container pt-5">
                <?php
                include_once 'website-secure/content_sec/navigation_sec.html';
                ?>
            </div>

            <!-- Content section -->
            <div id="content" class="container pt-5">
                <?php
                // Include main mechanic for website which checks
                // id in url for specific content_sec and clears url input
                include_once 'website-secure/func_sec/inc_sec/main_sec.inc.php';
                include_once htmlentities(takeURLType());
                ?>
            </div>
        </div>

        <script src="../jquery-3.6.0.js"></script>
        <script src="../js/bootstrap/bootstrap.bundle.js"></script>
    </body>
</html>