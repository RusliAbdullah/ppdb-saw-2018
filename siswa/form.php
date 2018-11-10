 <?php if (!defined('baseurl')) exit('No direct script access allowed');?>


<form action="<?= !empty($data['action'])?$data['action']:'siswa.php?a=save&id=1234567' ?>" method="POST" role="form">
    <legend>Form Calon Siswa</legend>
    <input type="hidden" name="form" value="siswa">
    <input type="hidden" name="id_siswa" value="<?php echo (!empty($data['id_siswa'])?$data['id_siswa']:''); ?>">
    <div class="row">
        <div class="col-7">
            <div class="form-group">
                <label for="nama_siswa">Nama Siswa</label>
                <input name="nama_siswa" type="text" class="form-control" id="nama_siswa" required placeholder="Masukkan Nama Siswa" value="<?php echo (!empty($data['nama_siswa'])?$data['nama_siswa']:''); ?>">
            </div>
        </div>
        <div class="col-5">
            <div class="form-group">
                <label for="asal_sekolah">Asal Sekolah</label>
                <input name="asal_sekolah" type="text" class="form-control" id="asal_sekolah" required placeholder="Masukkan Asal Sekolah" value="<?php echo (!empty($data['asal_sekolah'])?$data['asal_sekolah']:''); ?>">
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-4">
            <div class="form-group">
                <label for="tmp_lahir">Tempat Lahir</label>
                <input name="tmp_lahir" type="text" class="form-control" id="tmp_lahir" required placeholder="Masukkan Tempat Lahir" value="<?php echo (!empty($data['tmp_lahir'])?$data['tmp_lahir']:''); ?>">
            </div>
        </div>
        <div class="col-3">
            <div class="form-group">
                <label for="tgl_lahir">Tanggal Lahir</label>
                <input name="tgl_lahir" type="text" class="form-control" id="tgl_lahir" required placeholder="Format Tahun-Bulan-Hari" value="<?php echo (!empty($data['tgl_lahir'])?$data['tgl_lahir']:date('Y-m-d')); ?>">
                <!-- <input class="form-control" id="exampleInputDatePicker1" placeholder="Pick a date" type="text"> -->
            </div>
        </div>
       


        <div class="col-5">
                <label for="alamat">Jenis Kelamin</label>
            <div class="form-group">  
                <div class="custom-control custom-radio  custom-control-inline">
                    <input class="custom-control-input" name="j_kelamin" type="radio" id="j_kelamin1" required value="L" <?php if(!empty($data['j_kelamin'])&&$data['j_kelamin']=='L' ){ echo "checked='checked'" ;} ?>> 
                    <!-- <span class="label label-default">Laki-laki</span> -->
                    <!-- <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input"> -->
                    <label class="custom-control-label" for="j_kelamin1">Laki-laki</label>
                </div>
                <div class="custom-control custom-radio  custom-control-inline">
                    <input class="custom-control-input" name="j_kelamin" type="radio" id="j_kelamin2" required value="P" <?php if(!empty($data['j_kelamin'])&&$data['j_kelamin']=='P' ){ echo "checked='checked'" ;} ?>> 
                    <!-- <span class="label label-default">Perempuan</span> -->
                    <!-- <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input"> -->
                    <label class="custom-control-label" for="j_kelamin2">Perempuan</label>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col">
            <div class="form-group">
                <label for="alamat">Alamat</label>
                <textarea name="alamat" type="text" class="form-control" id="alamat" placeholder="Masukkan Alamat Siswa"><?php echo (!empty($data['alamat'])?$data['alamat']:''); ?></textarea>
            </div>
        </div>
        <div class="col-5">
            <div class="form-group">
                <label for="telp">Telpon</label>
                <input name="telp" type="text" class="form-control" id="telp" placeholder="Masukkan Telpon Siswa" value="<?php echo (!empty($data['telp'])?$data['telp']:''); ?>">
            </div>
        </div>
    </div>
    <button name="<?php echo !empty($data['id_siswa'])?'save':'submit'; ?>" type="submit" class="btn btn-primary">Submit</button>
    <a href="siswa.php" class="btn btn-warning">Batal</a>
</form>
