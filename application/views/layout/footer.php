<?php
//  Ambil data dari konfigurasi
$site = $this->konfigurasi_model->listing();
$nav_produk_footer = $this->konfigurasi_model->nav_produk();
?>
<!-- Footer Section Begin -->
    <footer  class="footer-section spad">
        <div class="container">
            
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Hubungi Kami</h4>
                            <ul>
                                <li class="fa fa-envelope"> <?php echo $site->email ?></li><br>
                                <li class="fa fa-whatsapp"> <?php echo $site->telepon ?></li><br>
                                <li class="fa fa-instagram"> <?php echo $site->instagram ?></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Kategori Produk</h4>
                            <ul>
                                <?php foreach($nav_produk_footer as $nav_produk_footer) { ?>
                                <li href="<?php echo base_url('produk/kategori/'.$nav_produk_footer->slug_kategori) ?>"><?php echo $nav_produk_footer->nama_kategori ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                   
                   
                </div>
            </div>
        </div>
       
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="<?php echo base_url() ?>assets/template/js/jquery-3.3.1.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/jquery.magnific-popup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/jquery.slicknav.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/owl.carousel.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/jquery.nice-select.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/mixitup.min.js"></script>
    <script src="<?php echo base_url() ?>assets/template/js/main.js"></script>
</body>

</html>