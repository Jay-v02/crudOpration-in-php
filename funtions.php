<?php
require 'config.php';

if (isset($_POST['action'])) {
    if ($_POST['action'] == "insert") {
        insert();
    } 
    elseif($_POST['action'] == "edit") {
        edit();
    }
    else{
        delete();
    }
}

function insert()
{
    global $conn;

    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "INSERT INTO users VALUES ('','$name','$email','$gender')";
    mysqli_query($conn, $sql);
    echo "Insert successfully";
}
function edit()
{
    global $conn;

    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $gender = $_POST['gender'];

    $sql = "UPDATE `users` SET username ='$name',email ='$email',gender='$gender' WHERE user_id = $id";
    mysqli_query($conn, $sql);
    echo "update succefully";
}
function delete() {
    global $conn;

    $id = $_POST['action'];
    $sql = "DELETE FROM users WHERE user_id = $id";
    mysqli_query($conn, $sql);
    echo 'Delete user succefully';
}
?>