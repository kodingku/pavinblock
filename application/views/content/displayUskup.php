<section class="container g-mt-100">

    <h1 class="text-center">List Harga Topi Uskup</h1>

    <table id="material" class="display" width="100%">
        <thead>
            <tr class="text-center">
                <th style="background-color: #47d147;color: #fff;">Tebal</th>
                <th style="background-color: #ffad33;color: #fff;">Harga(Rp) / m2</th>
                <th style="background-color: #444;color: #fff;">Isi / m2</th>
            </tr>
        </thead>
       
        <tbody>
        	 <?php foreach($data_uskup as $value) { ?>
        	<tr class="text-center">
        		<td><?php echo $value->tebal; ?></td>
        		<td><?php echo number_format($value->harga); ?></td>
        		<td><?php echo $value->isi; ?></td>
        	</tr>	
        	<?php } ?>
        </tbody>	
    	
    </table>

</section>
<section class="container">
    <div class="u-shadow-v1-5 g-line-height-2 g-pa-40 g-mb-30" role="alert">
      <h3 class="h2 g-font-weight-300 g-mb-20">Keterangan</h3>
      <p class="mb-0">
        <ul>
            <li>Harga diatas belum termasuk PPN 10% </li>
            <li>Harga sudah termasuk ongkos kirim untuk area .........</li>
            <li>Biaya koordinasi lingkungan / kuli preman proyek ditanggung pihak pembeli</li>
            <li>Harga bisa negotiable tergantung jarak pengiriman dan jumlah pesanan</li>
            <li>Kami menyediakan Jasa Pemasangan Paving Block</li>
        </ul>
      </p>
    </div>
</section>