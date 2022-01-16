<!DOCTYPE html>
<html lang="de">
    <head>
        <title></title>
    </head>

    <body>
    <div class="container">
        <h1 class="mb-4">Buch erstellen</h1>
        <form method="post"
              action="home_notsecure.php?site=book-submit&op=add-book"
              class="mb-4">

            <div class="mb-3">
                <label for="add_title" class="col-form-label">Titel:</label>
                <input type="text"
                       class="form-control"
                       id="add_title"
                       name="title"
                       maxlength="100">
            </div>

            <div class="mb-3">
                <label for="add_cover" class="col-form-label">Cover Name (inkl. Endung):</label>
                <input type="text"
                       class="form-control"
                       id="add_cover"
                       name="cover"
                       maxlength="100">
            </div>

            <div class="mb-3">
                <label for="add_book_description" class="col-form-label">Buch Beschreibung:</label>
                <textarea class="form-control"
                          id="add_book_description"
                          name="description"
                          style="height: 100px"></textarea>
            </div>
            <button type="submit" class="btn btn-primary" title="Buch hinzufügen">Buch hinzufügen</button>
        </form>
    </div>
    </body>
</html>