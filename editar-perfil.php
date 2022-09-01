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
            <div class="row page-container">

                <div class="col-sm-12">
                    <h2>Completar / Editar meu perfil</h2>
                    <hr>
                    <p>Nesta seção você poderá completar seu perfil</p>
                </div>

                <div class="col-sm-12">

                    <form class="dados-material-didatico w-100" id="materialDidatico">
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Nome Completo</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">E-mail</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Telefone</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">WhatsApp</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">CEP</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Endereço</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Número</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Complemento</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Unidade de Ensino</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Cidade</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Estado</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Bairro</label>
                            <input type="text" class="form-control" id="nome">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoUpload" class="form-label">Imagem de Perfil</label>
                            <input class="form-control" type="file" id="materialDidaticoUpload">
                            <small><b>JPEG, PNG, JPG, GIF</b></small>
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoLink" class="form-label">Linked In</label>
                            <input type="text" class="form-control" id="materialDidaticoLink">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoLink" class="form-label">Lattes</label>
                            <input type="text" class="form-control" id="materialDidaticoLink">
                        </div>
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="materialDidaticoCheck">
                            <label class="form-check-label" for="materialDidaticoCheck">
                                Eu <u>AUTORIZO</u> o <b>Observatório</b> a publicar este material e me responsabilizo pelos direitos autorais ou de imagem do material
                            </label>
                        </div>
                        <!-- <button type="button" class="btn btn-primary button-pages btn-lg" id="btn-material-didatico"> <i class="fa fa-save"></i> Salvar</button> -->
                        <a href="listar-material-didatico.php" class="btn btn-primary button-pages btn-lg" id="btn-material-didatico"> <i class="fa fa-save"></i> Salvar</a>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>