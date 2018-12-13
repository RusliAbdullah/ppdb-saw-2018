 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>
<?php 
if(!empty($id)||$id!=null):
    $sql="select * from kriteria where id_kriteria=".$id;
    
// else:

    $query=$koneksi->query($sql);
    $data=$query->fetch_assoc();
endif;
// print_r($data);
 ?>

<form action="kriteria.php?a=save" method="POST" role="form">
    <legend>Form Kriteria</legend>
    <input type="hidden" name="form" value="siswa">
    <input type="hidden" name="id_kriteria" value="<?php echo (!empty($data['id_kriteria'])?$data['id_kriteria']:''); ?>">
    <div class="row">
        <div class="col-5">
            <div class="form-group">
                <label for="nama_kriteria">Nama Kriteria</label>
                <input name="nama_kriteria" type="text" class="form-control" id="nama_kriteria" required placeholder="Masukkan Nama Kriteria" value="<?php echo (!empty($data['nama_kriteria'])?$data['nama_kriteria']:''); ?>">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="kode_kriteria">Kode Kriteria</label>
                <input name="kode_kriteria" type="text" class="form-control" id="kode_kriteria" required placeholder="Masukkan Kode Kriteria" value="<?php echo (!empty($data['kode_kriteria'])?$data['kode_kriteria']:''); ?>">
            </div>
        </div>
   
        <div class="col">
            <div class="form-group">
                <label for="bobot_masuk">Bobot Masuk</label>
                <input name="bobot_masuk" type="text" class="form-control" id="bobot_masuk" required placeholder="Masukkan Bobot Masuk" value="<?php echo (!empty($data['bobot_masuk'])?$data['bobot_masuk']:''); ?>">
            </div>
        </div>
       
  
        <div class="col">
            <div class="form-group">
                <label for="bobot_ipa">Bobot IPA</label>
                <input name="bobot_ipa" type="text" class="form-control" id="bobot_ipa" placeholder="Masukkan Bobot IPA" value="<?php echo (!empty($data['bobot_ipa'])?$data['bobot_ipa']:''); ?>">
            </div>
        </div>
    </div>
    <button name="<?php echo !empty($kriteriaid)?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
    <a href="siswa.php" class="btn btn-warning">Batal</a>
</form>