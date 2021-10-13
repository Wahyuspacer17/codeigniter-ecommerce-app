<?php 
//Session
if($this->session->flashdata('sukses')){
  echo '<div class="alert alert-success">';
  echo $this->session->flashdata('sukses');
  echo '</div>';
}
//error
echo validation_errors('<div class="alert alert-success">','</div>');?>
<p>
  <a href="<?php echo base_url('admin/galeri/tambah')?>" class="btn btn-success">
    <i class="fa fa-plus"></i> Tambah Baru
  </a>
</p>

<table id="example1" class="table table-bordered table-striped">
    <thead>
    <tr>
      <th width="5%">No</th>
      <th width="10%">Gambar</th>
      <th width="20%">Judul</th>
      <th width="15%">Posisi</th>
      <th width="15%">Website</th>
      <th width="20%">Actions</th>
    </tr>
    </thead>
    <tbody>
      <?php $no=1; foreach($galeri
       as $galeri
     ) { ?>
    <tr>
      <td><?php echo $no?></td>
      <td><img src="<?php echo base_url("assets/upload/image/thumbs/".$galeri->gambar) ?>" class="img img-fluid img-thumbnail" width="60" height="60" ></td>
      <td><?php echo $galeri->judul_galeri ?></td>
      <td><?php echo $galeri->posisi_galeri ?></td>
      <td><?php echo $galeri->website ?></td>
      <td>
        <div class="btn-group">
          <a href="<?php echo base_url('admin/galeri/edit/'.$galeri->id_galeri
          ) ?>"
          class="btn btn-warning btn-sm">
            <i class="fa fa-edit"></i>
          </a>
          <a href="<?php echo base_url('admin/galeri/delete/'.$galeri->id_galeri
          ) ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin ingin menghapus data ini?')"><i class="fa fa-trash"></i>
          </a>
        </div>
      </td>
    </tr>

    <?php $no++; } ?>
  </tbody>
</table>