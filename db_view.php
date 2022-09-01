<?php
require_once('conexao.php');
session_start();
$data_atual = date("Y-m-d");
$time = date("H:i:s");
$resultado = array();
$mes = date("m");
$dia = date("d");
$ano = date("Y");
header("Access-Control-Allow-Origin: *");
if (isset($_POST['new_material'])) {
    $sql  = "insert into ob_material_didatico set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'".", link_drive = '".$_POST['link_drive']."'".", fl_aprovado = '".$_POST['fl_aprovado']."'";
    
    if(isset($_FILES["arquivo"]) and !empty($_FILES["arquivo"]['name']))
    {
            $sql .= ", arquivo = '".$_POST['arquivo']."'";
            $db->query($sql);
            $foto = $_FILES["arquivo"]["name"];
            $dir = "./material_didatico/" . $foto;
            if(file_exists($dir)) 
            {
                unlink($dir);
            }
            move_uploaded_file($_FILES["arquivo"]["tmp_name"], $dir);
         
    }
    else{
        $db->query($sql);
    }
   
    $resultado = array("status" => true, "desc" => "Material adicionado com sucesso");


} elseif (isset($_POST['edit_material'])) {
    $sql  = "update ob_material_didatico set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'".", link_drive = '".$_POST['link_drive']."'".", fl_aprovado = '".$_POST['fl_aprovado']."'";
    if(isset($_FILES["arquivo"]) and !empty($_FILES["arquivo"]['name']))
    {
        $sql .= ", arquivo = '".$_POST['arquivo']."'  where id_material_didatico =".$_POST['id_material_didatico'];
        $db->query($sql);
        $foto = $_FILES["arquivo"]["name"];
        $dir = "./material_didatico/" . $foto;
        if(file_exists($dir)) 
        {
            unlink($dir);
        }
        move_uploaded_file($_FILES["arquivo"]["tmp_name"], $dir);
        $sql = " update ob_material_didatico set `arquivo` = '$foto'  where id_material_didatico =".$_POST['id_material_didatico'];
        $db->query($sql);
    }
    else{
        $sql .= " where id_material_didatico =".$_POST['id_material_didatico'];
        $db->query($sql);
    }
   
    $resultado = array("status" => true, "desc" => "Material editado com sucesso");
} 
elseif (isset($_POST['view_material'])) {
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
    $retorno = array();
    $resultado = $result->fetch_all(MYSQLI_ASSOC);
    foreach($resultado as $item)
    {
        $retorno[] = $item;
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

    if(isset($_FILES["arquivo"]) and !empty($_FILES["arquivo"]['name']))
    {
            $sql .= ", arquivo = '".$_POST['arquivo']."'";
            $db->query($sql);
            $foto = $_FILES["arquivo"]["name"];
            $dir = "./material_didatico/" . $foto;
            if(file_exists($dir)) 
            {
                unlink($dir);
            }
            move_uploaded_file($_FILES["arquivo"]["tmp_name"], $dir);
         
    }
    else{
        $db->query($sql);
    }
    $resultado = array("status" => true, "desc" => "Video adicionado com sucesso");
} 
elseif (isset($_POST['edit_video'])) {
    $sql  = "update ob_video set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'";
    if(isset($_FILES["arquivo"]) and !empty($_FILES["arquivo"]['name']))
    {
        $sql .= ", arquivo = '".$_POST['arquivo']."'  where id_video =".$_POST['id_video'];
        $db->query($sql);
        $foto = $_FILES["arquivo"]["name"];
        $dir = "./material_didatico/" . $foto;
        if(file_exists($dir)) 
        {
            unlink($dir);
        }
        move_uploaded_file($_FILES["arquivo"]["tmp_name"], $dir);
        $sql = " update ob_video set `arquivo` = '$foto'  where id_video =".$_POST['id_video'];
        $db->query($sql);
      
    }
    else{
        $sql .= " where id_video =".$_POST['id_video'];
        $db->query($sql);
    }
   
    $resultado = array("status" => true, "desc" => "Video editado com sucesso");
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
    $resultado = array("status" => true, "desc" => "Video excluido com sucesso");
} 

//ob relato

elseif (isset($_POST['new_relato'])) {
    $sql  = "insert into ob_relato set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'";
    if(isset($_FILES["arquivo"]) and !empty($_FILES["arquivo"]['name']))
    {
            $sql .= ", arquivo = '".$_POST['arquivo']."'";
            $db->query($sql);
            $foto = $_FILES["arquivo"]["name"];
            $dir = "./material_didatico/" . $foto;
            if(file_exists($dir)) 
            {
                unlink($dir);
            }
            move_uploaded_file($_FILES["arquivo"]["tmp_name"], $dir);
         
    }
    else{
        $db->query($sql);
    }
    $resultado = array("status" => true, "desc" => "Relato adicionado com sucesso");
} 
elseif (isset($_POST['edit_relato'])) {
    $sql  = "update ob_relato set id_professor = ".$_POST['id_professor'].", titulo = '".$_POST['titulo']."'".", descricao = '".$_POST['descricao']."'";
    if(isset($_FILES["arquivo"]) and !empty($_FILES["arquivo"]['name']))
    {
        $sql .= ", arquivo = '".$_POST['arquivo']."'  where id_relato =".$_POST['id_relato'];
        $db->query($sql);
        $foto = $_FILES["arquivo"]["name"];
        $dir = "./material_didatico/" . $foto;
        if(file_exists($dir)) 
        {
            unlink($dir);
        }
        move_uploaded_file($_FILES["arquivo"]["tmp_name"], $dir);
        $sql = " update ob_video set `arquivo` = '$foto'  where id_relato =".$_POST['id_relato'];
        $db->query($sql);
      
    }
    else{
        $sql .= " where id_relato =".$_POST['id_relato'];
        $db->query($sql);
    }
    $resultado = array("status" => true, "desc" => "Relato editado com sucesso");
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
    $resultado = array("status" => true, "desc" => "Relato excluido com sucesso");
} 
elseif (isset($_POST['fl_aprovado'])) {
    $sql  = "update ob_material_didatico set fl_aprovado = ".$_POST['fl_aprovado']." where id_material_didatico = ".$_POST['id_material_didatico'];
  
    $db->query($sql);
    $resultado = array("status" => true, "desc" => "Situação do material modificado com sucesso");
} 
if(!$resultado)
{
    $resultado = array("status" => false, "desc" => "Não há registros"); 
}

echo json_encode($retorno);