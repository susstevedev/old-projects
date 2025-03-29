<?php
ob_start();
session_start();
if(!file_exists('users/' . $_SESSION['username'] . '.xml')){
    header('Location: login.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <title>User page</title>
</head>
<body>
    <h1>User page</h1>
    <ul>
        <li><a href="/index.php">Home</a></li>
        <li><a href="/modeler/index.php">Modeler</a></li>
        <li><a href="/account/"><?php echo $_SESSION['username']; ?></a></li>
    </ul>
    <h2>Welcome, <?php echo $_SESSION['username']; ?></h2>
    <hr />
    <a href="upload.php">Upload</a>
    <a href="settings.php">Settings</a>
    <a href="logout.php">Logout</a>
    <h6>Note: if you want to delete your account, email <a href="mailto:evanrutledge226@gmail.com"><em>evanrutledge226@gmail.com</em></a>.</h6>
</body>
</html>