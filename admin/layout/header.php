<?php
require_once __DIR__ . "/../../config/parameters.php";
require_once __DIR__ . "/../security.php";
?>
<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Administration</title>

    <!-- Bootstrap core CSS -->
    <link href="<?= SITE_URL; ?>admin/dist/css/styles.min.css" rel="stylesheet">
</head>

<body>
<nav class="navbar navbar-dark fixed-top bg-dark flex-md-nowrap p-0 shadow">
    <a class="navbar-brand col-sm-3 col-md-2 mr-0" href="#">Company name</a>
    <ul class="navbar-nav px-3">
        <li class="nav-item text-nowrap">
            <a class="nav-link" href="#">Sign out</a>
        </li>
    </ul>
</nav>

<div class="container-fluid">
    <div class="row">
        <nav class="col-md-2 d-none d-md-block bg-light sidebar">
            <div class="sidebar-sticky">
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= SITE_URL; ?>admin/">
                            <i class="fa fa-fw fa-home"></i>
                            Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= SITE_URL; ?>admin/crud/specialty/">
                            <i class="fa fa-fw fa-notes-medical"></i>
                            Spécialités
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="<?= SITE_URL; ?>admin/crud/doctor/">
                            <i class="fa fa-fw fa-notes-medical"></i>
                            Docteurs
                        </a>
                    </li>
                </ul>

            </div>
        </nav>

        <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">