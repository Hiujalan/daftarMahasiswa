<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Daftar Mahasiswa</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" />

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <!-- css -->
    <link rel="stylesheet" href="../style.css" />
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary ">
        <div class="container-fluid">
            <a class="navbar-brand text" href="#">
                <img src="./img/logopnm.jpg" class="d-inline-block align-text-top" width="50" height="30" style="padding-left: 20px;">
                Politeknik Negeri Madiun
            </a>
            <!-- <h1 class="navbar-brand " style="padding-left: 20px;" href="#">CRUD UTS WEB 2</h1> -->
            <div class="date-time d-flex" style="padding-right: 20px;">
                <span><?= date("d M Y") ?></span>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </nav>



    <div class="d-flex fixed">
        <div class="d-none d-md-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 280px; height: 100vh; position: sticky; top: 0;">
            <ul class="nav nav-pills flex-column mb-auto">
                <li class="nav-item">
                    <a href="<?= BASEURL; ?>" class="nav-link <?= isset($data['active_dashboard']) ? $data['active_dashboard'] : ''; ?>">
                        <i class="fa-solid fa-house"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL . '/mahasiswa'; ?>" class="nav-link <?= isset($data['active_mahasiswa']) ? $data['active_mahasiswa'] : ''; ?>">
                        <i class="fa-solid fa-users"></i> Data Mahasiswa
                    </a>
                </li>
                <li class="nav-item">
                    <a href="<?= BASEURL . '/about'; ?>" class="nav-link <?= isset($data['active_about']) ? $data['active_about'] : ''; ?>">
                        <i class="fa-solid fa-question"></i> Tentang Kami
                    </a>
                </li>
            </ul>
        </div>

        <div class="offcanvas offcanvas-start d-md-none" tabindex="-1" id="sidebarMenu">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Menu</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas"></button>
            </div>
            <div class="offcanvas-body">
                <ul class="nav nav-pills flex-column mb-auto">
                    <li class="nav-item">
                        <a href="<?= BASEURL; ?>" class="nav-link <?= isset($data['active_dashboard']) ? $data['active_dashboard'] : ''; ?>">
                            <i class="fa-solid fa-house"></i> Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASEURL . '/mahasiswa'; ?>" class="nav-link <?= isset($data['active_mahasiswa']) ? $data['active_mahasiswa'] : ''; ?>">
                            <i class="fa-solid fa-users"></i> Data Mahasiswa
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= BASEURL . '/about'; ?>" class="nav-link <?= isset($data['active_about']) ? $data['active_about'] : ''; ?>">
                            <i class="fa-solid fa-question"></i> Tentang Kami
                        </a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="content-wrap flex-grow-1 w-100 p-3 pt-0">