<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="<?= base_url(); ?>/page/css/styles.css">
    <title>Inventaris | Data</title>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">
            <div class="container-fluid">
                <a class="navbar-brand" href="<?= base_url(); ?>/page/index.php?laman=beranda">
                    <img src="<?= base_url(); ?>/page/img/sma1-logo.png" alt="" width="40" height="40">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav">
                        <li class="nav-item">
                            <a class="nav-link <?= !isset($_GET['laman']) || $_GET['laman'] == "beranda" ? "active" : ""; ?>" aria-current="page" href="<?= base_url(); ?>/page/index.php?laman=beranda">Beranda</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= isset($_GET['laman']) && $_GET['laman'] == "inventaris" ? "active" : ""; ?>" href="<?= base_url(); ?>/page/index.php?laman=inventaris">Inventaris</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link <?= isset($_GET['laman']) && $_GET['laman'] == "lokasi" ? "active" : ""; ?>" href="<?= base_url(); ?>/page/index.php?laman=lokasi">Lokasi</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?= base_url(); ?>/logout.php">Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
    <div class="container mt-3">