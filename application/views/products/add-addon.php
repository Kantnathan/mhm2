<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Produit Addon
        <small>Ajout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Gestion des produits</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Addon</li>
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
              <h3 class="box-title">Addon</h3>
            </div>
            <!-- /.box-header -->
               <?php echo form_open("Hebergement_web_pour_developpeur/add_addon");?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="extension">Nom de l'addon</label>
                  <input type="text" class="form-control"  placeholder="Exemple : ip dédié" name="name">
                 <?php echo "<p style=\"color: red;\">"; echo form_error('name'); echo "</p>"; ?>
                </div>
                <div class="form-group">
                  <label for="prix">Prix de l'Addon</label>
                  <input type="number" class="form-control" id="prix" placeholder="Prix de l'addon" name="prix">
                </div>
                   <div class="form-group">
                  <label>Type de l'addon</label>
                  <select class="form-control" name="type">
                    <?php if ($type != NULL): $i = 0?>
                            <?php  foreach ($type as $key => $value ): ?>
                            <option value="<?php echo $type[$i]->type ;?>"><?php echo $type[$i]->type ;?></option>
                            <?php $i = $i +1 ;?>
                           <?php endforeach ;?>
                           <?php endif ;?>
                  </select>
                </div>
                </div>
                 <div class="col-md-6">
                  
                     <div class="form-group">
                  <label>Frequence</label>
                  <select class="form-control" name="frequence">
                    <?php if ($liste != NULL): $i = 0?>
                            <?php  foreach ($liste as $key => $value ): ?>
                            <option value="<?php echo $liste[$i]->name ;?>"><?php echo $liste[$i]->name ;?></option>
                            <?php $i = $i +1 ;?>
                           <?php endforeach ;?>
                           <?php endif ;?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Description de l'extension</label>
                  <textarea class="form-control" rows="4" placeholder="Entrer ..." name="desc"></textarea>
                </div>
              </div>
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