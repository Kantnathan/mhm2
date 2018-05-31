
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
      
    <section class="content-header">
      <h1>
       Liste des commandes
        <small>MBOAHOST</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="#">Commandes </a></li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <?php if ($this->session->flashdata('deleteMessaage') != Null): ?>
         <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alerte!!!</h4>
                Suppression effectuée avec succès.
            </div>
          <?php endif;?>
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Liste des commandes</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a class="btn btn-app bg-olive" href="<?= base_url()?>hebergement_web_pour_developpeur/add_host_view">
                <i class="fa fa-plus"></i> Ajouter
              </a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>id</th>
                  <th>Client</th>
                  <th>Produits</th>
                  <th>Date</th>
                  <th>Montant</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php if (isset($commandes)): $i = 0 ?>
                  <?php foreach ($commandes as $agent => $value): ?>
                <tr>
                  <td><?php echo $commandes[$i]['num_commande'] ;?></td>
                  <td><?php echo $commandes[$i]['user'] ;?></td>
                  <td><?php foreach ($commandes[$i]['produits'] as $prod): ?>
                  <?php echo $prod ;?><br>
                  <?php endforeach; ?>
                  </td>
                  <td><?php echo $commandes[$i]['date'] ;?></td>
                  <td><?php echo $commandes[$i]['montant'] ;?></td>
                  <td>
              </td>
                </tr>
                <?php $i = $i +1 ?>
               <?php endforeach; ?>
             <?php endif; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>id</th>
                  <th>Client</th>
                  <th>Produits</th>
                  <th>Date</th>
                  <th>Montant</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->