<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Détail sur le vps
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
                  <th>Processeur</th>
                  <td><?php echo $liste[$i]->processeur;?></td>
                </tr>
                  <tr>
                    <th>Ram</th>
                    <td><?php echo $liste[$i]->ram ;?></td>
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
                     <th>Cores</th>                    
                      <td><?php echo $liste[$i]->cores; ?></td>
                  </tr>
                  <tr>
                    <th>Bande passante</th>
                  <td><?php echo $liste[$i]->bande; ?></td>
                  </tr>
                  <tr>
                    <th>Visiteur Simultané</th>
                  <td><?php echo $liste[$i]->visiteurs_simult; ?></td>
                  </tr>
                  <tr>
                    <th>Système d'exploitation</th>
                  <td><?php echo $liste[$i]->systeme_exploit; ?></td>
                  </tr>
                  <tr>
                    <th>Cas d'utilisation</th>
                  <td><?php echo $liste[$i]->use_case; ?></td>
                  </tr>
                  <tr>
                    <th>Statut</th>
                     <?php if ($liste[$i]->statut == 1): ?>
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