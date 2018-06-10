
<!-- delete notification -->
<?php if ($this->session->flashdata('modul_delete')): ?>
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>
      <?php echo $this->session->flashdata('modul_delete'); ?>
    </strong> 
  </div>
  <?php endif; ?>

<!-- create notification -->
  <?php if ($this->session->flashdata('material_create')): ?>
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>
      <?php echo $this->session->flashdata('material_create'); ?>
    </strong> 
  </div>
  <?php endif; ?>

<!-- edit notification -->
    <?php if ($this->session->flashdata('modul_edit')): ?>
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>
      <?php echo $this->session->flashdata('modul_edit'); ?>
    </strong> 
  </div>
  <?php endif; ?>


<a href="<?php echo base_url()?>Bata/addBata" class="btn btn-md u-btn-3d u-btn-teal g-mr-10 g-mb-15">+ Data Bata</a>

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