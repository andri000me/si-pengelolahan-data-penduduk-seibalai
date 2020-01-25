<!DOCTYPE html>
<html>
    <head>
        <title>Cetak Data Arsip</title>
        <link href="../Assets/css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
    </head>  
    <body onload="print()">
        <!--Menampilkan data detail arsip-->
        <?php
        include '../config/koneksi.php';
        $sql = "SELECT * FROM tbl_penduduk WHERE nik='" . $_GET ['id'] . "'";
        //proses query ke database
        $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
        //Merubaha data hasil query kedalam bentuk array
        $data = mysqli_fetch_array($query);
        ?>   

        <div class="container">
            <div class='row'>
                <div class="col-sm-12">
                    <!--dalam tabel--->
                    <div class="text-left">
                        <h2><center>Sistem Informasi Pengolahan Data Penduduk<center></h2>
                        <h4><center>Jl. Lintas Sumatera No. 169, Kota Sei Balai<br> Sei Balai, Kabupaten Batu Bara, Sumatera Utara, 21252</h4></center>
                        <hr>
                        <h3><center>DATA ARSIP</center></h3>
                        <table class="table table-bordered table-striped table-hover"> 
                            <tbody>
								<tr>
                                    <td>NIK</td> <td><?= $data['nik'] ?></td>
                                </tr>
                                <tr>
                                    <td>Nama</td> <td><?= $data['nama'] ?></td>
                                </tr>
                                <tr>
                                    <td>Jenis Kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                                </tr>
                                <tr>
                                    <td>Agama</td> <td><?= $data['Agama'] ?></td>
                                </tr>
								<tr>
                                    <td>Status</td> <td><?= $data['status'] ?></td>
                                </tr>
								<tr>
                                    <td>Pekerjaan</td> <td><?= $data['pekerjaan'] ?></td>
                                </tr>
                            </tbody>
                            <tfoot> 
                                <tr>
                                    <td colspan="2" class="text-right">
                                        Sei Balai  <?= date("d-m-Y") ?>
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