<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url() ?>assets/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="<?php echo base_url() ?>assets/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<div class="container-fluid">
    <section class="content">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800"><strong>Detail Data</strong></h1>
            <?php echo anchor('direktur/print_dt/', '<div class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Print Laporan</div>') ?>
    </div>
        
        <table class="table">
            <tr>
                <th>Oleh</th>
                <td>Direktorat Navigasi Penerbangan</td>
            </tr>
            <tr>
                <th>Indikator Keselamatan</th>
                <td><?php echo $detail->indikator_keselamatan?>%</td>
            </tr>
            <tr>
                <th>Penyusunan Dokumen</th>
                <td><?php echo $detail->penyusunan_dokumen?>%</td>
            </tr>
            <tr>
                <th>Realisasi Anggaran</th>
                <td><?php echo $detail->realisasi_anggaran?>%</td>
            </tr>
            <tr>
            <tr>
                <th>Pencapaian Target PNBP</th>
                <td><?php echo $detail->pencapaian_target?>%</td>
            </tr>
            <tr>
                <th>Nilai Asset</th>
                <td>Rp. <?php echo number_format($detail->nilai_aset, 0,',','.')?></td>
            </tr>
            <tr>
                <th>Tingkat Maturitas</th>
                <td>Lv.<?php echo $detail->tingkat_maturitas?></td>
            </tr>
            <tr>
                <th>Tanggal Pelaksanaan</th>
                <td><?php echo $detail->tanggal?></td>
            </tr>

        </table>
    </section>
</div>
</html>