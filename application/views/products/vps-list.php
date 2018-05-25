
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Liste des VPS
        <small>MBOAHOST</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="#">Liste des VPS </a></li>
        <li class="active">liste</li>
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
              <h3 class="box-title">Liste des VPS</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a class="btn btn-app bg-olive" href="<?= base_url()?>hebergement_web_pour_developpeur/add_vps_view">
                <i class="fa fa-plus"></i> Ajouter
              </a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Nom</th>
                  <th>Processeur</th>
                  <th>Ram</th>
                  <th>Capacité disque</th>
                  <th>Système d'exploitation</th>
                  <th>Prix</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php if ($liste != Null): $i = 0 ?>
                  <?php foreach ($liste as $agent => $value): ?>
                <tr>
                  <td><?php echo $liste[$i]->nom ;?></td>
                  <td><?php echo $liste[$i]->processeur ;?></td>
                  <td><?php echo $liste[$i]->ram ;?></td>
                  <td><?php echo $liste[$i]->disque ;?></td>
                  <td><?php echo $liste[$i]->systeme_exploit ;?></td>
                  <td><?php echo $liste[$i]->prix ;?></td>
                  <td>
                    <div class="btn-group">
                      <div class="modal <?php if ($liste[$i]->statut == 0): ?>  modal-success<?php else: ?> modal-danger<?php endif; ?> fade" id="<?php echo $liste[$i]->id ;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php if ($liste[$i]->statut == 0): ?> Activer le VPS<?php else: ?> Déactiver le VPS<?php endif; ?></h4>
              </div>
                   <div class="modal-body">
                    <p> Etes-vous sûre de vouloir <?php if ($liste[$i]->statut == 0): ?> Activer <?php else: ?> Déactiver <?php endif; ?> ce VPS?</p>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fermer</button>
              <a href="<?= base_url() ?>Hebergement_web_pour_developpeur/statut_vps/<?php echo $liste[$i]->id ;?>">  <button type="submit" class="btn btn-outline"><?php if ($liste[$i]->statut == 0): ?> Activer le VPS<?php else: ?> Déactiver le VPS<?php endif; ?></button>
              </a>
              </div>
            </div>
            <!-- /.modal-content -->
          </div>
          <div class="modal  modal-danger fade" id="d<?php echo $liste[$i]->id ;?>">
            <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"> Supprimer le VPS</h4>
              </div>
                   <div class="modal-body">
                    <p> Etes-vous sûre de vouloir Supprimer le VPS ?</p>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fermer</button>
              <a href="<?= base_url() ?>Hebergement_web_pour_developpeur/delete_vps/<?php echo $liste[$i]->id ;?>">  <button type="submit" class="btn btn-outline"> Supprimer le VPS</button>
              </a>
              </div>
            </div>
          </div>
          <!-- /.modal-dialog -->
        </div>
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#d<?php echo $liste[$i]->id ;?>"><i class="fa fa-trash-o" style="margin-right: 7px;"></i></button>
                  <button type="button" class="btn btn-default btn-sm "><i class="fa fa-edit" style="margin-right: 7px;"></i></button>
                  <a href="<?= base_url() ?>Hebergement_web_pour_developpeur/single_vps/<?php echo $liste[$i]->id ;?>"><button type="button" class="btn btn-default btn-sm "><i class="fa fa-eye" style="margin-right: 7px;"></i></button></a>
                  <?php if ($liste[$i]->statut == 0): ?>
                  <button type="button" class="btn btn-success btn-sm "  data-toggle="modal" data-target="#<?php echo $liste[$i]->id ;?>" > <i class="fa  fa-check-square" style="margin-right: 7px;"></i></button>
                <?php else: ?>
                  <button type="button" class="btn btn-danger btn-sm "  data-toggle="modal" data-target="#<?php echo $liste[$i]->id ;?>" ><i class="fa  fa-close" style="margin-right: 7px;"></i></button>
                   <?php endif; ?>
                </div>
              </td>
                </tr>
                <?php $i = $i +1 ?>
               <?php endforeach; ?>
             <?php endif; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Nom</th>
                  <th>Processeur</th>
                  <th>Ram</th>
                  <th>Capacité disque</th>
                  <th>Système d'exploitation</th>
                  <th>Prix</th>
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