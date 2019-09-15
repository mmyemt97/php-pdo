<?php

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign up - PHP - PDO</title>
    <link rel="stylesheet" type="text/css" href="assets/hautm.css">
</head>
<body>

<div class="contain">
    <form action="./Controller/KhachhangBL.php" method="post" name="f-sign-in" class="az-sign-in">
        <h3 class="az-form-title">
            Đăng ký thành viên
        </h3>

        <div class="az-form-content">
            <div class="username-line">
                <span>Username: </span>
                <input type="text" class="txtUsername" id="txtUsername" name="txtUsername">
            </div>

            <div class="password-line">
                <span>Password: </span>
                <input type="password" class="txtPassword" id="txtPassword" name="txtPassword">
            </div>

            <div class="btn-line">
                <input type="submit" class="az-btn-submit-form" name="btnSub" value="Đăng ký">
                <input type="button" class="az-btn-clear-form" name="btnClear" value="Nhập lại">
            </div>
        </div>
    </form>
    <h5 id="result-signin"></h5>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="js/app.js"></script>

</body>
</html>
