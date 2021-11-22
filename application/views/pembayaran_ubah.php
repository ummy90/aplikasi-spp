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
                  <?php foreach ($pembayaran->result() as $value): ?>
                  <form class="formhorizontal" method="post" action="<?php echo base_url('pembayaran/update') ?>">
                  <div class="card-body">
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID Pembayaran</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" value="<?php echo $value->id_pembayaran; ?>" disabled>
                            </div>
                            <input type="hidden" class="form-control" name="id_pembayaran" value="<?php echo $value->id_pembayaran; ?>">
                          </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID Petugas</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_petugas" value="<?php echo $value->id_petugas; ?>" placeholder="ID Petugas" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">NISN</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="nisn" value="<?php echo $value->nisn; ?>" placeholder="NISN" required>
                            </div>
                            </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Tanggal Bayar</label>
                            <div class="col-sm-8">
                              <input type="date" class="form-control" name="tgl_bayar" value="<?php echo $value->tgl_bayar; ?>" placeholder="Tanggal Bayar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Bulan Dibayar</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="bulan_dibayar" value="<?php echo $value->bulan_dibayar; ?>" placeholder="Bulan Dibayar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Tahun Dibayar</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="tahun_dibayar" value="<?php echo $value->tahun_dibayar; ?>" placeholder="Tahun Dibayar" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">ID SPP</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="id_spp" value="<?php echo $value->id_spp; ?>" placeholder="ID SPP" required>
                            </div>
                        </div>
                        <div class="form-group row">
                          <label class="col-sm-2 col-form-label">Jumlah Dibayar</label>
                            <div class="col-sm-8">
                              <input type="text" class="form-control" name="jumlah_dibayar" value="<?php echo $value->jumlah_dibayar; ?>" placeholder="Jumlah Dibayar" required>
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