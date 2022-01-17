<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Bahoe Books - Daten abschicken</title>
    </head>
    <body>
        <div class="container">
            <?php
                include_once 'func_sec/class_sec/DatabaseConnectorSec.php';
                include_once 'func_sec/inc_sec/func_sec.inc.php';

                $databaseConnector = new DatabaseConnectorSec();

                $title = $cover = $text = "";

                $operation = isset($_GET['op']) ? sanitizeInput($_GET['op']) : null;

                if($operation == null) {
                    include_once 'func_sec/error_sec/not_allowed_sec.php';
                    exit;
                }

                if($operation == "add-book") {
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        if(isset($_POST['title'])) {
                            $title = htmlentities($_POST['title']);
                        };

                        if(isset($_POST['cover'])) {
                            $cover = sanitizeInput($_POST['cover']);
                        }

                        if(isset($_POST['description'])) {
                            $text = htmlentities($_POST['description']);
                        }
                    }

                    if($databaseConnector->addBook($title, $cover, $text) != false) {
                        echo "<h1 class_sec='mb-3'>Erfolgreich!</h1>";
                        echo "<h2 class_sec='mb-5'>Das Buch '$title' wurde erfolgreich hinzugefügt.</h2>";
                    }
                    else {
                        echo "<h1 class_sec='mb-3'>Fehler</h1>";
                        echo "<h2 class_sec='mb-5'>Das Buch '$title' wurde leider nicht hinzugefügt.</h2>";
                    }
                }
                else {
                    $bookID = isset($_GET['bookid']) ? sanitizeInput($_GET['bookid']) : null;
                    $bookTitle = isset($_GET['title']) ? sanitizeInput($_GET['title']) : null;

                    if($bookID == null || $bookTitle == null) {
                        include_once 'func_sec/error_sec/not_allowed_sec.php';
                        exit;
                    }

                    if($databaseConnector->deleteBook($bookID)) {
                        echo "<h1 class_sec='mb-3'>Erfolgreich!</h1>";
                        echo "<h2 class_sec='mb-5'>Das Buch '$bookTitle' wurde erfolgreich gelöscht.</h2>";
                    }
                    else {
                        echo "<h1 class_sec='mb-3'>Fehler</h1>";
                        echo "<h2 class_sec='mb-5'>Das Buch '$bookTitle' wurde leider nicht hinzugefügt.</h2>";
                    }

                }
            ?>
            <a class="btn btn-secondary" href="home_secure.php?books" title="Zurück">Zurück zu den Büchern</a>
        </div>
    </body>
</html>