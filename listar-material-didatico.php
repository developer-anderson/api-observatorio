<?php include 'header.php'; 

if (isset($_POST['view_material'])) {
    $sql  = "select * from  ob_material_didatico where 1=1";
    if(isset($_POST['id_material_didatico']))
    {
        $sql .= " and id_material_didatico = ".$_POST['id_material_didatico'];
    }
    if(isset($_POST['id_professor']))
    {
        $sql .= " and id_professor = ".$_POST['id_professor'];
    }
    if(isset($_POST['fl_aprovado']))
    {
        $sql .= " and fl_aprovado = ".$_POST['fl_aprovado'];
    }
    $result = $db->query($sql);
 
    $resultado = $result->fetch_all(MYSQLI_ASSOC);
   
    
} 
else{
    $sql  = "select * from  ob_material_didatico where 1=1";
    $result = $db->query($sql);
    $resultado = $result->fetch_all(MYSQLI_ASSOC);
}
if (isset($_POST['delete_material'])) {
    $sql  = "delete from  ob_material_didatico where 1=1";
    if(isset($_POST['id_professor']))
    {
        $sql .= " and id_professor = ".$_POST['id_professor'];
    }
    if(isset($_POST['id_material_didatico']))
    {
        $sql .= " and id_material_didatico = ".$_POST['id_material_didatico'];
    }
    $db->query($sql);
    $resultado = array("Status" => true);
    $sql  = "select * from  ob_material_didatico where 1=1";
    $result = $db->query($sql);
    $resultado = $result->fetch_all(MYSQLI_ASSOC);
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
                                <?php foreach($resultado as $item){ 
                                        if($item['fl_aprovado'] == 1)
                                        {
                                            $situacao = "Aprovado";
                                            $classe = "text-bg-success";
                                        }
                                        elseif($item['fl_aprovado'] == 2){
                                            $situacao = "Pendente";
                                            $classe = "text-bg-warning";
                                        }else{
                                            $situacao = "Reprovado";
                                            $classe = "text-bg-danger";
                                        }
                                    ?>
                                <tr>
                                    <td><?php echo($item['titulo']); ?></td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge <?php echo($classe); ?>"><?php echo($situacao); ?></span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                            <a href="#" class="btn btn-info" title="Link do Google Drive"><i
                                                    class="fa-brands fa-google-drive"></i></a>
                                            <a href="material-didatico-edit.php?id_material_didatico=<?php echo($item['id_material_didatico']); ?>" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                            <form action="" method="post">
                                                <input type="hidden" name="id_material_didatico" value="<?php echo($item['id_material_didatico']); ?>" />
                                            <button type="submit" name="delete_material" class="btn btn-danger" title="Deletar"><i
                                                    class="fa-solid fa-trash"></i></button>
                                            </form>        
                                           
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>






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