<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
       Ajouter un Article
        <small>Ajout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Blog</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Ajouter un Article</li>
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
              <h3 class="box-title">Ajouter un Article</h3>
            </div>
            <!-- /.box-header -->
               <?php echo form_open("blog/ajout_article");?>
              <div class="box-body">
                <div class="col-md-6">

                <div class="form-group">
                  <label for="disque">Titre</label>
                  <input type="text" class="form-control" id="titre" placeholder="Titre" name="titre">
                  <?php echo form_error("titre");?>

                </div>
                <div class="form-group">
                  <label for="disque">Lien video</label>
                  <input type="text" class="form-control" id="lien" placeholder="Lien video" name="lien">
                  <?php echo form_error("lien");?>

                </div>
              
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                  <label for="disque">Catégorie Article</label>
                  <select class="form-control " name="categorie" >

                    <option>Categorie Article</option>
                    <?php if ($liste != NULL): $i = 0?>
                            <?php  foreach ($liste as $key => $value ): ?>
                            <option value="<?php echo $liste[$i]->name ;?>"><?php echo $liste[$i]->name ;?></option>
                            <?php $i = $i +1 ;?>
                           <?php endforeach ;?>
                           <?php endif ;?>
                  </select>
                  <?php echo form_error("categorie");?>

                </div>
                <div class="form-group">
                  <label for="disque">Type de l'article</label>
                  <select class="form-control " name="type" >
                    <option value="blog">Blog</option>
                    <option value="article">Article</option>
                  </select>
                  <?php echo form_error("type");?>

                </div>
              </div>
       <section class="content">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="box box-info">
                          <div class="box-header">
                            <h3 class="box-title">Contenu
                              <small>Ajouter le contenu de l'article</small>
                            </h3>
                            <!-- tools box -->
                            
                            <!-- /. tools -->
                          </div>
                          <!-- /.box-header -->
                          <div class="box-body pad">
                                  <textarea id="editor1" rows="10" cols="80" name="contenu">
                                                         Saisissez le contenu ici
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