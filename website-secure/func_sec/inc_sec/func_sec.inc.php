<?php

    /**
     * <h1>sinitizeInput</h1>
     * <p>This function sanitizes the input. It uses three functions.
     * One from the JavaScript library 'JQuery 3.6.0', which is calles 'trim'.
     * It kills all the whitespace before and after a string. The two other functions
     * 'stripslashes' and 'htmlentities' are from PHP.</p>
     *
     * @param $input : string
     * @return mixed
     */
    function sanitizeInput($input) {
        trim($input);
        stripslashes($input);
        htmlentities($input);

        return $input;
    }
