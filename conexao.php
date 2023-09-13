<?php
    define('HOST', 'localhost');
    define('USER', 'root');
    define('PASSWORD', '');
    define('DB', 'veracruz');
    $db = new mysqli(HOST, USER, PASSWORD, DB) or die ('Erro ao conectar');
    $db->set_charset("utf8");
    session_start();
    $sql_embarcacoes  = "select * from  embarcacoes where 1=1";
    if(isset($_GET['updateembarcacao'])){
        $sql_embarcacoes .= " and id = ".$_GET['updateembarcacao'];
    }
    $result_embarcacoes = $db->query($sql_embarcacoes);
    if(isset($_POST['embarcacao'])){
        $query = (isset($_POST['alteracaoembarcacaoupdate']) ? 'update' : 'insert into' );
        $id = (isset($_POST['alteracaoembarcacaoupdate']) ? $_POST['alteracaoembarcacaoupdate'] : 0 );
        $condidions = (isset($_POST['alteracaoembarcacaoupdate']) ? "where id = $id" : '' );
        $sql = "$query  embarcacoes set nome = '".$_POST['nome']."', capacidade = ".$_POST['capacidade'].", revisao = '".$_POST['revisao']."' $condidions";
     
        $db->query($sql);
        header("Location: embarcacoes_list.php?atualizado=true");
        exit();
    }
    $sql_embarcacoes  = "select * from  agencias where 1=1";
    if(isset($_GET['updateagencia'])){
        $sql_agencias .= " and id = ".$_GET['updateagencia'];
    }
    $result_agencias = $db->query($sql_agencias);
    if(isset($_POST['agencia'])){
        $query = (isset($_POST['alteracaoagenciaupdate']) ? 'update' : 'insert into' );
        $id = (isset($_POST['alteracaoagenciaupdate']) ? $_POST['alteracaoagenciaupdate'] : 0 );
        $condidions = (isset($_POST['alteracaoagenciaupdate']) ? "where id = $id" : '' );
        $sql = "$query  agencias set nome = '".$_POST['nome']."' $condidions";
     
        $db->query($sql);
        header("Location: agencias_list.php?atualizado=true");
        exit();
    }
?>