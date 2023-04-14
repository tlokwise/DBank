<?php
require "./backend/db_inc.php";
session_start();
$accountnumber = $_SESSION['accountnumber'];
$username = $_SESSION['username'];
$surname = $_SESSION['surname'];

//USE ACCOUNT NUMBER TO FIND USER'S BALANCE
$balance_query = "SELECT savingsbalance FROM account WHERE accountnumber = '$accountnumber'";
$results = mysqli_query($conn, $balance_query);
$results = mysqli_fetch_assoc($results);
$balance = $results['savingsbalance']

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.css">
    <link rel="stylesheet" href="style/home.css">
    <title>DBank</title>
</head>

<body>

    <div class="phone container-sm">
        <div class="header">
            <p>
                <?php echo $username . " " . $surname; ?>
            </p>
            <!-- <button class="btn" style="color: white"><i class="fa fa-ellipsis-v" aria-hidden="true"></i></button> -->
        </div>

        <div class="content">
            <div class="balance-card">

                <span>
                    <h6 class="text-primary">Savings Account</h6>
                    <p>Available Balance</p>
                </span>

                <p id="balance">
                    <?php
                        echo "R" . $balance;
                    ?>
                </p>
            </div>

            <h6 class="text-primary">Favourites</h6>
            <div class="favourite-transaction">
                <div class="favourite-card">
                    <p class="icon"><i class="fa fa-money" aria-hidden="true"></i></p>
                    <p>Send cash</p>
                </div>
                <div class="favourite-card">
                    <p class="icon"><i class="fa fa-mobile" aria-hidden="true"></i></p>
                    <p>Buy prepaid mobile</p>
                </div>
                <div class="favourite-card">
                    <p class="icon"><i class="fa fa-sticky-note-o" aria-hidden="true"></i></p>
                    <p>Bank Statement</p>
                </div>
            </div>
        </div>

        <div class="navbar">

        </div>
    </div>
</body>

</html>