<!-- Hero Slider Begin -->
    <section class="hero-slider">
        <div class="hero-items owl-carousel">
            <?php $i=1; foreach($slider as $slider): ?>
            <div class="single-slider-item set-bg" data-setbg="<?php echo base_url('assets/upload/image/'.$slider->gambar); ?>">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12">
                            <h3><?php echo $slider->judul_galeri ?></h3>
                            
                            
                        </div>
                    </div>
                </div>
            </div>
            <?php $i++; endforeach; ?>
            
        </div>
    </section>
    <!-- Hero Slider End -->