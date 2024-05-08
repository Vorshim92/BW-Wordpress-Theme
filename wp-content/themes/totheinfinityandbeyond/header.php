<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="<?php bloginfo('charset') ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php wp_head() ?>
</head>

<body>
    <nav id="navbar" class="navbar navbar-expand-lg bg-white pt-5" >
        <div class="container ">
            <a class="nav-link" href="<?= site_url('/') ?>">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/logo.png" class="navbar-brand"
                    alt="<?php bloginfo('name'); ?>"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto mb-2 mb-lg-0 ">

                    <li class="nav-item d-flex align-items-center px-3 border-start">
                        <i class="bi bi-house-fill fs-6"></i>
                        <a class="nav-link fs-6 fw-semibold text-white" href="<?= site_url('/home') ?>">Home</a>
                    </li>
                    <li class="nav-item d-flex align-items-center px-3 border-start">
                        <i class="bi bi-airplane-fill fs-6"></i>
                        <a class="nav-link fs-6 fw-semibold text-white" href="<?= site_url('/home') ?>">Destinazioni</a>
                    </li>
                    <li class="nav-item d-flex align-items-center px-3 border-start">
                        <i class="bi bi-people-fill fs-6"></i>
                        <a class="nav-link fs-6 fw-semibold text-white" href="<?= site_url('/home') ?>">Contatti</a>
                    </li>
                    <li class="nav-item d-flex align-items-center px-3 border-start">
                       <img width="25rem" height="25rem" style="object-fit-cover" src="https://upload.wikimedia.org/wikipedia/commons/thumb/0/03/Flag_of_Italy.svg/2000px-Flag_of_Italy.svg.png" alt="" class="rounded-circle me-2">
                        <h1 class="m-0 fs-6 fw-bold ">EUR</h1>
                    </li>

                </ul>
            </div>
        </div>
    </nav>