 <?php
// Ambil data menu dari konfigurasi
 $nav_produk = $this->konfigurasi_model->nav_produk();

 ?>
<!-- Header Section Begin -->
    <header  class="header-section">
        <div  class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="<?php echo base_url()?>"><img src="<?php echo base_url('assets/upload/image/'.$site->logo) ?>" alt="<?php echo $site->namaweb ?> | <?php echo $site->tagline ?>"></a>
                </div>
                <div class="header-right">
                        
                    <?php $keranjang  = $this->cart->contents();?>
                    <a href="<?php echo base_url('belanja') ?>">
                        <img src="<?php echo base_url()?>assets/template/img/icons/bag.png" alt=""> 
                        <sup><span><?php echo count($keranjang) ?></span></sup>
                    </a>
                </div>
                <div class="user-access">
                    <?php 
                    // Check data belanja ada atau tidak
                    
                    if($this->session->userdata('email')) {
                    ?>
                    <a href="<?php echo base_url('dasbor')?>">Dasbor</a>
                    <a href="<?php echo base_url('masuk/logout')?>" class="in">Logout</a>
                <?php }else{ ?>
                    <a href="<?php echo base_url('registrasi')?>">Register</a>
                    <a href="<?php echo base_url('masuk')?>" class="in">Sign in</a>
                <?php } ?>
                </div>

                <!-- Menu Produk -->
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a <?php if(current_url() == base_url()."index.php"){ ?> class="active" <?php } ?> href="<?php echo base_url() ?>"> 
                        Beranda</a></li>
                        <li><a <?php if(current_url() == base_url()."index.php/produk"){ ?> class="active" <?php } ?> href="<?php echo base_url('produk') ?>">Produk &amp; Belanja</a>
                            <ul class="sub-menu">
                                <?php foreach($nav_produk as $nav_produk) { ?>
                                <li><a href="<?php echo base_url('produk/kategori/'.$nav_produk->slug_kategori) ?>">
                                    <?php echo $nav_produk->nama_kategori ?>
                                </a></li>
                            <?php } ?>
                            </ul>
                        </li>
                        
                        <li><a <?php if(current_url() == base_url()."index.php/kontak"){ ?> class="active" <?php } ?> href="<?php echo base_url('kontak') ?> ">Kontak</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    

