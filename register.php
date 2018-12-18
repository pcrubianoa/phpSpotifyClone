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

if(isset($_POST['logionButton'])){

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Spotify Clone</title>
</head>
<body>
    <div id="inputContainer">
        <form id ="loginForm" action="register.php" method="POST">
            <h2>Login to your account</h2>
            <p>
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" placeholder="Your username" required>
            </p>
            <p>
                <label for="loginUsername">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" placeholder="Your password" required>
            </p>
            <button type="submit" name="loginButton">Login</button>
        </form>

        <form id ="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Your username" required>
            </p>
            <p>
                <label for="firstname">First name</label>
                <input type="text" id="firstname" name="firstname" placeholder="Your firstname" required>
            </p>
            <p>
                <label for="lastname">Last name</label>
                <input type="text" id="lastname" name="lastname" placeholder="Your Lastname" required>
            </p>
            <p>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Email" required>
            </p>
            <p>
                <label for="emailConfirm">Confirm Email</label>
                <input type="text" id="emailConfirm" name="emailConfirm" placeholder="Confirm Email" required>
            </p>
            <p>
                <label for="password">Password</label>
                <input type="password" id="password" name="password" placeholder="Your password" required>
            </p>
            <p>
                <label for="passwordConfirm">Confirm Password</label>
                <input type="password" id="passwordConfirm" name="passwordConfirm" placeholder="Confirm password" required>
            </p>
            <button type="submit" name="registerButton">Sign Up</button>
        </form>
    </div>
</body>
</html>