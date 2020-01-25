<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip Pertahun</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $ambilthn=$_POST['tahun'];

        ?>

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-center">
                        <h2>Sistem Informasi Pengolahan Data Penduduk </h2>
                        <h4>Jl. Lintas Sumatera No. 169, Kota Sei Balai<br> Sei Balai, Kabupaten Batu Bara, Sumatera Utara, 21252</h4>
                        <hr>
                        <h3>DATA ARSIP TAHUN   <? echo "$ambilthn"; ?></h3>
                        <table class="table table-bordered table-striped table-hover">
                        <tbody>
                <thead>
								<tr>
                                    <th>NIK</th><th>Nama</th><th>Jenis Kelamin</th><th>Agama<th>Alamat</th><th>Status</th><th>Pekerjaan</th>
								</tr>
								</thead>
							<tbody>
                            <!--ambil data dari database, dan tampilkan kedalam tabel-->
                            <?php
                            //buat sql untuk tampilan data, gunakan kata kunci select
                            $sql = "SELECT * FROM tbl_penduduk WHERE substr(tgl_masuk,1,4)='$ambilthn'";
                            $query = mysqli_query($koneksi, $sql) or die("SQL Anda Salah");
                            //Baca hasil query dari databse, gunakan perulangan untuk
                            //Menampilkan data lebh dari satu. disini akan digunakan
                            //while dan fungdi mysqli_fecth_array
                            //Membuat variabel untuk menampilkan nomor urut
                            $nomor = 0;
                            //Melakukan perulangan u/menampilkan data
                            while ($data = mysqli_fetch_array($query)) {
                                $nomor++; //Penambahan satu untuk nilai var nomor
                                ?>
                                <tr>
                                    <td><?= $data ['Nik'] ?></td>
                                    <td><?= $data['nama'] ?></td>
                                    <td><?= $data['jenis_kelamin'] ?></td>
                                    <td><?= $data['Agama'] ?></td>
                                    <td><?= $data['alamat'] ?></td>
                                    <td><?= $data['status'] ?></td>
                                    <td><?= $data['pekerjaan'] ?></td>
                                </tr>
                                <!--Tutup Perulangan data-->
                            <?php } ?>
							</tbody>
                        </tbody>

                            <tfoot>
                              <tr>
                                <td colspan="8" class="text-right">
                                        Sei Balai,  &nbsp <?= date("d-m-Y") ?>
                                        <br><br><br><br>
                                        <u>ADULLATIF LUTHFI PANJAITAN, S.Sos<strong></u><br>
                                        NIP.102801271436614
									             </td>
								</tr>
							</tfoot>
                        </table>
                    </div>
                </div>
            </div>
    </body>
</html>
