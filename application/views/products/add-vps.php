<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Produit VPS
        <small>Ajout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Gestion des produits</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">VPS</li>
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
              <h3 class="box-title">VPS</h3>
            </div>
            <!-- /.box-header -->
               <?php echo form_open("Hebergement_web_pour_developpeur/add_vps");?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="name">Nom de l'espace</label>
                  <input type="text" class="form-control"  placeholder="Nom de l'espace" name="name">
                 <?php echo "<p style=\"color: red;\">"; echo form_error('name'); echo "</p>"; ?>
                </div>

                <div class="form-group">
                  <label for="disque">Capacité disque</label>
                  <input type="text" class="form-control" id="disque" placeholder="Capacité disque" name="disque">
                </div>
                <div class="form-group">
                  <label for="prix">Prix de l'espace</label>
                  <input type="number" class="form-control" id="prix" placeholder="Prix " name="prix">
                </div>
                <div class="form-group">
                  <label for="ram">Capacité de la Ram</label>
                  <input type="text" class="form-control"  placeholder="Ram" name="ram">
                </div>
                <div class="form-group">
                  <label for="processeur">Nom du processeur</label>
                  <input type="text" class="form-control"  placeholder="Nom du processeur" name="processeur">
                </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                  <label for="cores">Nombre de coeur du processeur</label>
                  <input type="text" class="form-control"  placeholder="Nombre de coeur du processeur" name="cores">
                </div>
                <div class="form-group">
                  <label for="visiteurs_simult">Visiteurs simultanés</label>
                  <input type="text" class="form-control"  placeholder="Visiteurs simultanés" name="visiteurs_simult">
                </div>
                  <div class="form-group">
                  <label>Frequence</label>
                  <select class="form-control" name="frequence">
                    <?php if ($liste != NULL): $i = 0?>
                            <?php  foreach ($liste as $key => $value ): ?>
                            <option value="<?php echo $liste[$i]->id ;?>"><?php echo $liste[$i]->name ;?></option>
                            <?php $i = $i +1 ;?>
                           <?php endforeach ;?>
                           <?php endif ;?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Système d'exploitation</label>
                  <select class="form-control" name="systeme">
                    <?php if ($sys != NULL): $i = 0?>
                            <?php  foreach ($sys as $key => $value ): ?>
                            <option value="<?php echo $sys[$i]->name ;?>"><?php echo $sys[$i]->name ;?></option>
                            <?php $i = $i +1 ;?>
                           <?php endforeach ;?>
                           <?php endif ;?>
                  </select>
                </div>
                <div class="form-group">
                  <label for="bp">Capacité bande passante</label>
                  <input type="text" class="form-control"  placeholder="Bande passante" name="bp">
                </div>
                 <div class="form-group">
                  <label for="use_case">Cas d'utilisation</label>
                  <input type="text" class="form-control"  placeholder="Utilisation" name="use_case">
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