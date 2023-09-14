<?php 
    require_once('partials/_header.php');
    if(isset($_GET['updatecomandante']))
    {
        $name = "alteracaocomandanteupdate";
        $valor = $_GET['updatecomandante'];
        $resultado = $result_comandantes->fetch_all(MYSQLI_ASSOC);
    } 
    else{
        $name = "alteracaocomandanteinsert";
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
                </span> Comandante
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
                        <label for="exampleInputName1">Nome do comandante</label>
                        <input type="text" class="form-control" id="nome" name="nome" value="<?php if(isset($resultado)){ echo ($resultado[0]['nome']);}  ?>" placeholder="Nome do comandante">
                      </div>
            
                      <input type="hidden" name="<?php echo($name); ?>" value="<?php echo($valor); ?>"  />
                      <button type="submit" name="comandante" class="btn btn-gradient-primary me-2">Salvar alterações</button>
                      <a href="comandantes_list.php" class="btn btn-light">Voltar</button>
                    </form>
                  </div>
                </div>
              </div>
    
            </div>
      
    
          </div>
      
<?php require_once('partials/_footer.php') ?>
</html>