<?php 
include 'header.php';
$redirect = 0;
if (isset($_POST['new_material'])) {
    $sql  = "insert into ob_material_didatico set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'".", link_drive = '".$_POST['link_drive']."'".", fl_aprovado = 2";
  
    if(isset($_FILES["arquivo"]) and !empty($_FILES["arquivo"]['name']))
    {
        if(!file_exists("./material_didatico/")) {
            mkdir("./material_didatico/", 0777, true);
        }
            
            $foto = $_FILES["arquivo"]["name"];
            $dir = "./material_didatico/" . $foto;
           
            $sql .= ", arquivo = '". $dir."'";
            $db->query($sql);
            if(file_exists($dir)) 
            {
                unlink($dir);
            }
            move_uploaded_file($_FILES["arquivo"]["tmp_name"], $dir);
         
    }
    else{
        $db->query($sql);
    }
    $redirect = 1;

}
?>
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
                    <h2>MATERIAIS DIDÁTICOS</h2>
                    <hr>
                    <p>Nesta seção você poderá cadastrar o seu material didático.</p>
                </div>

                <div class="col-sm-12">

                    <form class="dados-material-didatico w-100" method="post" enctype="multipart/form-data" id="materialDidatico">
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Título</label>
                            <input type="text" name="titulo" class="form-control" id="materialDidaticoTitulo">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoDes" class="form-label">Descrição</label>
                            <div class="form-floating">
                                <textarea class="form-control" name="descricao" placeholder=""></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoUpload" class="form-label">Upload do arquivo</label>
                            <input class="form-control" name="arquivo" type="file" id="materialDidaticoUpload">
                            <small><b>PDF, JPEG, PNG, JPG, GIF ou MP4</b></small>
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoLink" class="form-label">Link do Drive</label>
                            <input type="text" name="link_drive" class="form-control" id="materialDidaticoLink">
                        </div>
                        <input type="hidden" name="id_professor" value="1" />
                        <div class="form-check mb-3">
                            <input class="form-check-input" type="checkbox" value="" id="materialDidaticoCheck">
                            <label class="form-check-label" for="materialDidaticoCheck">
                                Eu <u>AUTORIZO</u> o <b>Observatório</b> a publicar este material e me responsabilizo pelos direitos autorais ou de imagem do material
                            </label>
                        </div>
                        <!-- <button type="button" class="btn btn-primary button-pages btn-lg" id="btn-material-didatico"> <i class="fa fa-save"></i> Salvar</button> -->
                        <button type="submit" class="btn btn-primary button-pages btn-lg" id="btn-material-didatico" name="new_material"> <i class="fa fa-save"></i> Salvar</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
<?php if($redirect ){ ?>
<script>
location.replace("listar-material-didatico.php")
</script>
<?php }?>    
<?php include 'footer.php'; ?>