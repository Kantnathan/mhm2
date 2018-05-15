<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       FAQ
        <small>Ajout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Assistance</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">FAQ</li>
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
              <h3 class="box-title">Ajouter une nouvelle FAQ</h3>
            </div>
            <!-- /.box-header -->
               <?php echo form_open("assistance/ajout_faq");?>
              <div class="box-body">
                 <div class="col-md-6">
                  <div class="form-group">
                  <label for="cores">Question</label>
                  <input type="text" class="form-control"  placeholder="Question de la FAQ" name="question">
                  <?php echo form_error("name");?>
                </div>
              </div>
              <div class="col-md-6">
                  <div class="form-group">
                  <label for="cores">Statut de la FAQ</label>
                  <select class="form-control " name="statut" >
                    <option value="1">Publier</option>
                    <option value="0">Non publier</option>
                  </select>
                  <?php echo form_error("statut");?>
                </div>
              </div>
               <div class="col-md-12">
                  <div class="form-group">
                  <label for="cores">Catégorie de la FAQ</label>
                  <select class="form-control " name="categorie" >
                    <option value="Nom de domaine">Nom de domaine</option>
                    <option value="Hébergement">Hébergement</option>
                    <option value="VPS">VPS</option>
                    <option value="Addons">Non Addons</option>
                  </select>
                  <?php echo form_error("categorie");?>
                </div>
              </div>
              <div class="form-group">
                  <label for="cores">Réponse</label>
                   <textarea id="editor1" rows="10" cols="80" name="reponse">
                                                         Saisissez la réponse  ici
                                  </textarea>
                  <?php echo form_error("reponse");?>
                </div>
            </div>
              <!-- /.box-body -->

              <div class="box-footer">
                <input  type="submit" class="btn btn-primary btn-lg" value="Enregistrer"/>
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