<?php
$conn = mysqli_connect("localhost", "root", "", "db_user");

function db_user($data) {
    global $conn;

    $username = mysqli_real_escape_string($conn, $data["username"]);
    $password = mysqli_real_escape_string($conn, $data['password']);

    mysqli_query($conn, "INSERT INTO tbl_user VALUES( '$username', '$password')");
    return mysqli_affected_rows($conn);
}

?>