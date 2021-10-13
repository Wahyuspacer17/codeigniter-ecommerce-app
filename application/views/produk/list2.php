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
<a href="#">Previous</a>
<a href="#">Next</a>
</div>
<div class="row">
    <?php foreach($produk as $produk) { ?>
<div class="col-lg-6">
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
<div class="product-slider owl-carousel">
    <div class="product-img">
        <figure>
            <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>">
            <div class="p-status">new</div>
        </figure>
    </div>
    <div class="product-img">
        <figure>
            <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt="<?php echo $produk->nama_produk ?>">
            <div class="p-status">new</div>
        </figure>
    </div>
</div>

</div>
<div class="col-lg-6">
<div class="product-content">


    <h2><a href="<?php echo base_url('produk/detail/'.$produk->slug_produk) ?>"> </h2>
    <h2><?php echo $produk->nama_produk ?></h2>
    <div class="pc-meta">
        <h5>IDR <?php echo number_format($produk->harga,'0',',','.') ?></h5>
        <div class="rating">
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
            <i class="fa fa-star"></i>
        </div>
    </div>
    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut
        labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo
        viverra maecenas accumsan lacus vel facilisis.</p>
    <ul class="tags">
        <li><span>Category :</span> Men’s Wear</li>
        <li><span>Tags :</span> man, shirt, dotted, elegant, cool</li>
    </ul>
    <div class="product-quantity">
        <div class="pro-qty">
            <input type="text" value="1">
        </div>
    </div>
    <a href="#" class="primary-btn pc-btn">Add to cart</a>
    <ul class="p-info">
        <li>Product Information</li>
        <li>Reviews</li>
        <li>Product Care</li>
    </ul>
</div>
</div>
<?php
// Closing Form
echo form_close();
?>
</div>
<?php } ?>
</div>

<!-- Pagination -->
<div class="pagination flex-m flex-w p-t-26">
<?php echo $pagin?>
    </div>

</section>
<!-- Product Page Section End -->

<!-- Related Product Section Begin -->
<section class="related-product spad">
<div class="container">
<div class="row">
<div class="col-lg-12 text-center">
<div class="section-title">
    <h2>Kategori Produk</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-lg-3 col-sm-6">
    <?php foreach($listing_kategori as $listing_kategori) { ?>
<div class="single-product-item">
    <figure>
        <a href="<?php echo base_url('produk/kategori/'.$listing_kategori->slug_kategori) ?>"><img src="img/products/img-1.jpg" alt=""></a>
        <div class="p-status">new</div>
    </figure>
    <div class="product-text">
        <h6><?php echo $listing_kategori->nama_kategori; ?></h6>
        <p>$29.00</p>
    </div>
</div>
</div>
<?php } ?>
</div>
</div>
</section>
<!-- Related Product Section End -->

<!-- Pagination -->
<div class="pagination flex-m flex-w p-t-26">

</div>