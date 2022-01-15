<!DOCTYPE html>
<html lang="de">
    <header>
        <title></title>
    </header>
    <body>
        <div class="container">
            <h1 class="mb-5">Gelistete Bücher</h1>

            <?php
                include_once 'func/class/DatabaseConnector.php';

                $databaseConnector = new DatabaseConnector();

                $books = $databaseConnector->getBooks();

                foreach($books as $book) {
                ?>
                    <div class="row mb-4">
                        <div class="col">
                            Test
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="col">
                                    <h2><?php echo $book['book_title']; ?></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p><?php echo $book['book_title']; ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr class="text-decoration-line-through">
            <?php
                }
            ?>
        </div>
    </body>
</html>
