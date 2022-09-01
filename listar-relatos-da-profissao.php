<?php include 'header.php'; 

if (isset($_POST['view_material'])) {
    $sql  = "select * from  ob_relato where 1=1";
    if(isset($_POST['id_professor']))
    {
        $sql .= " and id_professor = ".$_POST['id_professor'];
    }
    if(isset($_POST['id_relato']))
    {
        $sql .= " and id_relato = ".$_POST['id_relato'];
    }
    $result = $db->query($sql);
 
    $resultado = $result->fetch_all(MYSQLI_ASSOC);
   
    
} 
else{
    $sql  = "select * from  ob_relato where 1=1";
    $result = $db->query($sql);
    $resultado = $result->fetch_all(MYSQLI_ASSOC);
}
if (isset($_POST['delete_material'])) {
    $sql  = "delete from  ob_relato where 1=1";
    if(isset($_POST['id_professor']))
    {
        $sql .= " and id_professor = ".$_POST['id_professor'];
    }
    if(isset($_POST['id_relato']))
    {
        $sql .= " and id_relato = ".$_POST['id_relato'];
    }
    $db->query($sql);
    $resultado = array("Status" => true);
    $sql  = "select * from  ob_relato where 1=1";
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
                    <h2>Listar Relatos da Profissão</h2>
                    <hr>
                </div>

                <div class="col-sm-12 d-flex mb-3">
                    <a href="relatos-da-profissao.php" class="btn btn-success button-pages btn-lg" id="btn-material-didatico"> <i class="fa fa-plus"></i> Cadastrar Novo Relato</a>
                </div>

                <div class="col-sm-12">

                    <table id="listar" class="display">
                        <thead>
                            <tr>
                                <th>Titulo</th>
                                <th class="thAcoes text-center">Aceitou termos?</th>
                                <th class="thAcoes text-center">Status</th>
                                <th class="thAcoes text-center">Ações</th>
                            </tr>
                        </thead>
                            <tbody >
                                <?php foreach($resultado as $item){ ?>
                                <tr>
                                    <td><?php echo($item['titulo']); ?></td>
                                    <td class="text-center"><i class="fa-solid fa-check"></i></td>
                                    <td class="text-center"><span class="badge ">#</span>
                                    </td>
                                    <td class="text-center">
                                        <div class="btn-group">
                                        <a href="relato-da-profissoa-edit.php?id_relato=<?php echo($item['id_relato']); ?>" class="btn btn-success" title="Editar"><i
                                                    class="fa-solid fa-edit"></i></a>
                                 
                                            <form action="" method="post">
                                                <input type="hidden" name="id_relato" value="<?php echo($item['id_relato']); ?>" />
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

<?php include 'footer.php'; ?>