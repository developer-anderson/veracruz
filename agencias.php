<?php 
    require_once('partials/_header.php');
    if(isset($_GET['updateembarcacao']))
    {
        $name = "alteracaoembarcacaoupdate";
        $valor = $_GET['updateembarcacao'];
        $resultado = $result_embarcacoes->fetch_all(MYSQLI_ASSOC);
    } 
    else{
        $name = "alteracaoembarcacaoinsert";
        $valor = 0;
    }   
?>
    <div class="container-scroller">

    <?php require_once('partials/_topnavbar.php'); ?>
     
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
       
        <?php require_once('partials/_sidebar.php'); ?>
    
        <div class="main-panel">
          <div class="content-wrapper">
            <div class="page-header">
              <h3 class="page-title">
                <span class="page-title-icon bg-gradient-primary text-white me-2">
                  <i class="mdi mdi-home"></i>
                </span> Embarcações
              </h3>
          
            </div>
     
            <div class="row">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <div class="clearfix">
             
                
                      <h4 class="card-title float-left">Salvar dados</h4>
                      <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <form class="forms-sample" method="post">
                      <div class="form-group">
                        <label for="exampleInputName1">Nome da embarcação</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php echo ($resultado[0]['nome']); ?>" placeholder="Nome da embarcação">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail3">Capacidade</label>
                        <input type="number" class="form-control" id="capacidade" name="capacidade" value="<?php echo ($resultado[0]['capacidade']); ?>" placeholder="Capacidade de tripulantes">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword4">Data da ultima revisão</label>
                        <input type="datetime-local" class="form-control" id="revisao"  value="<?php echo ($resultado[0]['revisao']); ?>" name="revisao">
                      </div>
                      <input type="hidden" name="<?php echo($name); ?>" value="<?php echo($valor); ?>"  />
                      <button type="submit" name="embarcacao" class="btn btn-gradient-primary me-2">Salvar alterações</button>
                      <a href="embarcacoes.php" class="btn btn-light">Voltar</button>
                    </form>
                  </div>
                </div>
              </div>
    
            </div>
      
    
          </div>
      
<?php require_once('partials/_footer.php') ?>
</html>