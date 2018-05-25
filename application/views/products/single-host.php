<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Détail sur l'hébergement
        <small></small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="#">produits</a></li>
        <li class="active">single</li>
      </ol>
    </section>
<?php $i = 0;?>
<?php foreach ($liste as $key => $value) :?>
    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title"><?php echo $liste[$i]->nom; ;?></h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <td><?php echo $liste[$i]->id; ?></td>
                </tr>
                <tr>
                  <th>Nom</th>
                  <td><?php echo $liste[$i]->nom ;?></td>
                </tr>
                <tr>
                  <th>Espace Disque</th>
                  <td><?php echo $liste[$i]->disque;?></td>
                </tr>
                  <tr>
                    <th>Nbre Site</th>
                    <td><?php echo $liste[$i]->site_web ;?></td>
                  </tr> 
                  <tr>
                     <th>Prix </th>
                      <td><?php echo $liste[$i]->prix; ?></td>
                  </tr>
                  <tr>
                    <th>Fréquence</th>
                  <td><?php echo $liste[$i]->frequence; ?></td>
                  </tr> 
                  <tr>
                     <th>Nbre Email</th>                    
                      <td><?php echo $liste[$i]->adresses_email; ?></td>
                  </tr>
                  <tr>
                    <th>Bande passante</th>
                  <td><?php echo $liste[$i]->bande_passante; ?></td>
                  </tr>
                  <tr>
                    <th>Sous domaine</th>
                  <td><?php echo $liste[$i]->sous_domaines; ?></td>
                  </tr>
                  <tr>
                    <th>Base de données</th>
                  <td><?php echo $liste[$i]->bases_donnees; ?></td>
                  </tr>
                  <tr>
                    <th>Stockage Email</th>
                  <td><?php echo $liste[$i]->stockage_email; ?></td>
                  </tr>
                  <tr>
                    <th>Pièces jointes</th>
                  <td><?php echo $liste[$i]->pieces_jointes; ?></td>
                  </tr>
                  <tr>
                    <th>Compte ftp</th>
                  <td><?php echo $liste[$i]->comptes_ftp; ?></td>
                  </tr>
                  <tr>
                    <th>Statut</th>
                     <?php if ($liste[$i]->statut ==1): ?>
                  <td><span class="label label-success form-control">Publié</span></td>
                   <?php else: ?>
                  <td><span class="label label-danger form-control">Déactivé</span></td>
                    <?php endif; ?>
                  </tr>
                <tr>
                 
                </tr>
              </table>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
      </div>
    </section>
    <!-- /.content -->
    <?php $i = $i+1;
                endforeach; ?>
  </div>
  <!-- /.