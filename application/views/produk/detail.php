<!-- Page Add Section Begin -->
<section class="page-add">
<div class="container">
<div class="row">
<div class="col-lg-4">
    <div class="page-breadcrumb">
        <h2>
             <?php echo $title ?>
            <span></span></h2>
        <a href="#">
        <?php echo $site->namaweb ?> | <?php echo $site->tagline ?>
        </a>
    </div>
</div>
<div class="col-lg-8">
    <img src="img/add.jpg" alt="">
</div>
</div>
</div>
</section>
<!-- Page Add Section End -->

<!-- Product Page Section Beign -->
<section class="product-page">
<div class="container">
<div class="product-control">

</div>
<div class="row">
    <?php if ($this->session->flashdata('warning')) {
        echo '<p class="alert alert-warning">'.$this->session->flashdata('warning').'</p>';
    }
    ?>
<div class="col-lg-6">
     <?php 
        // Form untuk memproses belanja
        echo form_open(base_url('belanja/add')); 
        // Elemen yang dibawa
        echo form_hidden('id', $produk->id_produk);
        echo form_hidden('price', $produk->harga);
        echo form_hidden('name', $produk->nama_produk);
        // Elemen Redirect
        echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));
    ?>
    <div class="product-slider owl-carousel">
        <div class="product-img">
            <figure>
                <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar)?>" alt="<?php echo $produk->nama_produk ?>">
                
            </figure>
        </div>
        <div class="product-img">
            <figure>
                <img src="<?php echo base_url('assets/upload/image/'.$produk->gambar)?>" alt="<?php echo $produk->nama_produk ?>">
                
            </figure>
        </div>
    </div>
    
</div>
<div class="col-lg-6">
    <div class="product-content">
        <h2><?php echo $produk->nama_produk ?></h2>
        <div class="pc-meta">
            <h5>IDR <?php echo number_format($produk->harga,'0',',','.') ?></h5>
            
        </div>
        <p>
            <?php echo $produk->keterangan ?>
        </p>
        <ul class="tags">
            <li><span>Kategori :</span><?php echo $produk->nama_kategori ?></li>
            <li><span>Keywords :</span><?php echo $produk->keywords ?></li>
             <li><span>Stok :</span><?php echo $produk->stok ?></li>
        </ul>
        <div class="product-quantity">
            <div class="pro-qty">
                <input type="number" name="qty" value="1" max="<?php echo $produk->stok ?>" min="1">
            </div>
        </div>
         <!-- Button -->
            <button type="submit" value="submit" class="btn btn-success btn-lg">
                Tambahkan ke keranjang
            </button>
       
    </div>
</div>
</div>
</div>
<br>
<br>
<br>
</section>
<!-- Product Page Section End -->

