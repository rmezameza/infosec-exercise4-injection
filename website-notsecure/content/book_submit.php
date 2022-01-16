<!DOCTYPE html>
<html lang="de">
    <head>
        <title>Bahoe Books - Daten abschicken</title>
    </head>
    <body>
        <div class="container">
            <?php
                include_once 'func/class/DatabaseConnector.php';

                $databaseConnector = new DatabaseConnector();

                $title = $cover = $text = "";

                $operation = $_GET['op'];

                if($operation == "add-book") {
                    if ($_SERVER['REQUEST_METHOD'] == "POST") {
                        $title = $_POST['title'];
                        $cover = $_POST['cover'];
                        $text = $_POST['description'];
                    }

                    if($databaseConnector->addBook($title, $cover, $text)) {
                        echo "<h1 class='mb-3'>Erfolgreich!</h1>";
                        echo "<h2 class='mb-5'>Das Buch '$title' wurde erfolgreich hinzugefügt.</h2>";
                    }
                    else {
                        echo "<h1 class='mb-3'>Fehler</h1>";
                        echo "<h2 class='mb-5'>Das Buch '$title' wurde leider nicht hinzugefügt.</h2>";
                    }
                }
                else {
                    $bookID = $_GET['bookid'];
                    $bookTitle = $_GET['title'];

                    if($databaseConnector->deleteBook($bookID)) {
                        echo "<h1 class='mb-3'>Erfolgreich!</h1>";
                        echo "<h2 class='mb-5'>Das Buch '$bookTitle' wurde erfolgreich gelöscht.</h2>";
                    }
                    else {
                        echo "<h1 class='mb-3'>Fehler</h1>";
                        echo "<h2 class='mb-5'>Das Buch '$bookTitle' wurde leider nicht hinzugefügt.</h2>";
                    }

                }
            ?>
            <a class="btn btn-secondary" href="home_notsecure.php?books" title="Zurück">Zurück zu den Büchern</a>
        </div>
    </body>
</html>