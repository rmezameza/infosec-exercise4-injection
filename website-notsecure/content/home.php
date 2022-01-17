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
                include_once 'website-notsecure/func/class/DatabaseConnector.php';

                $databaseConnector = new DatabaseConnector();

                $books = $databaseConnector->getBooks();

                foreach($books as $book) {
                ?>
                    <div class="row mb-4">
                        <div class="col">
                            <img class="img-fluid"
                                    src="../img/<?php
                                                if($book['book_cover'] == null) {
                                                    echo "book_cover_na.jpg";
                                                }
                                                else {
                                                    echo $book['book_cover'];
                                                }
                                              ?>"
                                 width="30%" alt="">
                        </div>
                        <div class="col">
                            <div class="row">
                                <div class="p-2">
                                    <a class="link-dark"
                                       onClick="return confirm('Das Buch >><?php echo $book['book_title']; ?><< wirklich löschen?')"
                                       href="home_notsecure.php?site=book-submit&op=delete&bookid=<?php echo $book['book_id'] . "&title=" . $book['book_title']; ?>">
                                        Delete
                                    </a>
                                </div>
                                <div class="col">
                                    <h2><?php echo $book['book_title']; ?></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col">
                                    <p><?php echo $book['book_text']; ?></p>
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
