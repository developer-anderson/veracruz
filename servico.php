<?php 
    require_once('partials/_header.php');
    if(isset($_GET['updateservico']))
    {
        $name = "alteracaoservicoupdate";
        $valor = $_GET['updateservico'];
        $resultado = $result_servicos->fetch_all(MYSQLI_ASSOC);
    } 
    else{
        $name = "alteracaoservicoinsert";
        $valor = 0;
        $resultado = null;
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
                </span> Serviço
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
                        <label for="exampleInputName1">Nome do serviço</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php if(isset($resultado)){ echo ($resultado[0]['nome']);}  ?>" placeholder="Nome do serviço">
                      </div>
            
                      <input type="hidden" name="<?php echo($name); ?>" value="<?php echo($valor); ?>"  />
                      <button type="submit" name="servico" class="btn btn-gradient-primary me-2">Salvar alterações</button>
                      <a href="servicos_list.php" class="btn btn-light">Voltar</button>
                    </form>
                  </div>
                </div>
              </div>
    
            </div>
      
    
          </div>
      
<?php require_once('partials/_footer.php') ?>
</html>