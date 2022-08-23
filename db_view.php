<?php
require_once('db.php');
session_start();
$data_atual = date("Y-m-d");
$time = date("H:i:s");
$resultado = array();
$mes = date("m");
$dia = date("d");
$ano = date("Y");
if (isset($_POST['new_material'])) {
    $sql  = "insert into ob_material_didatico set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'".", arquivo = '".$_POST['arquivo']."'".", link_drive = '".$_POST['link_drive']."'".", fl_aprovado = '".$_POST['fl_aprovado']."'";
    $db->query($sql);
    $resultado = array("Status" => true);

} elseif (isset($_POST['edit_material'])) {
    $sql  = "update ob_material_didatico set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'".", arquivo = '".$_POST['arquivo']."'".", link_drive = '".$_POST['link_drive']."'".", fl_aprovado = '".$_POST['fl_aprovado']."' where id_material_didatico = ".$_POST['id_material_didatico'];
    $db->query($sql);
    $resultado = array("Status" => true);
} 
elseif (isset($_POST['view_material'])) {
    $sql  = "select * from  ob_material_didatico where 1=1";
    if(isset($_POST['id_professor']))
    {
        $sql .= " and id_professor = ".$_POST['id_professor'];
    }
    if(isset($_POST['fl_aprovado']))
    {
        $sql .= " and fl_aprovado = ".$_POST['fl_aprovado'];
    }
    $result = $db->query($sql);
   
    while ($row = $result->fetch_assoc()) 
    {
        $resultado[] =  $row;
    }
} 
elseif (isset($_POST['delete_material'])) {
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
} 
//ob video

elseif (isset($_POST['new_video'])) {
    $sql  = "insert into ob_video set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'".", arquivo = '".$_POST['arquivo']."'";
    $db->query($sql);
    $resultado = array("Status" => true);
} 
elseif (isset($_POST['edit_video'])) {
    $sql  = "update ob_video set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'".", arquivo = '".$_POST['arquivo']."'";
    $db->query($sql);
    $resultado = array("Status" => true);
} 
elseif (isset($_POST['view_video'])) {
    $sql  = "select * from  ob_video where 1=1";
    if(isset($_POST['id_professor']))
    {
        $sql .= " and id_professor = ".$_POST['id_professor'];
    }
    if(isset($_POST['id_video']))
    {
        $sql .= " and id_video = ".$_POST['id_video'];
    }
    $result = $db->query($sql);
   
    while ($row = $result->fetch_assoc()) 
    {
        $resultado[] =  $row;
    }
} 
elseif (isset($_POST['delete_video'])) {
    $sql  = "delete from  ob_video where 1=1";
    if(isset($_POST['id_professor']))
    {
        $sql .= " and id_professor = ".$_POST['id_professor'];
    }
    if(isset($_POST['id_video']))
    {
        $sql .= " and id_video = ".$_POST['id_video'];
    }
    $db->query($sql);
    $resultado = array("Status" => true);
} 

//ob relato

elseif (isset($_POST['new_relato'])) {
    $sql  = "insert into ob_relato set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'".", arquivo = '".$_POST['arquivo']."'";
    $db->query($sql);
    $resultado = array("Status" => true);
} 
elseif (isset($_POST['edit_relato'])) {
    $sql  = "update ob_relato set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'".", arquivo = '".$_POST['arquivo']."'";
    $db->query($sql);
    $resultado = array("Status" => true);
} 
elseif (isset($_POST['view_relato'])) {
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
   
    while ($row = $result->fetch_assoc()) 
    {
        $resultado[] =  $row;
    }
} 
elseif (isset($_POST['delete_relato'])) {
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
} 
echo json_encode($resultado);
