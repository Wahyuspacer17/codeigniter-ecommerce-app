<?php
// Error
echo validation_errors('<p class="alert alert-warning">','</p>');
// form
echo form_open_multipart(base_url('admin/galeri/edit/'.$galeri->id_galeri));
?>



<div class="form-group row">
<label class="col-sm-2 col-form-label">Judul Galeri</label>
<div class="col-sm-10">
  <input type="text" class="form-control" name="judul_galeri" placeholder="Judul Galeri" value="<?php echo $galeri->judul_galeri  ?>">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Isi</label>
<div class="col-sm-10">
  <textarea name="isi" class="form-control textarea" placeholder="Isi"><?php echo $galeri->isi ?></textarea>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label">Website</label>
<div class="col-sm-10">
  <input type="text" class="form-control" name="website" placeholder="Website" value="<?php echo $galeri->website  ?>">
</div>
</div>


<div class="form-group row">
<label class="col-sm-2 col-form-label">Gambar</label>
<div class="col-sm-10">
  <input type="file" class="form-control" name="gambar" placeholder="Gambar"
  value="<?php echo $galeri->gambar  ?>">
</div>
</div>

<div class="form-group row">
<label class="col-sm-2 col-form-label">Posisi Galeri</label>
<div class="col-sm-10">
  <select class="form-control" name="posisi_galeri">
    <option value="Home">Home</option>
    <option value="Galeri">Galeri</option>
    
</select>
</div>
</div>
<div class="form-group row">
<label class="col-sm-2 col-form-label"></label>
<div class="col-sm-10">
  <div class="btn-group">
    <button class="btn btn-success" type="submit" name="submit" value="submit">
      <i class="fa fa-save"></i> Simpan
    </button>
      <button class="btn btn-warning" type="reset" name="reset" value="reset">
      <i class="fa fa-times"></i> Reset
    </button>
  </div>
</div>
</div>
<?php echo form_close(); ?>