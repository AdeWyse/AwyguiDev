<?php
require  __DIR__.'/../vendor/autoload.php';
require_once __DIR__.'/shared/header.php';

use bp\source\Model\LoginControl as LoginControl;

?>
<main>
    <link rel="stylesheet" href="/css/login.css">

    <div class="middle">
        <h1 class="login-title">Login</h1>
        <form class="loginForm" method="post">
            <div class="loginInputItem">
                <label class="loginLabels">Username</label>
                <input type="text"  id="username" name="username" class="loginInputField">
            </div>
            <div class="loginInputItem">
                <labelclass="loginLabels">Password</label>
                <input type="password"  id="password" name="password" class="loginInputField">
            </div>
            <div class="loginInputField">
                <button type="submit" class="btn login" value="Login">Login</button>
            </div>
        </form>
    </div>
</main>
<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
	$login = new LoginControl();
	$login->LoginVerification();
}
?>
<?php
require_once __DIR__.'/shared/footer.php'
?>


