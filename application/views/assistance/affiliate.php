 <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Affiliation
        <small>Votre liste d'abonnés</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="#">Panel</a></li>
        <li class="active">Affiliation</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Affiliation</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-link"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text"> Copiez votre lien d'affiliation et partagez le!!!</span>
                  <input type="url" style="background: skyblue;" name="lien" value="<?= base_url()?>auth/create_user/<?php echo $this->ion_auth->user()->row()->code;?>" class="form-control" disabled>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                 <div class="col-md-6 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-money"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Votre Solde</span>
                      <span class="info-box-number"><?php if (isset($this->ion_auth->user()->row()->solde)) {
                        # code...
                        echo $this->ion_auth->user()->row()->solde;
                      }else{
                         echo "0.00 FCFA";
                      } ;?></span>
                     
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
              </div>
              <table id="example1" class="table table-hover">
                <thead>
                <tr>
                  <th>Prenom</th>
                  <th>Nom(s)</th>
                  <th>Ville</th>
                  <th>Etat/Pays</th>
                  <th>Statut</th>
                </tr>
                </thead>
                <tbody>
                  <?php $i = 0 ;?>
              <?php foreach ($liste as $agent => $value): ?>
                <tr>
                  <td><?php echo $liste[$i]->first_name ;?></td>
                  <td><?php echo $liste[$i]->last_name ;?></td>
                  <td><?php echo $liste[$i]->city ;?></td>
                  <td><?php echo $liste[$i]->country ;?></td>
                  <?php if ($liste[$i]->statut == 1): ?>
                  <td><span class="label label-success form-control">Actif</span></td>
                   <?php else: ?>
                  <td><span class="label label-danger">Inactif</span></td>
                    <?php endif; ?>
                </tr>
                <?php $i = $i +1 ?>
               <?php endforeach; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Prenom</th>
                  <th>Nom(s)</th>
                  <th>Ville</th>
                  <th>Etat/Pays</th>
                  <th>Statut</th>
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