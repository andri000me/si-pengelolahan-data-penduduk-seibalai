<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Informasi Detail Data Penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--Menampilkan data detail arsip-->
                    <?php
                    $sql = "SELECT *FROM tbl_penduduk WHERE Nik='" . $_GET ['id'] . "'";
                    //proses query ke database
                    $query = mysqli_query($koneksi, $sql) or die("SQL Detail error");
                    //Merubaha data hasil query kedalam bentuk array
                    $data = mysqli_fetch_array($query);
                    ?>   

                    <!--dalam tabel--->
                    <table class="table table-bordered table-striped table-hover"> 
                        <tr>
                            <td width="200">Nik</td> <td><?= $data['Nik'] ?></td>
                        </tr>
                        <tr>
                            <td>Nama</td> <td><?= $data['nama'] ?></td>
                        </tr>
                        
						<tr>
                            <td>Jenis_kelamin</td> <td><?= $data['jenis_kelamin'] ?></td>
                        </tr>
                        <tr>
                            <td>Agama</td> <td><?= $data['Agama'] ?></td>
                        </tr>
						<tr>
                            <td>Alamat</td> <td><?= $data['alamat'] ?></td>
                        </tr>
                        <tr>
                            <td>Status</td> <td><?= $data['status'] ?></td>
                        </tr>
                        <tr>
                            <td>Pekerjaan</td> <td><?= $data['pekerjaan'] ?></td>
                        </tr>
                    </table>
				
                </div> <!--end panel-body-->
                <!--panel footer--> 
                <div class="panel-footer">
                    <a href="?page=penduduk&actions=tampil" class="btn btn-success btn-sm">
                        Kembali ke Data Penduduk </a>

                </div>
                <!--end panel footer-->
            </div>

        </div>
    </div>
</div>

