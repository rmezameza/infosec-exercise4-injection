<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Bahoe Books - Daten abschicken</title>
    </head>
    <body>
        <div class="container">
            <?php
                include_once 'website-secure/func_sec/class_sec/DatabaseConnectorSec.php';
                include_once 'website-secure/func_sec/inc_sec/func_sec.inc.php';

                $databaseConnector = new DatabaseConnectorSec();

                $username = $password = "";


                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    if(isset($_POST['username'])) {
                        $username = htmlentities($_POST['username']);
                    }

                    if(isset($_POST['password'])) {
                        $password = sanitizeInput($_POST['password']);
                    }

                }

                if($databaseConnector->loginUser($username, $password)) {
                    include_once 'website-secure/login_sec/login_allowed_sec.html';
                }
                else {
                    include_once 'website-secure/login_sec/login_notallowed_sec.html';
                }
            ?>
        </div>
    </body>
</html>
