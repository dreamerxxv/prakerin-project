<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table style="width: 100%">
	<tr>
		<th><img src="<?php echo base_url()?>assets/img/logo1.png" style="width: 80px"></th>
		<td style="width: 75%; text-align: center; padding-top: -80px">
			<b class="text-gray-800" style="font-size: 15.5px">KEMENTERIAN PERHUBUNGAN</b><br>
			<b class="text-gray-800" style="font-size: 16.5px">DIREKTORAT JENDERAL PERHUBUNGAN UDARA</b>
		</td>
	</tr>
    </table>

    <table style="width: 100%; margin-top: -10px">
	<tr>
		<td style="padding: 5px; width: 26%"></td>
		<td class="text-gray-800" style="font-size:12px; padding: 5px; border-right: 1px solid #000; width: 28%">
			Jalan Merdeka Barat No.8<br>Jakarta<br>Kotak Pos No. 1389<br>Jakarta 10013
		</td>
		<td class="text-gray-800" style="font-size:12px; padding: 5px; padding-top: -15px; border-right: 1px solid #000; width: 28%">
			Telpon : (021) 3505006 - 3505550 <br> (021) 3506451 - 3506554
		</td>
		<td class="text-gray-800" style="font-size:12px; padding: 5px; padding-top: -15px; width: 18%">
			Fax : (021) 3507569
		</td>
	</tr>
    </table>
    <hr>

    <table class="mt-5 mb-3" style="width: 100%">
	<tr>
		<td style="width: 75%; text-align: center; padding-top: -80px">
			<b class="text-gray-800" style="font-size: 15.5px">PERJANJIAN KINERJA TAHUN 2022</b><br>
			<b class="text-gray-800" style="font-size: 16.5px">DIREKTORAT NAVIGASI PENERBANGAN</b>
		</td>
	</tr>
    </table>

    <div class="container-fluid">
    <table class="table">
            <tr>
                <th>Oleh</th>
                <td>Direktorat Navigasi Penerbangan</td>
            </tr>
            <tr>
                <th>Indikator Keselamatan</th>
                <td><?php echo $print_dt->indikator_keselamatan?>%</td>
            </tr>
            <tr>
                <th>Penyusunan Dokumen</th>
                <td><?php echo $print_dt->penyusunan_dokumen?>%</td>
            </tr>
            <tr>
                <th>Realisasi Anggaran</th>
                <td><?php echo $print_dt->realisasi_anggaran?>%</td>
            </tr>
            <tr>
            <tr>
                <th>Pencapaian Target PNBP</th>
                <td><?php echo $print_dt->pencapaian_target?>%</td>
            </tr>
            <tr>
                <th>Nilai Asset</th>
                <td>Rp. <?php echo number_format($print_dt->nilai_aset, 0,',','.')?></td>
            </tr>
            <tr>
                <th>Tingkat Maturitas</th>
                <td>Lv.<?php echo $print_dt->tingkat_maturitas?></td>
            </tr>
            <tr>
                <th>Tanggal Pelaksanaan</th>
                <td><?php echo $print_dt->tanggal?></td>
            </tr>

        </table>

    <script type="text/javascript">
        window.print();
    </script>
    </div>
</body>
</html>