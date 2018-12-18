<?php 
    include("includes/config.php");
    include("includes/classes/Account.php");
    include("includes/classes/Constants.php");

    $account = new Account($con);

    include("includes/handlers/register-handler.php");
    include("includes/handlers/login-handler.php");

    function getInputValue($name){  
        if(isset($_POST[$name])){
            echo $_POST[$name];
        }
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
                <?php echo $account->getError(Constants::$loginFailed); ?>
                <label for="loginUsername">Username</label>
                <input type="text" id="loginUsername" name="loginUsername" placeholder="Your username" required>
            </p>
            <p>
                <label for="loginUsername">Password</label>
                <input type="password" id="loginPassword" name="loginPassword" placeholder="Your password" required>
            </p>
            <button type="submit" name="loginButton">Login</button>
        </form>

        <form id="registerForm" action="register.php" method="POST">
            <h2>Create your free account</h2>
            <p>
                <?php echo $account->getError(Constants::$usernameCharacters); ?>
                <?php echo $account->getError(Constants::$usernameTaken); ?>
                <label for="username">Username</label>
                <input type="text" id="username" name="username" placeholder="Your username" value="<?php getInputValue('username') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$firstNameCharacters); ?>
                <label for="firstname">First name</label>
                <input type="text" id="firstname" name="firstname" placeholder="Your firstname" value="<?php getInputValue('firstname') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$lastNameCharacters); ?>
                <label for="lastname">Last name</label>
                <input type="text" id="lastname" name="lastName" placeholder="Your Lastname" value="<?php getInputValue('lastName') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$emailsDoNotMatch); ?>
                <?php echo $account->getError(Constants::$emailInvalid); ?>
                <?php echo $account->getError(Constants::$emailTaken); ?>
                <label for="email">Email</label>
                <input type="text" id="email" name="email" placeholder="Email" value="<?php getInputValue('email') ?>" required>
            </p>
            <p>
                <label for="emailConfirm">Confirm Email</label>
                <input type="text" id="emailConfirm" name="emailConfirm" placeholder="Confirm Email" value="<?php getInputValue('emailConfirm') ?>" required>
            </p>
            <p>
                <?php echo $account->getError(Constants::$passwordsDoNotMatch); ?>
                <?php echo $account->getError(Constants::$passwordNotAlphanumeric); ?>
                <?php echo $account->getError(Constants::$passwordCharacters); ?>
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