<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Combos Products
        <small>Ajout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Gestion des produits</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">combos</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- left column -->
        <div class="col-md-12">
          <!-- general form elements -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">Extensions gratuites</h3>
            </div>
            <!-- /.box-header -->
               <?php echo form_open("Hebergement_web_pour_developpeur/combo");?>
              <div class="box-body">
                  <?php if ($this->session->flashdata('comboMessage') != Null): ?>
         <div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                <h4><i class="icon fa fa-check"></i> Alerte!!!</h4>
               <?php echo $this->session->flashdata('comboMessage') ;?>
            </div>
          <?php endif;?>
                <div class="col-md-6">
                    <div class="form-group">
                  <label>Selectionner les extensions</label>
                  <select class="form-control " style="width: 100%;" name="host">
                    <?php if ($host != NULL): $i = 0?>
                            <?php  foreach ($host as $key => $value ): ?>
                            <option value="<?php echo $host[$i]->nom ;?>"><?php echo $host[$i]->nom ;?></option>
                            <?php $i = $i +1 ;?>
                           <?php endforeach ;?>
                           <?php endif ;?>
                  </select>
                </div>
                </div>
                 <div class="col-md-6">
                   <div class="form-group">
                  <label>Selectionner les extensions</label>
                  <select class="form-control select2" multiple="multiple" data-placeholder="Choix de l'extension"
                          style="width: 100%;" name="domaine[]">
                    <?php if ($domain != NULL): $i = 0?>
                            <?php  foreach ($domain as $key => $value ): ?>
                            <option value="<?php echo $domain[$i]->extension ;?>"><?php echo $domain[$i]->extension ;?></option>
                            <?php $i = $i +1 ;?>
                           <?php endforeach ;?>
                           <?php endif ;?>
                  </select>
                </div>
              </div>
              <div class="form-group">
                <input  type="submit" class="btn btn-warning btn-lg" value="Enregistrer">
              </div>
            <?php echo form_close();?>

              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Id</th>
                  <th>Pack d'hébergement</th>
                  <th>Extension</th>
                  <th>Crée le</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php if ($liste != Null): $i = 0 ?>
                  <?php foreach ($liste as $agent => $value): ?>
                <tr>
                  <td><?php echo $liste[$i]->id ;?></td>
                  <td><?php echo $liste[$i]->host ;?></td>
                  <td><?php echo $liste[$i]->domaine ;?></td>
                  <td><?php echo $liste[$i]->created_at ;?></td>
                  <td>
                    <div class="btn-group">
                      <div class="modal <?php if ($liste[$i]->statut == 0): ?>  modal-success<?php else: ?> modal-danger<?php endif; ?> fade" id="<?php echo $liste[$i]->id ;?>">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title"><?php if ($liste[$i]->statut == 0): ?> Activer le combo<?php else: ?> Déactiver le combo<?php endif; ?></h4>
              </div>
                   <div class="modal-body">
                    <p> Etes-vous sûre de vouloir <?php if ($liste[$i]->statut == 0): ?> Activer <?php else: ?> Déactiver <?php endif; ?> ce combo?</p>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fermer</button>
              <a href="<?= base_url() ?>Hebergement_web_pour_developpeur/statut_combo/<?php echo $liste[$i]->id ;?>">  <button type="submit" class="btn btn-outline"><?php if ($liste[$i]->statut == 0): ?> Activer le combo<?php else: ?> Déactiver le combo<?php endif; ?></button>
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
                <h4 class="modal-title"> Supprimer le Pack d'hébergement</h4>
              </div>
                   <div class="modal-body">
                    <p> Etes-vous sûre de vouloir Supprimer le Pack d'hébergement ?</p>
                    </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-outline pull-left" data-dismiss="modal">Fermer</button>
              <a href="<?= base_url() ?>Hebergement_web_pour_developpeur/delete_combo/<?php echo $liste[$i]->id ;?>">  <button type="submit" class="btn btn-outline"> Supprimer le Pack d'hébergement</button>
              </a>
              </div>
            </div>
          </div>
          <!-- /.modal-dialog -->
        </div>
                  <button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#d<?php echo $liste[$i]->id ;?>"><i class="fa fa-trash-o" style="margin-right: 7px;"></i></button>
                  <button type="button" class="btn btn-default btn-sm "><i class="fa fa-edit" style="margin-right: 7px;"></i></button>
                  <a href="<?= base_url() ?>Hebergement_web_pour_developpeur/single_combo/<?php echo $liste[$i]->id ;?>"><button type="button" class="btn btn-default btn-sm "><i class="fa fa-eye" style="margin-right: 7px;"></i></button></a>
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
                  <th>Id</th>
                  <th>Pack d'hébergement</th>
                  <th>Extension</th>
                  <th>Crée le</th>
                  <th>Actions</th>
                </tr>
                </tfoot>
              </table>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
               
              </div>
          </div>
          <!-- /.box -->


        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>