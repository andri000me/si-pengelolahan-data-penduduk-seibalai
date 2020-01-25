<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Form Tambah Data Penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                       
						 <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nik" class="form-control" id="inputEmail3" placeholder="Inputkan nik penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan nama Penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">jenis_kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" class="form-control" id="inputEmail3" placeholder="Inputkan jenis_kelamin penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="Agama" class="form-control" id="inputEmail3" placeholder="Inputkan Agama penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan alamat penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" class="form-control" id="inputEmail3" placeholder="Inputkan status Penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="no_rak" class="col-sm-3 control-label">pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pekerjaan" class="form-control" id="inputEmail3" placeholder="Inputkan pekerjaan penduduk" required>
                            </div>
                        </div>
						 
                        

                        <div class="form-group">
                            <div class="col-sm-offset-3 col-sm-9">
                                <button type="submit" class="btn btn-success">
                                    <span class="fa fa-save"></span> Simpan Data</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div class="panel-footer">
                    <a href="?page=penduduk&actions=tampil" class="btn btn-danger btn-sm">
                        Kembali Ke Data Penduduk
                    </a>
                </div>
            </div>

        </div>
    </div>
</div>

<?php
if($_POST){
    //Ambil data dari form
  $Nik=$_POST['Nik'];
	$nama=$_POST['nama'];
	$jenis_kelamin=$_POST['jenis_kelamin'];
	$Agama=$_POST['Agama'];
  $alamat=$_POST['alamat'];
	$status=$_POST['status'];
  $pekerjaan=$_POST['pekerjaan'];
    //buat sql
    $sql="INSERT INTO tbl_penduduk VALUES ('$Nik','$nama','$jenis_kelamin','$Agama','$alamat','$status','$pekerjaan')";
    $query=  mysqli_query($koneksi, $sql) or die ("SQL Simpan Data Error");
    if ($query){
        echo "<script>window.location.assign('?page=penduduk&actions=tampil');</script>";
    }else{
        echo "<script>alert('Simpan Data Gagal');<script>";
    }
    }

?>
