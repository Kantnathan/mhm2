<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Ajouter un Menu
        <small>Ajout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Blog</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Ajouter un Menu</li>
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
              <h3 class="box-title">Ajouter un Menu</h3>
            </div>
            <!-- /.box-header -->
               <?php echo form_open("menus/ajout_menu");?>
              <div class="box-body">
                <div class="col-md-6">

                <div class="form-group">
                  <label for="titre">Titre</label>
                  <input type="text" class="form-control" id="titre" placeholder="Titre" name="titre">
                  <?php echo form_error("titre");?>

                </div>
                <div class="form-group">
                  <label for="url"> Url Menu</label>
                  <input type="text" class="form-control" id="lien" placeholder="Exemmple: Welcome/hebergement-web" name="lien">
                  <?php echo form_error("lien");?>

                </div>
                <div class="form-group">
                  <label for="ordre">Ordre</label>
                  <input type="number" class="form-control" id="ordre" placeholder="Numero d'Ordre
                  " name="ordre">
                  <?php echo form_error("ordre");?>

                </div>
                </div>
                 <div class="col-md-6">
                   <div class="form-group">
                  <label for="nom">nom</label>
                  <input type="text" class="form-control" id="nom" placeholder="Nom du Menu
                  " name="nom">
                  <?php echo form_error("nom");?>

                </div>
                  <div class="form-group">
                  <label for="disque">Menu Parent</label>
                  <select class="form-control " name="parent">
                    <?php if ($liste != NULL): $i = 0?>
                            <?php  foreach ($liste as $key => $value ): ?>
                            <option value="<?php echo $liste[$i]->id ;?>"><?php echo $liste[$i]->nom ;?></option>
                            <?php $i = $i +1 ;?>
                           <?php endforeach ;?>
                           <?php endif ;?>

                  </select>

                </div>
                <div class="form-group">
                  <label for="disque">Statut du menu</label>
                  <select class="form-control " name="statut" >
                    <option value="publier">Publier</option>
                    <option value="Menu">Brouillon</option>
                  </select>
                  <?php echo form_error("statut");?>

                </div>
              </div>
       <section class="content">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="box box-info">
                          <div class="box-header">
                            <h3 class="box-title">Contenu
                              <small>Description du menu</small>
                            </h3>
                            <!-- tools box -->
                            
                            <!-- /. tools -->
                          </div>
                          <!-- /.box-header -->
                          
                          <div class="box-body">
                            <textarea  name="words" placeholder="Entrez les mots clés" 
                          style="width: 100%; height: 120px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"  ></textarea>
                  <?php echo form_error("keywords");?>

                          </div>

                        </div>
                        <!-- /.box -->

                      </div>
                      <!-- /.col-->
                    </div>
      <!-- ./row -->
      </section>
        <section class="content">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="box box-info">
                          <div class="box-header">
                            <h3 class="box-title">Contenu
                              <small>Description du menu</small>
                            </h3>
                            <!-- tools box -->
                            
                            <!-- /. tools -->
                          </div>
                          <!-- /.box-header -->
                          
                          <div class="box-body pad">
                                  <textarea id="editor1" rows="10" cols="80" name="contenu">
                                                         Pétite description
                                  </textarea>
                  <?php echo form_error("contenu");?>

                          </div>

                        </div>
                        <!-- /.box -->

                      </div>
                      <!-- /.col-->
                    </div>
      <!-- ./row -->
      </section>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input  type="submit" class="btn btn-primary btn-lg" value="Enregistrer">
              </div>
            <?php echo form_close();?>
          </div>
          <!-- /.box -->


        </div>
        <!--/.col (left) -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>