<?php require_once('partials/_header.php'); ?>
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
                    <?php if (isset($_GET['atualizado'])) {
                        echo '<div class="alert alert-success">Alteração realizada com sucesso!</div>';
                    ?>    <?php } ?>
                      <h4 class="card-title float-left">Lista de Embarcações</h4>
                      <div id="visit-sale-chart-legend" class="rounded-legend legend-horizontal legend-top-right float-right"></div>
                    </div>
                    <table class="table table-bordered">
                      <thead>
                        <tr>
                          <th> # </th>
                          <th> Nome </th>
                 
                       
                        </tr>
                      </thead>
                      <tbody>
                      <?php while ($item = $result_agencias->fetch_assoc()) { ?>
                            <tr>
                                <td><?php echo ($item['id']); ?></td>
                                <td><a href="agencias.php?updateembarcacao=<?php echo ($item['id']); ?>"><?php echo ($item['nome']); ?></a></td>
                      
                             </tr>

                    <?php } ?>
                  
             
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
    
            </div>
      
    
          </div>
      
<?php require_once('partials/_footer.php') ?>
</html>