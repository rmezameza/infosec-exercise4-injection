<?php

    function takeURLType() {
        $urlType = isset($_GET['site']) ? $_GET['site'] : null;

        switch($urlType) {
            case "books":
                $content = "content/books.php";
                break;
            default:
                $content = "content/home.php";
                break;
        }

        return $content;
    }
