<?php
include("adm_header.php")
?>
<?php
$judul      ="";
$isi        ="";
$error      ="";
$sukses     ="";
if(isset($_POST['simpan'])){
    $judul  = $_POST['judul'];
    $isi    = $_POST['isi'];

    if($judul == '' or $isi == ''){
        $error  = "Silahkan masukkan semua data yakni Judul dan Isi.";
    }

    if(empty($error)){
        $sql1   ="insert into halaman(judul,isi) values('$judul','$isi')";
        $q1   =mysqli_query($koneksi, $sql1);
        if($q1){
            $sukses     = "Sukses memasukkan data";
        }else{
            $error      = "Gagal memasukkan data";
        }
    }
}
?>
<h1>Halaman Admin Input Data</h1>
<div class="mb-3 row">
    <a href="home_admin.php"><<--Kembali ke halaman Admin</a>
</div>
<?php
if($error){
    ?>
    <div class="alert alert-danger" role="alert">
 <?php echo $error ?>
</div>
<?php
}
?>
<?php
if($sukses){
    ?>
    <div class="alert alert-primary" role="alert">
 <?php echo $sukses ?>
</div>
<?php
}
?>
<form action="" method="post">
<div class="mb-3 row">
    <label for="judul" class="col-sm-2 col-form-label">Judul</label>
    <div class="col-sm-10">
      <input type="text" class="form-control-plaintext" id="judul" value="<?php echo $judul ?>" name="judul">
    </div>
  </div>
  <div class="mb-3 row">
    <label for="isi" class="col-sm-2 col-form-label">Isi</label>
    <div class="col-sm-10">
      <textarea type="text" class="form-control-plaintext" name="isi" id="summernote"<?php echo $isi ?>></textarea>
    </div>
  </div>
  <div class="mb-3 row">
    <div class="col-sm-2"></div>
    <div class="col-sm-10">
      <input type="submit" name="simpan" value="Simpan Data" class="btn btn-primary">
    </div>
  </div>
</form>
<script>
      $(document).ready(function() {
  $('#summernote').summernote({
    callbacks: {
        onImageUpload: function(files){
            for(let i = 0; i < files.length; i++){
                $.upload(files[i]);
            }
        }
    },
    height:200
  });
  $.upload = function (file) {
        let out = new FormData();
        out.append('file', file, file.name);

        $.ajax({
            method: 'POST',
            url: 'upload_gambar.php',
            contentType: false,
            cache: false,
            processData: false,
            data: out,
            success: function (img) {
                $('#summernote').summernote('insertImage', img);
            },
            error: function (jqXHR, textStatus, errorThrown) {
                console.error(textStatus + " " + errorThrown);
            }
        });
}
});
    </script>