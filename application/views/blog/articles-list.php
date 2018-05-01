
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <section class="content-header">
      <h1>
       Liste des Articles
        <small>MBOAHOST</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Accueil</a></li>
        <li><a href="#">Liste des Articles </a></li>
        <li class="active">liste</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
        
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Liste des Articles</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <a class="btn btn-app bg-olive" href="<?= base_url()?>blog/Article_view">
                <i class="fa fa-plus"></i> Ajouter
              </a>
              <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Titre</th>
                  <th>Catégorie</th>
                  <th>Extrait</th>
                  <th>Date de création</th>
                  <th>Actions</th>
                </tr>
                </thead>
                <tbody>
                  <?php if ($liste != Null): $i = 0 ?>
                  <?php foreach ($liste as $agent => $value): ?>
                <tr>
                  <td><?php echo $liste[$i]->titre ;?></td>
                  <td><?php echo $liste[$i]->categorie ;?></td>
                  <td><?php echo $liste[$i]->extrait ;?></td>
                  <td><?php echo $liste[$i]->created_at ;?></td>
                  <td>
                    <div class="btn-group">
                  <button type="button" class="btn btn-danger btn-sm"><i class="fa fa-trash-o" style="margin-right: 7px;"></i></button>
                  <button type="button" class="btn btn-default btn-sm "><i class="fa fa-edit" style="margin-right: 7px;"></i></button>
                  <button type="button" class="btn btn-default btn-sm "><i class="fa fa-eye" style="margin-right: 7px;"></i></button>
                  <button type="button" class="btn btn-success btn-sm "><i class="fa  fa-check-square" style="margin-right: 7px;"></i></button>
                </div>
              </td>
                </tr>
                <?php $i = $i +1 ?>
               <?php endforeach; ?>
             <?php endif; ?>
                </tbody>
                <tfoot>
                <tr>
                  <th>Noms</th>
                  <th>Description</th>
                  <th>Date de création</th>
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