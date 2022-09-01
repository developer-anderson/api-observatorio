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
                    <h2>Listar Material Didático</h2>
                    <hr>
                </div>

                <div class="col-sm-12 d-flex mb-3">
                    <a href="material-didatico.php" class="btn btn-success button-pages btn-lg"
                        id="btn-material-didatico"> <i class="fa fa-plus"></i> Cadastrar Novo</a>
                </div>

                <div class="col-sm-12">

                    <div class="table-responsive">
                        <table id="listar" class="display">
                            <thead>
                                <tr>
                                    <th>Titulo</th>
                                    <th class="thAcoes text-center">Aceitou termos?</th>
                                    <th class="thAcoes text-center">Status</th>
                                    <th class="thAcoes text-center">Ações</th>
                                </tr>
                            </thead>
                            <tbody id='listar-materiais'>
                                <tr>
                                    <td>Meu Primeiro Arquivo</td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge text-bg-warning">Ag. Aprovação</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="#" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Meu Primeiro Arquivo</td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge text-bg-danger">Reprovado</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="#" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Meu Primeiro Arquivo</td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge text-bg-success">Aprovado</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="#" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Meu Primeiro Arquivo</td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge text-bg-success">Aprovado</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="#" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Meu Primeiro Arquivo</td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge text-bg-success">Aprovado</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="#" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Meu Primeiro Arquivo</td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge text-bg-success">Aprovado</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="#" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Meu Primeiro Arquivo</td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge text-bg-success">Aprovado</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="#" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Meu Primeiro Arquivo</td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge text-bg-success">Aprovado</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="#" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Meu Primeiro Arquivo</td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge text-bg-success">Aprovado</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="#" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Meu Primeiro Arquivo</td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge text-bg-success">Aprovado</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="#" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>

                                <tr>
                                    <td>Meu Primeiro Arquivo</td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge text-bg-success">Aprovado</span></td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="#" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <a href="#" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></a>
                                        </div>
                                    </td>
                                </tr>




                            </tbody>
                        </table>
                    </div>

                </div>

            </div>
        </div>
    </div>
</div>
<script>

</script>
<?php include 'footer.php'; ?>