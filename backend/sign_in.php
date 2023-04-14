<?php
require "./db_inc.php";
session_start();
$sign_in = $_POST['signin'];

if (isset($sign_in)) {
    $account_number = $_POST['user-id'];
    $PIN = $_POST['pin'];

    $login_query = "SELECT username, surname, accountnumber, pin FROM user WHERE accountNumber = '$account_number' AND pin = '$PIN'";
    $login_query_results = mysqli_query($conn, $login_query);
    $login_query_results = mysqli_fetch_assoc($login_query_results);
    if (count($login_query_results) > 0) {
        $_SESSION['accountnumber'] = $login_query_results['accountnumber'];
        $_SESSION['username'] = $login_query_results['username'];
        $_SESSION['surname'] = $login_query_results['surname'];
        print_r($login_query_results);
        header("Location: ../home.php");
        exit();
    } else {
        header("Location: ../index.php");
        exit();
    }
}
