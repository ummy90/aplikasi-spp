<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            </ol>
          </div><!-- /.col -->
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
                  <?php foreach ($siswa->result() as $value): ?>
                  <form class="formhorizontal" method="post" action="<?php echo base_url('siswa/update') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $value->nisn; ?>" disabled>
                            </div>
                            <input type="hidden" class="form-control" name="nisn" value="<?php echo $value->nisn; ?>">
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">NIS</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nis" value="<?php echo $value->nis; ?>" placeholder="nis" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Nama</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nama" value="<?php echo $value->nama; ?>" placeholder="nama" required>
                            </div>
                            </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID Kelas</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_kelas" value="<?php echo $value->id_kelas; ?>" placeholder="id_kelas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Alamat</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="alamat" value="<?php echo $value->alamat; ?>" placeholder="Alamat" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">No Telp</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="no_telp" value="<?php echo $value->no_telp; ?>" placeholder="No Telp" required>
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