<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        API pour nom de domaine
        <small>Ajout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Gestion des API domaine</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">nom de domaine</li>
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
              <h3 class="box-title">API</h3>
            </div>
            <!-- /.box-header -->
               <?php echo form_open("Hebergement_web_pour_developpeur/add_domain_api");?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="extension">Nom de l'API</label>
                  <input type="text" class="form-control"  placeholder="Nom API" name="nomapi">
                 <?php echo "<p style=\"color: red;\">"; echo form_error('nomapi'); echo "</p>"; ?>
                </div>

                <div class="form-group">
                  <label for="prix">URL de l'API</label>
                  <input type="text" class="form-control" id="prix" placeholder="URL de la requete" name="urlapi">
                </div>
                <div class="form-group">
                  <label for="prix_renouv">Cle 1 de l'API</label>
                  <input type="text" class="form-control" id="prix_renouv" placeholder="cle 1" name="key1">
                </div>
                <div class="form-group">
                  <label for="prix_transfert">Cle 2 de l'API</label>
                  <input type="text" class="form-control"  placeholder="cle 2" name="key2">
                </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                  <label for="api">Cle 3 de l'API</label>
                  <input type="text" class="form-control"  placeholder="Cle 3" name="key3">
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