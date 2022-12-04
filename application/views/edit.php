<div class="container-fluid">
    <h3> <i class="fas fa-edit"></i> Edit Data Proker</h3>
    <?php foreach($direktur as $drk) {?>

        <form method="post" action="<?php echo base_url().'direktur/update'; ?>">

        <div class="form-row">
        <div class="form-group col-md-5">
            <label for="nomor" class="col-form-label">Presantase Ruang Udara (%)</label>
            <input type="number" class="form-control" name="ruang_udara" placeholder="Ex: 45"  value="<?php echo $drk->ruang_udara ?>">
        </div>

        <div class="form-group col-md-5">
            <label for="nomor" class="col-form-label">Indikator Keselamatan (%)</label>
            <input type="number" class="form-control" name="indikator_keselamatan" placeholder="Ex: 45"  value="<?php echo $drk->indikator_keselamatan ?>">
            <input type="hidden" name="id" class="form-control" value="<?php echo $drk->id ?>">
        </div>

        <div class="form-group col-md-5">
            <label for="nomor" class="col-form-label">Penyusunan Dokumen (%)</label>
            <input type="number" class="form-control" name="penyusunan_dokumen" placeholder="Ex: 45"  value="<?php echo $drk->penyusunan_dokumen ?>">
        </div>

        <div class="form-group col-md-5">
            <label for="nomor" class="col-form-label">Realisasi Anggaran (%)</label>
            <input type="number" class="form-control" name="realisasi_anggaran" placeholder="Ex: 45"  value="<?php echo $drk->realisasi_anggaran ?>">
        </div>

        <div class="form-group col-md-5">
            <label for="nomor" class="col-form-label">Pencapaian Target PNBP (%)</label>
            <input type="number" class="form-control" name="pencapaian_target" placeholder="Ex: 45"  value="<?php echo $drk->pencapaian_target ?>">
        </div>

        <div class="form-group col-md-5">
            <label for="nomor" class="col-form-label">Nilai Aset (Rupiah)</label>
            <input type="number" class="form-control" name="nilai_aset" placeholder="Ex: 45"  value="<?php echo $drk->nilai_aset ?>">
        </div>

        <div class="form-group col-md-5">
            <label for="nomor" class="col-form-label">Tingkat Maturitas Penyelenggaraan SPIP (Level)</label>
            <input type="number" class="form-control" name="tingkat_maturitas" placeholder="Ex: 45"  value="<?php echo $drk->tingkat_maturitas ?>">
        </div>

        <div class="form-group col-md-5">
            <label for="tanggal" class="col-form-label">Tanggal</label>
            <input type="date" class="form-control" name="tanggal" placeholder="Ex: 45"  value="<?php echo $drk->tanggal ?>">
        </div>
    </div>
<button type="submit" class="btn btn-info btn-sm mt-3">Simpan</button>


    </form>
        <?php } ?>
</div>