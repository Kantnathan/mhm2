<div class="content-wrapper">
    <!-- Content Header (Page header) -->
     <?php if (isset($single)): $j = 0?>
              <?php  foreach ($single as $key => $value ): ?>
    <section class="content-header">
      <h1>
        Modification nom de domaine
        <small>Update</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Gestion des produits</a></li>
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
              <h3 class="box-title"><?php echo $single[$j]->extension ;?></h3>
            </div>
            <!-- /.box-header -->
               <?php echo form_open("Hebergement_web_pour_developpeur/update_domain");?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="extension">Extension de domaine</label>
                  <input type="text" class="form-control"  placeholder="Exemple : .com" name="extension" value="<?php echo $single[$j]->extension ;?>">
                  <input type="hidden" class="form-control" name="id"  value="<?php echo $single[$j]->id ;?>">
                 <?php echo "<p style=\"color: red;\">"; echo form_error('extension'); echo "</p>"; ?>
                </div>

                <div class="form-group">
                  <label for="prix">Prix de l'extension</label>
                  <input type="number" class="form-control" id="prix" placeholder="Prix de l'extension" name="prix" value="<?php echo $single[$j]->prix ;?>">
                </div>
                <div class="form-group">
                  <label for="prix_renouv">Prix du renouvellement</label>
                  <input type="number" class="form-control" id="prix_renouv" placeholder="Prix du renouvellement" name="prix_renouv" value="<?php echo $single[$j]->prix_renouv ;?>">
                </div>
                <div class="form-group">
                  <label for="prix_transfert">Prix de transfert</label>
                  <input type="text" class="form-control"  placeholder="Prix de transfert " name="prix_transfert" value="<?php echo $single[$j]->prix_xfer ;?>">
                </div>
                
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
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                  <label for="api">API</label>
                  <select class="form-control" name="api">
                    <?php if ($apis != NULL): $i = 0?>
                            <?php  foreach ($apis as $key => $value ): ?>
                            <option value="<?php echo $value->name ;?>"><?php echo $value->name ;?></option>
                            <?php $i = $i +1 ;?>
                           <?php endforeach ;?>
                    <?php endif ;?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Conditions</label>
                  <textarea class="form-control" rows="5" placeholder="Entrer ..." name="condition">
                    <?php echo $single[$j]->conditions ;?>
                  </textarea>
                </div>
                <div class="form-group">
                  <label>Description de l'extension</label>
                  <textarea class="form-control" rows="5" placeholder="Entrer ..." name="desc">
                    <?php echo $single[$j]->description ;?>
                  </textarea>
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
                  <section class="content-header">
      <h1>
        Produit nom de domaine
        <small>Ajout</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Gestion des produits</a></li>
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
              <h3 class="box-title">Extension</h3>
            </div>
            <!-- /.box-header -->
               <?php echo form_open("Hebergement_web_pour_developpeur/add_domain");?>
              <div class="box-body">
                <div class="col-md-6">
                  <div class="form-group">
                  <label for="extension">Extension de domaine</label>
                  <input type="text" class="form-control"  placeholder="Exemple : .com" name="extension">
                 <?php echo "<p style=\"color: red;\">"; echo form_error('extension'); echo "</p>"; ?>
                </div>

                <div class="form-group">
                  <label for="prix">Prix de l'extension</label>
                  <input type="number" class="form-control" id="prix" placeholder="Prix de l'extension" name="prix">
                </div>
                <div class="form-group">
                  <label for="prix_renouv">Prix du renouvellement</label>
                  <input type="number" class="form-control" id="prix_renouv" placeholder="Prix du renouvellement" name="prix_renouv">
                </div>
                <div class="form-group">
                  <label for="prix_transfert">Prix de transfert</label>
                  <input type="text" class="form-control"  placeholder="Prix de transfert " name="prix_transfert">
                </div>
                
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
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                  <label for="api">API</label>
                  <select class="form-control" name="api">
                    <?php if ($apis != NULL): $i = 0?>
                            <?php  foreach ($apis as $key => $value ): ?>
                            <option value="<?php echo $value->name ;?>"><?php echo $value->name ;?></option>
                            <?php $i = $i +1 ;?>
                           <?php endforeach ;?>
                    <?php endif ;?>
                  </select>
                </div>
                <div class="form-group">
                  <label>Conditions</label>
                  <textarea class="form-control" rows="5" placeholder="Entrer ..." name="condition"></textarea>
                </div>
                <div class="form-group">
                  <label>Description de l'extension</label>
                  <textarea class="form-control" rows="5" placeholder="Entrer ..." name="desc"></textarea>
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