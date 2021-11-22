<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

  <!-- Main content -->
  <div class="content">
      <div class="container-fluid">
        <div class="row"> 
          <div class="col-lg-12">
            <div class="card card-primary card-success">
              <div class="card-header">
                <h5 class="m-0"><?php echo $title; ?></h5>
              </div>
              </div>
              <?php foreach ($petugas->result() as $value): ?>
                  <form class="formhorizontal" method="post" action="<?php echo base_url('petugas/update') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Username</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $value->username; ?>" disabled>
                            </div>
                          <input type="hidden" class="form-control" name="id_petugas" value="<?php echo $value->id_petugas; ?>">
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Password</label>
                            <div class="col-sm-8">
                                <input type="password" class="form-control" name="password" placeholder="Password" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Nama Petugas</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nama_petugas" value="<?php echo $value->nama_petugas; ?>" placeholder="Nama Petugas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label">Level</label>
                            <div class="col-sm-4">
                                <select class="form-control" style="width: 100%;" name="level" required>
                                <option value="<?php echo $value->level ?>" selected><?php listLevel($value->level) ?></option>
                                <option value="1">Administrator</option>
                                <option value="2">Petugas</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-sm btn-success">Simpan</button>
                        <button type="reset" class="btn btn-sm btn-default">Reset</button>
                    </div>
                </form>
              <?php endforeach; ?>

      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
