<?php include 'header.php'; ?>

<section id="area-professor">
    <div class="container">
        <div class="row">
            <div class="col-12 col-area-professor">
                <div class="area-professor-title">
                    <figure>
                        <img src="assets/img/professor-icon.png" alt="">
                    </figure>
                    <h1><b>ÁREA DO PROFESSOR</b></h1>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="container">
    <div class="row">
        <?php include 'menu-lateral.php'; ?>
        <div class="col-sm-9">
            <div class="row banner-dashboard">
                <div class="col-12 col-banner-comunicado">
                    <figure>
                        <img src="assets/img/banner-comunicado.png" alt="">
                    </figure>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4">
                    <div class="card-materiais card-materiais-cadastrados">
                        <h2>10</h2>
                        <h3>Materiais cadastrados</h3>
                        <div class="card-absolute">
                            <figure>
                                <img src="assets/img/material-cadastrado-icon.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-materiais card-materiais-em-aprovacao">
                        <h2>3</h2>
                        <h3>Em Aprovação</h3>
                        <div class="card-absolute">
                            <figure>
                                <img src="assets/img/material-aprovacao-icon.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
                <div class="col-sm-4">
                    <div class="card-materiais card-materiais-aprovado">
                        <h2>7</h2>
                        <h3>Aprovados</h3>
                        <div class="card-absolute">
                            <figure>
                                <img src="assets/img/material-aprovado-icon.png" alt="">
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>