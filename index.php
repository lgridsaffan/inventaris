<?php
session_start();
require_once 'func.php';
if (isset($_SESSION['nama'])) {
    header("location:" . base_url() . "/page/index.php");
}
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <title>Inventaris | Login</title>
</head>

<body>

    <div class="container">
        <!-- Content here -->
        <?php if (isset($_POST['error'])) {
            echo $_POST['error'];
        } ?>
        <div class="row">
            <div class="col-md-4 offset-md-4">
                <h2 class="text-center" style="margin-top: 50px;">Login</h2>
                <form method="POST" action="">
                    <div class="mb-3">
                        <label for="username" class="form-label">Username</label>
                        <input type="text" name="username" class="form-control" id="username">
                    </div>
                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password">
                    </div>
                    <div id="error" class="mb-3"></div>
                    <div class="text-center">
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php

    if (isset($_POST['submit'])) {
        $username = isset($_POST['username']) ? $_POST['username'] : '';
        $password = isset($_POST['password']) ? $_POST['password'] : '';
        if ($username == '' || $password == '') {
            $err = "<script>
                        const err = document.getElementById('error');
                        const teks = \"<div class='text-center text-danger'>inputan tidak boleh kosong!</div>\";
                        err.innerHTML = teks;
                    </script>";
            echo $err;
        } else {
            $err = "<script>
                        const err = document.getElementById('error');
                        const teks = \"<div class='text-center text-danger'>username atau password salah!</div>\";
                        err.innerHTML = teks;
                    </script>";
            $query = "SELECT * FROM login WHERE username = '{$username}'";
            $result = mysqli_query($conn, $query);
            if (mysqli_num_rows($result) > 0) {
                $data = mysqli_fetch_assoc($result);
                if (password_verify($password, $data['password'])) {
                    $_SESSION['nama'] = $data['nama'];
                    header("location:" . base_url() . "/page/index.php");
                } else {
                    echo $err;
                }
            } else {
                echo $err;
            }
        }
    }
    ?>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>