<section class="container g-mt-100">

    <h1 class="text-center">List Harga Bata</h1>

    <table id="material" class="display" width="100%">
        <thead>
            <tr class="text-center">
                <th style="background-color: #47d147;color: #fff;">Tebal</th>
                <th style="background-color: #ffad33;color: #fff;">Harga(Rp) / m2</th>
                <th style="background-color: #444;color: #fff;">Isi / m2</th>
            </tr>
        </thead>
       
        <tbody>
        	 <?php foreach($data_bata as $value) { ?>
        	<tr class="text-center">
        		<td><?php echo $value->tebal; ?></td>
        		<td><?php echo number_format($value->harga); ?></td>
        		<td><?php echo $value->isi; ?></td>
        	</tr>	
        	<?php } ?>
        </tbody>	
    	
    </table>

</section>