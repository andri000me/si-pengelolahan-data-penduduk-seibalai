<?php
$id=$_GET['id'];
$ambil=  mysqli_query($koneksi, "SELECT * FROM tbl_penduduk WHERE Nik='$id'") or die ("SQL Edit error");
$data= mysqli_fetch_array($ambil);
?>
<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Update Data Penduduk</h3>
                </div>
                <div class="panel-body">
                    <!--membuat form untuk tambah data-->
                    <form class="form-horizontal" action="" method="post">
                         <div class="form-group">
                            <label for="Nik" class="col-sm-3 control-label">Nik</label>
                            <div class="col-sm-9">
                                <input type="text" name="Nik" class="form-control" id="inputEmail3" placeholder="Inputkan nik penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="nama" class="col-sm-3 control-label">nama</label>
                            <div class="col-sm-9">
                                <input type="text" name="nama" class="form-control" id="inputEmail3" placeholder="Inputkan nama Penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin" class="col-sm-3 control-label">jenis_kelamin</label>
                            <div class="col-sm-9">
                                <input type="text" name="jenis_kelamin" class="form-control" id="inputEmail3" placeholder="Inputkan jenis_kelamin penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="Agama" class="col-sm-3 control-label">Agama</label>
                            <div class="col-sm-9">
                                <input type="text" name="Agama" class="form-control" id="inputEmail3" placeholder="Inputkan Agama penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat" class="col-sm-3 control-label">alamat</label>
                            <div class="col-sm-9">
                                <input type="text" name="alamat" class="form-control" id="inputEmail3" placeholder="Inputkan alamat penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="status" class="col-sm-3 control-label">status</label>
                            <div class="col-sm-9">
                                <input type="text" name="status" class="form-control" id="inputEmail3" placeholder="Inputkan status Penduduk" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="pekerjaan" class="col-sm-3 control-label">pekerjaan</label>
                            <div class="col-sm-9">
                                <input type="text" name="pekerjaan" class="form-control" id="inputEmail3" placeholder="Inputkan pekerjaan penduduk" required>
                            </div>
                        </div>
                        <!--end tanggal--> 
						
						<!--untuk tanggal lahir form tahun-bulan-tanggal 1998-10-10-->
                       
						
                      
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


