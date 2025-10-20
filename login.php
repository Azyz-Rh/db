<?php
$conn = new mysqli("localhost", "root", "", "users");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $email = $_POST['email'];
    $password = $_POST['password'];
    $req1 = "select * from infos where email='$email'";
    $res1 = mysqli_query($conn, $req1);
    if (mysqli_num_rows($res1) > 0) {
        $row = mysqli_fetch_assoc($res1);
        $fname = $row['fname'];
        if ($row['password'] == $password) {
            echo "<script>alert('Welcome $fname!'); window.location.href='welcome.html';</script>";
        } else {
            echo "<script>alert('Incorrect password!'); window.location.href='login.html';</script>";
        }
    } else {
        echo "<script>alert('Email not found!'); window.location.href='login.html';</script>";
    }
}
?>