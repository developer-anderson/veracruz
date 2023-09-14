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
    $sql_agencias  = "select * from  agencias where 1=1";
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

    $sql_formapagamentos  = "select * from  forma_pagamento where 1=1";
    if(isset($_GET['updateformapagamento'])){
        $sql_formapagamentos .= " and id = ".$_GET['updateformapagamento'];
    }
    $result_formapagamentos = $db->query($sql_formapagamentos);
    if(isset($_POST['formapagamento'])){
        $query = (isset($_POST['alteracaoformapagamentoupdate']) ? 'update' : 'insert into' );
        $id = (isset($_POST['alteracaoformapagamentoupdate']) ? $_POST['alteracaoformapagamentoupdate'] : 0 );
        $condidions = (isset($_POST['alteracaoformapagamentoupdate']) ? "where id = $id" : '' );
        $sql = "$query  forma_pagamento set nome = '".$_POST['nome']."' $condidions";
     
        $db->query($sql);
        header("Location: formas_pagamentos_list.php?atualizado=true");
        exit();
    }


    $sql_comandantes  = "select * from  comandantes where 1=1";
    if(isset($_GET['updatecomandante'])){
        $sql_comandantes .= " and id = ".$_GET['updatecomandante'];
    }
    $result_comandantes = $db->query($sql_comandantes);
    if(isset($_POST['comandante'])){
        $query = (isset($_POST['alteracaocomandanteupdate']) ? 'update' : 'insert into' );
        $id = (isset($_POST['alteracaocomandanteupdate']) ? $_POST['alteracaocomandanteupdate'] : 0 );
        $condidions = (isset($_POST['alteracaocomandanteupdate']) ? "where id = $id" : '' );
        $sql = "$query  comandantes set nome = '".$_POST['nome']."' $condidions";
     
        $db->query($sql);
        header("Location: comandantes_list.php?atualizado=true");
        exit();
    }

    
    $sql_servicos  = "select * from  servicos where 1=1";
    if(isset($_GET['updateservico'])){
        $sql_servicos .= " and id = ".$_GET['updateservico'];
    }
    $result_servicos = $db->query($sql_servicos);
    if(isset($_POST['servico'])){
        $query = (isset($_POST['alteracaoservicoupdate']) ? 'update' : 'insert into' );
        $id = (isset($_POST['alteracaoservicoupdate']) ? $_POST['alteracaoservicoupdate'] : 0 );
        $condidions = (isset($_POST['alteracaoservicoupdate']) ? "where id = $id" : '' );
        $sql = "$query  servicos set nome = '".$_POST['nome']."' $condidions";
     
        $db->query($sql);
        header("Location: servicos_list.php?atualizado=true");
        exit();
    }
?>