<?php

    function takeURLType() {
        $urlType = isset($_GET['site']) ? $_GET['site'] : null;

        switch($urlType) {
            case "new-book":
                $content = "website-notsecure/content/new_book.php";
                break;
            case "book-submit":
                $content = "website-notsecure/content/book_submit.php";
                break;
            case "login":
                $content = "website-notsecure/content/login.php";
                break;
            case "login-confirm":
                $content = "website-notsecure/content/login_submit.php";
                break;
            default:
                $content = "website-notsecure/content/home.php";
                break;
        }

        return $content;
    }
