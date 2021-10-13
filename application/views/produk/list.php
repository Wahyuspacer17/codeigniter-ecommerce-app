<!-- Page Add Section Begin -->
<section class="page-add">
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <div class="page-breadcrumb">
                <div style="display: flex; justify-content: space-between;">
                    <h2> <?php echo $title ?></h2>
                    <form action="<?= base_url('index.php/Produk/search/') ?>" method="get">
                        <div class="input-group">
                            <input type="text" class="form-control" name="keyword" placeholder="Masukan Kata Kunci...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="submit">Cari</button>
                            </span>
                        </div>
                    </form>
                </div>
                <a href="<?php echo base_url() ?>">Beranda</a>
                <a href="<?php echo base_url('produk') ?>"><?php echo $title ?></a>
            </div>
        </div>
        
    </div>
</div>
</section>
<!-- Page Add Section End -->

<!-- Related Product Section Begin -->
<section class="related-product spad">
<div class="container">
<?php if ($this->session->flashdata('warning')) {
        echo '<p class="alert alert-warning">'.$this->session->flashdata('warning').'</p>';
    }
    ?>
    <div class="row">
        <?php foreach($produk as $produk) { ?>
        <div class="col-lg-4 col-sm-6">
        <?php 
        // Form untuk memproses belanja
        echo form_open(base_url('belanja/add')); 
        // Elemen yang dibawa
        echo form_hidden('id', $produk->id_produk);
        echo form_hidden('qty', 1);
        echo form_hidden('price', $produk->harga);
        echo form_hidden('name', $produk->nama_produk);
        // Elemen Redirect
        echo form_hidden('redirect_page', str_replace('index.php/','',current_url()));
        ?>
            <div class="single-product-item">
                <figure>
                    <a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>"><img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt=""></a>
                    
                </figure>
                <div class="product-text">
                    <h4><a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>"><?php echo $produk->nama_produk ?></a></h4>
                    <p>IDR <?php echo number_format($produk->harga,'0',',','.') ?></p>
                    <p>
                    <!-- Button -->
                        <button type="submit" value="submit" class="btn btn-success btn-sm">
                            Add to Cart
                        </button>
                    </p>
                </div>
            </div>
            <?php
          // Closing Form
          echo form_close();
          ?>
        </div>
        <?php } ?>
<!-- Pagination -->
<div class="pagination flex-m flex-w p-t-26">
<?php echo $pagin?>
</div>

    </div>
</div>
</section>
<!-- Related Product Section End -->