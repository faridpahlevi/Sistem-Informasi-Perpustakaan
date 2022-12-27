<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petugas Dashboard</title>
    <!-- css bootstrap -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/bootstrap.css' ?>">
    <!-- css datatables -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/DataTables/datatables.css' ?>">
    <!-- icon font awesome -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/css/awesome/css/font-awesome.css' ?>">
    <!-- jquery dan bootstrap js -->
        <script type="text/javascript" src="<?php echo base_url().'assets/js/jquery.js'?>"></script>
        <script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js' ?>"></script>
    <!-- js datatables -->
        <script type="text/javascript" src="<?php echo base_url().'assets/DataTables/datatables.js' ?>"></script>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url().'admin'; ?>">Perpustakaan</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" arialabel="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url().'petugas'; ?>"><i class="fa fa-home"></i> Dashboard</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url().'petugas/anggota'; ?>"><i class="fa fa-users"></i> Anggota</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url().'petugas/buku'; ?>"><i class="fa fa-book"></i> Buku</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url().'petugas/peminjaman'; ?>"><i class="fa fa-book"></i> Peminjaman</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url().'petugas/peminjaman_laporan'; ?>"><i class="fa fa-book"></i> Laporan Peminjaman</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link text-light" href="<?php echo base_url().'petugas/ganti_password'; ?>"><i class="fa fa-lock"></i> Ganti Password</a>
                    </li>
                </ul>

                <span class="navbar-text mr-3 text-center text-light">Halo, <?php echo $this->session->userdata('username'); ?> [Petugas]</span>

                <a  class="btn btn-outline-light ml-1 nav-link" href="<?php echo base_url().'petugas/logout'; ?>"><i class="fa fa-power-off"></i> KELUAR</a>
            </div>
        </div>
    </nav>

<br/> <br/>