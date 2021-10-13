<!-- Latest Product Begin -->
<section class="latest-products spad">
<div class="container">
<div class="product-filter">
<div class="row">
<div class="col-lg-12 text-center">
    <div class="section-title">
        <br><br><br>
        <h2>Produk Terbaru</h2>
    </div>
    
</div>
</div>
</div>
<div class="row" id="product-list">
    <?php if ($this->session->flashdata('warning')) {
        echo '<p class="alert alert-warning">'.$this->session->flashdata('warning').'</p>';
    }
    ?>
<?php foreach($produk as $produk) { ?>
<div class="col-lg-3 col-sm-6 mix all dresses bags">
<div class="single-product-item">
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

    
    <figure>      
        <a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>"><img src="<?php echo base_url('assets/upload/image/'.$produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>"></a>
        
    </figure>
    <div class="product-text">
        <h6><a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>"><?php echo $produk->nama_produk ?></a></h6>
        <p> IDR <?php echo number_format($produk->harga,'0',',','.') ?></p>
        <!-- Button -->
            <button type="submit" value="submit" class="btn btn-success btn-sm">
                Add to cart
            </button>
    </div>
</div>
<?php
// Closing Form
echo form_close();
?>
</div>
<?php } ?>
</div>
</div>
</section>
<!-- Latest Product End -->