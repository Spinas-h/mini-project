<?php
session_start();
include "config.php";
if(isset($_POST['submit']))
{
    $id = strtolower(trim($_POST['email'])); 
    $password = $_POST['password'];

    $sql = "SELECT email, rpassword FROM register WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql);
    if ($stmt) {
        mysqli_stmt_bind_param($stmt, "s", $id);
        mysqli_stmt_execute($stmt);
        $result = mysqli_stmt_get_result($stmt);

        if ($row = mysqli_fetch_assoc($result)) {
            if (password_verify($password, $row['rpassword'])) {
                $_SESSION['user_id'] = $row['email'];
                header("Location: home.html");
                exit();
            } else {
                $error = "Invalid email or password";
            }
        } else {
            $error = "Invalid email or password";
        }
    } else {
        $error = "Database query failed"; 
    }

    mysqli_close($conn);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Result</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div id="form">
        <?php
        if (isset($error)) {
            echo "<p style='color: red;'>$error</p>";
            echo "<a href='login.html'>Try again</a>";
        }
        ?>
    </div>
</body>
</html>c