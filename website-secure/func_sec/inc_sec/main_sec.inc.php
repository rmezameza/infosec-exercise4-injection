<?php
    include_once 'func_sec/inc_sec/func_sec.inc.php';

    function takeURLType() {

        $cleanURL = array();
        $siteNames = array("new-book", "book-submit", "login", "login-confirm", null);

        $urlType = isset($_GET['site']) ? sanitizeInput($_GET['site']) : null;

        if(!in_array($urlType, $siteNames)) {
            include_once 'func_sec/error_sec/not_allowed_sec.html';
            exit;
        }
        else {
            $cleanURL['site'] = $urlType;
        }

        switch($cleanURL['site']) {
            case "new-book":
                $content = "content_sec/new_book_sec.php";
                break;
            case "book-submit":
                $content = "content_sec/book_submit_sec.php";
                break;
            case "login":
                $content = "content_sec/login_sec.php";
                break;
            case "login-confirm":
                $content = "content_sec/login_submit_sec.php";
                break;
            default:
                $content = "content_sec/home_sec.php";
                break;
        }

        return $content;
    }
