<!DOCTYPE html>
<html lang="de">
    <header>
        <meta charset="UTF-8">
        <title></title>
    </header>
    <body>
        <div class="container">
            <h1 class="mb-5">Gelistete Bücher</h1>

            <?php
                include_once 'func_sec/class_sec/DatabaseConnectorSec.php';

                $databaseConnector = new DatabaseConnectorSec();

                $books = $databaseConnector->getBooks();


                foreach($books as $book) {
            ?>
                    <div class="row mb-4">
                        <div class="col">
                            <img class="img-fluid"
                                    src="../img_sec/<?php
                                                if($book['book_cover'] == null) {
                                                    echo "book_cover_na.jpg";
                                                }
                                                else {
                                                    echo htmlentities($book['book_cover']);
                                                }
                                              ?>"
                                 width="30%" alt="">
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="p-2">
                                    <a class="link-dark"
                                       onClick="return confirm('Das Buch >><?php echo htmlentities($book['book_title']); ?><< wirklich löschen?')"
                                       href="home_secure.php?site=book-submit&op=delete&bookid=<?php echo htmlentities($book['book_id']) . "&title=" . htmlentities($book['book_title']); ?>">
                                        Delete
                                    </a>
                                </div>
                                <div class="col">
                                    <h2><?php echo htmlentities($book['book_title']); ?></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p><?php echo htmlentities($book['book_text']); ?></p>
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
