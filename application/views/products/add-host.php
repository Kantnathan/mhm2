<div class="content-wrapper">
   <?php if (isset($single)): $j = 0?>
              <?php  foreach ($single as $key => $value ): ?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Produit Hébergement modification
        <small>Ajout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Gestion des produits</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Hébergement</li>
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
              <h3 class="box-title"><?= $single[$j]->nom ;?></h3>
            </div>
            <!-- /.box-header -->
               <?php echo form_open("Hebergement_web_pour_developpeur/add_host");?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="name">Nom de l'espace</label>
                  <input type="text" class="form-control"  placeholder="Nom de l'espace" name="name" value="<?= $single[$j]->nom ;?>">
                 <?php echo "<p style=\"color: red;\">"; echo form_error('name'); echo "</p>"; ?>
                </div>

                <div class="form-group">
                  <label for="disque">Capacité disque</label>
                  <input type="number" class="form-control" id="disque" placeholder="Capacité disque" name="disque" value="<?= $single[$j]->disque ;?>">
                </div>
                <div class="form-group">
                  <label for="prix">Prix de l'espace</label>
                  <input type="number" class="form-control" id="prix" placeholder="Prix " name="prix" value="<?= $single[$j]->prix ;?>">
                </div>
                <div class="form-group">
                  <label for="nb_sous_domaine">Nombre de sous domaine</label>
                  <input type="text" class="form-control"  placeholder="Sous domaine" name="nb_sous_domaine" value="<?= $single[$j]->sous_domaines ;?>">
                </div>
                <div class="form-group">
                  <label for="ftp">Nombre de compte ftp</label>
                  <input type="text" class="form-control"  placeholder="compte ftp" name="ftp" value="<?= $single[$j]->comptes_ftp ;?>">
                </div>
                <div class="form-group">
                  <label for="bd">Nombre de base de données</label>
                  <input type="number" class="form-control" id="bd" placeholder="Base de Données" name="bd" value="<?= $single[$j]->bases_donnees ;?>">
                </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                  <label for="nb_email">Nombre d'adresse email</label>
                  <input type="text" class="form-control"  placeholder="Nombre d'adresse email" name="nb_email" value="<?= $single[$j]->adresses_email ;?>">
                </div>
                <div class="form-group">
                  <label for="st_email">Capacite de stockage email</label>
                  <input type="text" class="form-control"  placeholder="Stockage email" name="st_email" value="<?= $single[$j]->stockage_email ;?>">
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
                  <label for="bp">Capacité bande passante</label>
                  <input type="text" class="form-control"  placeholder="Bande passante" name="bp" value="<?= $single[$j]->bande_passante ;?>">
                </div>
                <div class="form-group">
                  <label for="pjointes">Capacité pièces jointes</label>
                  <input type="text" class="form-control"  placeholder="Taille pièces jointes" name="pjointes" value="<?= $single[$j]->pieces_jointes ;?>">
                </div>
                 <div class="form-group">
                  <label for="siteweb">Nombre des sites web</label>
                  <input type="text" class="form-control"  placeholder="Nombre des sites web" name="siteweb" value="<?= $single[$j]->site_web ;?>">
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
     <?php $i = $i +1 ;?>
                <?php endforeach ;?>
                <?php else :;?>
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Produit Hébergement
        <small>Ajout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Gestion des produits</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Hébergement</li>
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
              <h3 class="box-title">Extension</h3>
            </div>
            <!-- /.box-header -->
               <?php echo form_open("Hebergement_web_pour_developpeur/add_host");?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="name">Nom de l'espace</label>
                  <input type="text" class="form-control"  placeholder="Nom de l'espace" name="name">
                 <?php echo "<p style=\"color: red;\">"; echo form_error('name'); echo "</p>"; ?>
                </div>

                <div class="form-group">
                  <label for="disque">Capacité disque</label>
                  <input type="number" class="form-control" id="disque" placeholder="Capacité disque" name="disque">
                </div>
                <div class="form-group">
                  <label for="prix">Prix de l'espace</label>
                  <input type="number" class="form-control" id="prix" placeholder="Prix " name="prix">
                </div>
                <div class="form-group">
                  <label for="nb_sous_domaine">Nombre de sous domaine</label>
                  <input type="text" class="form-control"  placeholder="Sous domaine" name="nb_sous_domaine">
                </div>
                <div class="form-group">
                  <label for="ftp">Nombre de compte ftp</label>
                  <input type="text" class="form-control"  placeholder="compte ftp" name="ftp">
                </div>
                <div class="form-group">
                  <label for="bd">Nombre de base de données</label>
                  <input type="number" class="form-control" id="bd" placeholder="Base de Données" name="bd">
                </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                  <label for="nb_email">Nombre d'adresse email</label>
                  <input type="text" class="form-control"  placeholder="Nombre d'adresse email" name="nb_email">
                </div>
                <div class="form-group">
                  <label for="st_email">Capacite de stockage email</label>
                  <input type="text" class="form-control"  placeholder="Stockage email" name="st_email">
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
                  <label for="bp">Capacité bande passante</label>
                  <input type="text" class="form-control"  placeholder="Bande passante" name="bp">
                </div>
                <div class="form-group">
                  <label for="pjointes">Capacité pièces jointes</label>
                  <input type="text" class="form-control"  placeholder="Taille pièces jointes" name="pjointes">
                </div>
                 <div class="form-group">
                  <label for="siteweb">Nombre des sites web</label>
                  <input type="text" class="form-control"  placeholder="Nombre des sites web" name="siteweb">
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
    <?php endif ;?>
    <!-- /.content -->
  </div>