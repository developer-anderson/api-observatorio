<?php require_once('conexao.php'); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- fontawesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- boostrap icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <!-- google font -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap" rel="stylesheet">
    <!-- bootstrap css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- header css -->
    <link rel="stylesheet" href="assets/css/header.css">
    <!-- index css -->
    <link rel="stylesheet" href="assets/css/index.css">
    <!-- pages css -->
    <link rel="stylesheet" href="assets/css/pages.css">
    <!-- footer css -->
    <link rel="stylesheet" href="assets/css/footer.css">

    <link rel="shortcut icon" href="assets/img/logo-footer.png" type="image/x-icon">


    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.css">

    <title>Observatório da Profissão Docente</title>

</head>

<body>

    <header>
        <div class="container">
            <div class="row">
                <div class="col-sm-3 col-logo">
                    <figure>
                        <a href="index.php">
                            <img src="assets/img/logo.png" alt="">
                        </a>
                    </figure>
                </div>
                <div class="col-12 col-sm-6 col-header-busca">
                    <form id="form-busca" class="busca">
                        <input type="text" placeholder="Digite o que deseja buscar">
                        <button class="btn-busca"><i class="bi bi-search"></i></button>
                    </form>
                </div>

                <div class="col-12 col-sm-3 col-social">
                    <div class="redes-sociais">
                        <ul class="social-list">
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-youtube"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-facebook"></i>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa-brands fa-whatsapp"></i>
                                </a>
                            </li>
                        </ul>

                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#menuSm">
                            <i class="fa-solid fa-bars"></i>
                        </button>
                    </div>

                    <div class="login-cadastro">
                        <button class="user-button">
                            <div class="user-icon">
                                <i class="fa-solid fa-circle-user"></i>
                            </div>
                            <div class="user-text">
                                Olá, faça seu login <br>
                                ou cadastre-se <i class="fa-solid fa-caret-down"></i>
                            </div>
                        </button>

                    </div>
                </div>
            </div>
        </div>
    </header>
    <nav class="navbar navbar-expand-md">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Início</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pesquisas</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Profissão Docente <br>na Bahia em Números</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Narrativas <br>Pedagógicas</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Formações
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Formação Docente e Diversidade</a></li>
                            <li><a class="dropdown-item" href="#">Formação Docente e Diversidade</a></li>
                        </ul>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Coletâneas <br>Virtuais</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Relatório de <br>Pesquisa</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Materiais <br>Didáticos</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>