<div class="container-wrapper">
<div class="container-fluid">
    
    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm" id="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
            <i class="fas fa-download fa-plus"></i> Tambah Data</button>
    </div>


    <table class="table table-stripped">
        <tr>
            <th style="text-align: center;">No</th>
            <th style="text-align: center;">Tanggal</th>
            <th style="text-align: center;">Pencapaian Target</th>
            <th style="text-align: center;">Nilai Aset</th>
            <th style="text-align: center;">Tingkat Maturitas</th>
            <th colspan="3" style="text-align: center;">Aksi</th>
        </tr>

        <?php $no = 1;
        foreach($direktur as $drk) : ?>
        <tr>
            <td style="text-align: center;"><?php echo $no++ ?></td>
            <td style="text-align: center;"><?php echo $drk->tanggal ?></td>
            <td style="text-align: center;"><?php echo $drk->pencapaian_target ?>%</td>
            <td style="text-align: center;">Rp. <?php echo number_format($drk->nilai_aset, 0,',','.') ?></td>
            <td style="text-align: center;">Lv. <?php echo $drk->tingkat_maturitas ?></td>
            <td><?php echo anchor('direktur/detail/'.$drk->id, '<div class="btn btn-info btn-sm"><i class="fas fa-search-plus"></i></div>') ?></td>
            <td class="ml-3"><?php echo anchor('direktur/edit/'.$drk->id, '<div class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></div>') ?></td>
            <td class="ml-3"><?php echo anchor('direktur/hapus/'.$drk->id, '<div class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></div>') ?></td>
            <td><?php echo $this->session->flashdata('message')?></td>
        </tr>

        <?php endforeach;?>
    </table>
    </section>

<!-- Modal -->
<div class="modal fade" id="exampleModal" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Tambah Data</h1>
      </div>
      <div class="modal-body">

      <table class="table table-bordered table-striped">
      <form method="post" action="<?php echo base_url().'direktur/tambah_aksi'; ?>">

      <div class="form-row">
      <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Presantase Ruang Udara (%)</label>
            <input type="number" class="form-control" id="progress" name="ruang_udara" placeholder="Ex: 45" max="100">
        </div>

        <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Indikator Keselamatan (%)</label>
            <input type="number" class="form-control" id="progress" name="indikator_keselamatan" placeholder="Ex: 45" max="100">
        </div>

        <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Penyusunan Dokumen (%)</label>
            <input type="number" class="form-control" id="progress" name="penyusunan_dokumen" placeholder="Ex: 45" max="100">
        </div>

        <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Realisasi Anggaran (%)</label>
            <input type="number" class="form-control" id="progress" name="realisasi_anggaran" placeholder="Ex: 45" max="100">
        </div>

        <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Peencapaian Target PNBP (%)</label>
            <input type="number" class="form-control" id="progress" name="pencapaian_target" placeholder="Ex: 45" max="100">
        </div>
        
        <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Nilai Aset (Rupiah)</label>
            <input type="number" class="form-control" id="progress" name="nilai_aset" placeholder="Ex: 120000000" max="10000000000">
        </div>

        <div class="form-group col-md-8">
            <label for="nomor" class="col-form-label">Tingkat Maturitas Penyelenggaraan SPIP (Level)</label>
            <input type="number" class="form-control" id="progress" name="tingkat_maturitas" placeholder="Ex: 1.2.3" max="100">
        </div>

        <div class="form-group col-md-4">
            <label for="nomor" class="col-form-label">Tanggal</label>
            <input type="date" class="form-control" id="progress" name="tanggal">
        </div>

        
        <div class="modal-footer">
          <button type="reset" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          <button type="submit" class="btn btn-info">Simpan</button>
        </div>
      </div>
    </form>
    </table>

<!-- Bootstrap core JavaScript-->
<script src="http://localhost/codeigniter/assets/vendor/jquery/jquery.min.js"></script>
<script src="http://localhost/codeigniter/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

<!-- Core plugin JavaScript-->
<script src="http://localhost/codeigniter/assets/vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom scripts for all pages-->
<script src="http://localhost/codeigniter/assets/js/sb-admin-2.min.js"></script>

<!-- Page level plugins -->
<script src="http://localhost/codeigniter/assets/vendor/chart.js/Chart.min.js"></script>

<!-- Page level custom scripts -->
<script src="http://localhost/codeigniter/assets/js/demo/chart-area-demo.js"></script>
<script src="http://localhost/codeigniter/assets/js/demo/chart-pie-demo.js"></script>
<!-- JavaScript Bundle with Popper -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-u1OknCvxWvY5kfmNBILK2hRnQC3Pr17a+RTT6rIHI7NnikvbZlHgTPOOmMi466C8" crossorigin="anonymous"></script>

</div>