<?php
$conn = new mysqli("localhost", "root", "", "users");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password1'];
    $req = "insert into infos (fname, lname, age, gender, phone, email, username, password) values ('$fname', '$lname', $age, '$gender', '$phone', '$email', '$username', '$password')";
    $res = mysqli_query($conn, $req);
    if ($res) {
        echo "<script>alert('Registration successful!'); window.location.href='login.html';</script>";
    } else {
        echo "<script>alert('Registration failed!'); window.location.href='inscrit.html';</script>";
    }
}

?>