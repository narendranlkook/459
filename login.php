<?php
session_start();

if(isset($_POST['password'])) {
    if($_POST['password'] == 'mypassword') {
        $_SESSION['password'] = $_POST['password'];
        header('Location: protected-page.php');
        exit();
    } else {
        $error = 'Incorrect password';
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>
    <?php if(isset($error)) { ?>
        <p><?php echo $error; ?></p>
    <?php } ?>
    <form method="post">
        <label>Password:</label>
        <input type="password" name="password">
        <input type="submit" value="Login">
    </form>
</body>
</html>