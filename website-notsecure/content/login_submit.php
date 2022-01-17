<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Bahoe Books - Daten abschicken</title>
    </head>
    <body>
        <div class="container">
            <?php
                include_once 'website-notsecure/func/class/DatabaseConnector.php';

                $databaseConnector = new DatabaseConnector();

                $username = $password = "";


                if ($_SERVER['REQUEST_METHOD'] == "POST") {
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                }

                if($databaseConnector->loginUser($username, $password)) {
                    echo "<h1 class='mb-4'>Guten Tag {$username}!</h1>";
                    echo "<h2>Sie sind erfolgreich angemeldet.</h2>";
                }
                else {
                    echo "<h1 class='mb-4'>Leider, {$username}!</h1>";
                    echo "<h2>Anmeldung fehlgeschlagen.</h2>";
                }
            ?>
        </div>
    </body>
</html>
