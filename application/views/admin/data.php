<div class="container-fluid">


    <h1 class="h3 mb-0 text-gray-800 mb-3"><strong>Program Kerja Dikrektorat</strong></h1>
    <table class="table table-stripped">
        <tr>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">Tanggal</th>
            <th style="text-align: center;">Pencapaian Target</th>
            <th style="text-align: center;">Nilai Aset</th>
            <th style="text-align: center;">Tingkat Maturitas</th>
            <th style="text-align: center;">Aksi</th>
        </tr>

        <?php $no = 1;
        foreach($data as $dt) : ?>
        <tr>
            <td style="text-align: center;"><?php echo $no++ ?></td>
            <td style="text-align: center;"><?php echo $dt->tanggal ?></td>
            <td style="text-align: center;"><?php echo $dt->pencapaian_target ?>%</td>
            <td style="text-align: center;">Rp. <?php echo number_format($dt->nilai_aset, 0,',','.') ?></td>
            <td style="text-align: center;">Lv. <?php echo $dt->tingkat_maturitas ?></td>
            <td style="text-align: center;"><?php echo anchor('admin/admin/detail/'.$dt->id, '<div class="btn btn-info btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
            </tr>

        <?php endforeach;?>
    </table>

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-download fa-plus"></i> Tambah Info</button>
    </div>

    <!-- Modal -->
<div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Info</h1>
      </div>
      <div class="modal-body">

      <table class="table table-bordered table-striped">
      <form method="post" action="<?php echo base_url().'direktur/informasi'; ?>">

      <div class="form-row">

        <div class="form-group col-md-6">
            <label for="nomor" class="col-form-label">Nama</label>
            <input type="text" class="form-control" id="progress" name="nama">
        </div>

        <div class="form-group col-md-6">
            <label for="nomor" class="col-form-label">Tanggal</label>
            <input type="date" class="form-control" id="progress" name="tanggal">
        </div>
        
        <div class="form-group col-md-12">
            <label for="nomor" class="col-form-label">Keterangan</label>
            <input type="text" class="form-control" id="progress" name="deskripsi">
        </div>

        
        <div class="modal-footer">
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </div>
    </form>
    </table>

<!-- Bootstrap core JavaScript-->
<script src="http://localhost/pkl/assets/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/pkl/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<!-- Core plugin JavaScript-->
<script src="http://localhost/pkl/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="http://localhost/pkl/assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="http://localhost/pkl/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="http://localhost/pkl/assets/js/demo/chart-area-demo.js"></script>
<script src="http://localhost/pkl/assets/js/demo/chart-pie-demo.js"></script>
<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>
    
        </section>