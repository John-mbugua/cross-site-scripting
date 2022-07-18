<?php

$con = mysqli_connect("localhost", "root", "", "test");

if ($_POST) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);
    $name = mysqli_real_escape_string($con, $_POST['name']);
    $name = htmlspecialchars($name);

    $sql = "INSERT INTO user(name, username, password) VALUES('$name', '$username', '$password')";
    if (mysqli_query($con, $sql)) {
       
        $msg="Account created successfully.Please Login";
    
    
    }
} else {
    $msg = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .my-container {
            width: 50%;
            padding: 8%;
            margin: 0 auto;
        }
    </style>
</head>

<body>
    <div class="my-container">
    <p class="font-weight-bolder text-primary">Register</p>
        <form action method="POST">
            <input class="form-control" type="text" placeholder="name" name="name" required /><br />
            <input class="form-control" type="text" placeholder="username" name="username" required /><br />
            <input class="form-control" type="password" placeholder="password" name="password" required /><br />
            <button class="btn btn-primary w-100" >Signup</button><br/>
            <p class="text-success small" ><?php echo $msg;?></p>
            <p class="mt-3 small text-center">Already have an account? <a href="login.php">Login</a></p>
        </form>
    </div>
</body>

</html>