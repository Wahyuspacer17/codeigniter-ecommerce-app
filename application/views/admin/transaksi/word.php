<?php
  header("Content-type: application/vnd.ms-word");
  header("Content-Disposition: attachment;Filename=document_name.doc");    
  echo "<html>";
  echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=Windows-1252\">";
  echo "<body>";
?>
		<h1>DETAIL TRANSAKSI <?php echo $site->namaweb ?></h1>
		<table class="table table-bordered">
		<thead>
			<tr>
				<th width="20%">Nama Pelanggan</th>
				<th>: <?php echo $header_transaksi->nama_pelanggan ?></th>
			</tr>
			<tr>
				<th width="20%">Kode Transaksi</th>
				<th>: <?php echo $header_transaksi->kode_transaksi ?></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td>Tanggal</td>
				<td>: <?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_transaksi)) ?></td>
			</tr>
			<tr>
				<td>Jumlah total</td>
				<td>: <?php echo number_format($header_transaksi->jumlah_transaksi) ?></td>
			</tr>
			<tr>
				<td>Status Bayar</td>
				<td>: <?php echo $header_transaksi->status_bayar ?></td>
			</tr>
			<tr>
				<td>Bukti Bayar</td>
				<td>: <?php if($header_transaksi->bukti_bayar =="") { echo 'Belum ada'; }else{ ?>
					<img src="<?php echo base_url('assets/upload/image/'.$header_transaksi->bukti_bayar) ?>" class="img img-thumbnail" width="200">
				<?php } ?>
				</td>
			</tr>
			<tr>
				<td>Tanggal Bayar</td>
				<td>: <?php echo date('d-m-Y',strtotime($header_transaksi->tanggal_bayar)) ?></td>
			</tr>
			<tr>
				<td>Jumlah Bayar</td>
				<td>: Rp. <?php echo number_format($header_transaksi->jumlah_bayar,'0',',','.') ?></td>
			</tr>
			<tr>
				<td>Pembayaran dari</td>
				<td>: <?php echo $header_transaksi->nama_bank ?> No. rekening <?php echo $header_transaksi->rekening_pembayaran ?> a.n <?php echo $header_transaksi->rekening_pelanggan ?></td>
			</tr>
			<tr>
				<td>Pembayaran ke rekening</td>
				<td>: <?php echo $header_transaksi->bank ?> No. rekening <?php echo $header_transaksi->nomor_rekening ?> a.n <?php echo $header_transaksi->nama_pemilik ?></td>
			</tr>
		</tbody>
		</table>

		<hr>

		<table class="table table-bordered" width="100%">
		<thead>
			<tr class="bg-success">
				<th>No</th>
				<th>Kode</th>
				<th>Nama Produk</th>
				<th>Jumlah</th>
				<th>Harga</th>
				<th>Sub Total</th>
			</tr>
		</thead>
		<tbody>
			<?php $i=1; foreach($transaksi as $transaksi) { ?>
			<tr>
				<td><?php echo $i ?></td>
				<td><?php echo $transaksi->kode_produk ?></td>
				<td><?php echo $transaksi->nama_produk ?></td>
				<td><?php echo number_format($transaksi->jumlah) ?></td>
				<td><?php echo number_format($transaksi->harga) ?></td>
				<td><?php echo number_format($transaksi->total_harga) ?></td>
			</tr>
			<?php $i++; } ?>
		</tbody>
		</table>
</body>
</html>