<?php

$con = mysqli_connect("localhost", "root", "", "test");

session_start();

if (isset($_SESSION['username'])) {
    $username = $_SESSION['username'];
    $userQuery = "SELECT * FROM user WHERE username = '$username'";
    $userResult = mysqli_query($con, $userQuery);

   $data = mysqli_fetch_assoc($userResult);
} else {
    header("Location: index.php");
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
</head>

<body>
   <p>Welcome to this application, <?php echo $data['name']; ?></p>
   <!-- <p> <?php echo $sql?></p>
    <p><?php         if(($count>0)){
            echo "<div id='GFG'>";
            echo "<table>
            <tr>
            <th>Username</th>
            <th>password</th>
            <th>name</th>
            </tr>";
            while($rows=mysqli_fetch_assoc($result)){
                echo "<tr align=left style='font-size-18px>";
                echo "<td>".row['username']."</td>";
                echo "<td>".row['password']."</td>";
                echo "<td>".row['name']."</td>";
            }

        }?></p>-->
    <a href="logout.php"><p class="text-primary">Logout</p></a>
</body>

</html>