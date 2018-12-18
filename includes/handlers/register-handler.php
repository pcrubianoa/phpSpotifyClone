<?php

    function sanitizeFormPassword($inputText){
        $inputText = strip_tags($inputText);
        return $inputText;
    }
    function sanitizeFormUsername($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        return $inputText;
    }

    function sanitizeFormString($inputText){
        $inputText = strip_tags($inputText);
        $inputText = str_replace(" ", "", $inputText);
        $inputText = ucfirst(strtolower($inputText));
        return $inputText;
    }

    if (isset($_POST['registerButton'])) {
        $username = sanitizeFormUsername($_POST['username']);
        $firstName = sanitizeFormString($_POST['firstname']);
        $lastName = sanitizeFormString($_POST['lastname']);
        $firstName = sanitizeFormString($_POST['firstname']);
        $email = sanitizeFormString($_POST['email']);
        $emailConfirm = sanitizeFormString($_POST['emailConfirm']);
        $password = sanitizeFormPassword($_POST['password']);
        $passwordConfirm = sanitizeFormPassword($_POST['passwordConfirm']);
    }

?>