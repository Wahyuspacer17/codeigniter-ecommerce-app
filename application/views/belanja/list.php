

<!-- Cart Page Section Begin -->
<div class="cart-page">
<div class="container">
<div class="cart-table">
    <br><br>
    <h2><?php echo $title ?></h2><hr>
    <br><br>
<table class="table-shopping-cart table">
        <tr class="table-head">
            <th width="10%">GAMBAR</th>
            <th width="25%">PRODUK</th>
            <th width="15%">HARGA</th>
            <th width="10%">JUMLAH</th>
            <th width="20%">SUB TOTAL</th>
            <th width="20%">ACTION</th>
        </tr>
        <?php 
        // Looping data keranjang belanja
        foreach($keranjang as $keranjang) { 
            // Ambil data produk
            $id_produk  = $keranjang['id'];
            $produk     = $this->produk_model->detail($id_produk);

            // Form update keranjang
            echo form_open(base_url('belanja/update_cart/'.$keranjang['rowid']));
        ?>
        <tr class="table-row">
            <td class="column-1">
                <div class="cart-img-product b-rad-4 o-f-hidden">
                    <img src="<?php echo base_url('assets/upload/image/thumbs/'.$produk->gambar) ?>" alt="<?php echo $keranjang['name'] ?>">
                </div>
            </td>
            <td class="column-2"><?php echo $keranjang['name'] ?></td>
            <td class="column-3">Rp. <?php echo number_format($keranjang['price'],'0',',','.') ?></td>
            <td class="column-4">
                <div class="flex-w bo5 of-hidden w-size17">
                    

                    <input class="form-control" type="number" name="qty" value="<?php echo $keranjang['qty'] ?>">

                    
                </div>
            </td>
            <td class="column-5">Rp. 
                <?php 
                $sub_total = $keranjang['price'] * $keranjang['qty'];
                echo number_format($sub_total,'0',',','.');
                ?>
            </td>
            <td>
                <button type="submit" name="update" class="btn btn-success btn-sm">
                    <i class="fa fa-edit"></i> Update
                </button>

                <a href="<?php echo base_url('belanja/hapus/'.$keranjang['rowid']) ?>" class="btn btn-warning btn-sm">
                    <i class="fa fa-trash-o"></i> Hapus
                </a>
            </td>
        </tr>
        <?php 
        // Echo form close
        echo form_close();
        // End looping keranjang belanja
        }
        
        ?>
        <tr class="table-row bg-info text-strong" style="font-weight: bold; color: white !important;">
            <td colspan="4" class="column-1">Total Belanja</td>
            <td colspan="2" class="column-2">Rp. <?php echo number_format($this->cart->total(),'0',',','.') ?></td>
        </tr>
        
    </table>
</div>
<div class="cart-btn">
<div class="row">
<div class="col-lg-4">
<div class="coupon-input">
</div>
</div>
<div class="col-lg-8 text-left text-lg-right">
<a href="<?php echo base_url('belanja/hapus') ?>" class="btn btn-danger btn-lg">
                <i class="fa fa-trash-o"></i> Bersihkan Keranjang Belanja
            </a>
<a href="<?php echo base_url('belanja/checkout') ?>" class="btn btn-success btn-lg">
                <i class="fa fa-shopping-cart"></i> Checkout
            </a>
</div>
</div>
</div>
</div>

</div>
<!-- Cart Page Section End -->
