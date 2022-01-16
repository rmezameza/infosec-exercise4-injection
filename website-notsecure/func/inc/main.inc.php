<?php

    function takeURLType() {
        $urlType = isset($_GET['site']) ? $_GET['site'] : null;

        switch($urlType) {
            case "new-book":
                $content = "content/new_book.php";
                break;
            case "book-submit":
                $content = "content/book_submit.php";
                break;
            case "login":
                $content = "content/login.php";
                break;
            case "login-confirm":
                $content = "content/login_submit.php";
                break;
            default:
                $content = "content/home.php";
                break;
        }

        return $content;
    }
