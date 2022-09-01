<?php 
include 'header.php';
$redirect = 0;
if (isset($_POST['new_material'])) {
    $sql  = "update ob_material_didatico set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'".", link_drive = '".$_POST['link_drive']."'".", fl_aprovado = '".$_POST['fl_aprovado']."'";
    if(isset($_FILES["arquivo"]) and !empty($_FILES["arquivo"]['name']))
    {
        if(!file_exists("./material_didatico/")) {
            mkdir("./material_didatico/", 0777, true);
        }
        $foto = $_FILES["arquivo"]["name"];
        $dir = "./material_didatico/" . $foto;
        $sql .= ", arquivo = '".$dir."'  where id_material_didatico =".$_POST['id_material_didatico'];
        $db->query($sql);
      
        if(file_exists($dir)) 
        {
            unlink($dir);
        }
     
        move_uploaded_file($_FILES["arquivo"]["tmp_name"], $dir);
    }
    else{
        $sql .= " where id_material_didatico =".$_POST['id_material_didatico'];
        $db->query($sql);
    }
    $redirect = 1;
 
    $sql  = "select * from  ob_material_didatico where 1=1";
    if(isset($_POST['id_material_didatico']))
    {
        $sql .= " and id_material_didatico = ".$_POST['id_material_didatico'];
    }
    if(isset($_POST['id_professor']))
    {
        $sql .= " and id_professor = ".$_POST['id_professor'];
    }
   
    $result = $db->query($sql);
    $row = $result->fetch_assoc();

}
else{
    $sql  = "select * from  ob_material_didatico where 1=1";
    if(isset($_GET['id_material_didatico']))
    {
        $sql .= " and id_material_didatico = ".$_GET['id_material_didatico'];
    }
    if(isset($_POST['id_professor']))
    {
        $sql .= " and id_professor = ".$_POST['id_professor'];
    }
   
    $result = $db->query($sql);
    $row = $result->fetch_assoc();
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
                    <p>Nesta seção você poderá editar o seu material didático.</p>
                </div>

                <div class="col-sm-12">

                    <form class="dados-material-didatico w-100" method="post" enctype="multipart/form-data" id="materialDidatico">
                        <div class="mb-3">
                            <label for="materialDidaticoTitulo" class="form-label">Título</label>
                            <input type="text" name="titulo" value="<?php echo($row['titulo']); ?>" class="form-control" id="materialDidaticoTitulo">
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoDes" class="form-label">Descrição</label>
                            <div class="form-floating">
                                <textarea class="form-control" id="tiny"name="descricao"><?php echo($row['descricao']); ?></textarea>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoDes" class="form-label">Situação</label>
                            <div class="form-floating">
                                <select class="form-control" name="fl_aprovado">
                                    <?php if($row['fl_aprovado'] == 1){ ?>
                                        <option value="1" selected> Aprovado</option>
                                    <option value="2" > Pendente</option>
                                    <option value="3" > Reprovado</option>
                                    <?php } elseif($row['fl_aprovado'] == 2){ ?>
                                        <option value="1" > Aprovado</option>
                                    <option value="2"selected > Pendente</option>
                                    <option value="3" > Reprovado</option>
                                    <?php } else{ ?> 
                                        <option value="1" > Aprovado</option>
                                    <option value="2" > Pendente</option>
                                    <option value="3" selected> Reprovado</option>
                                    <?php }?>       
                                   
                                </select>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoUpload" class="form-label">Upload do arquivo</label>
                            <img src="<?php echo($row['arquivo']); ?>">
                            <input class="form-control" name="arquivo" type="file" id="materialDidaticoUpload">
                            <small><b>PDF, JPEG, PNG, JPG, GIF ou MP4</b></small>
                        </div>
                        <div class="mb-3">
                            <label for="materialDidaticoLink" class="form-label">Link do Drive</label>
                            <input type="text" name="link_drive" value="<?php echo($row['link_drive']); ?>" class="form-control" id="materialDidaticoLink">
                        </div>
                        <input type="hidden" name="id_professor" value="1" />
                        <input type="hidden" name="id_material_didatico" value="<?php echo($_GET['id_material_didatico']); ?>" />
                     
                        <!-- <button type="button" class="btn btn-primary button-pages btn-lg" id="btn-material-didatico"> <i class="fa fa-save"></i> Salvar</button> -->
                        <button type="submit" class="btn btn-primary button-pages btn-lg" id="btn-material-didatico" name="new_material"> <i class="fa fa-save"></i> Atualizar</button>
                    </form>

                </div>

            </div>
        </div>
    </div>
</div>
   
<?php include 'footer.php'; ?>