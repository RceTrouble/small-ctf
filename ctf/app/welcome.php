<?php
include("auth_session.php");
include("db.php");
?>
<?php
$sql = mysqli_query($con,"SELECT * FROM users WHERE user_name = '".$_SESSION['username']."'");
$result = mysqli_fetch_assoc($sql);
$kokot = mysqli_query($con, "SELECT flag from users where user_name = '".$_SESSION['username']."'");
$resulte = mysqli_fetch_assoc($kokot);

?>




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    <div class="form">
        <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p>You suck.</p>
        <p>Your flag is : <?php echo $resulte['flag']; ?>
        <p><a href="logout.php">Logout</a></p>
    </div>
</body>
</html>
