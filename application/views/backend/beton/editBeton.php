
<p class="bg-danger">

	<?php echo validation_errors("<p class='bg-danger'>"); ?>

</p>
<?php
	
	$attributes = array(
						'class' => 'form-horizontal'
					);

 ?>

<?php echo form_open_multipart('Beton/update/'.$data_beton->id_pavin.'',$attributes); ?>


<h2 class="text-center">Form Edit Data Beton</h2>
<div class="form-group ">
<?php echo form_label('Tebal'); ?>
	<?php 

		$data = array(

				'class' => 'form-control',
				'name' => 'tebal',
				'value' => $data_beton->tebal

		);

	?>

	<?php echo form_input($data); ?>

</div>

<div class="form-group ">
<?php echo form_label('Harga / m2'); ?>
	<?php 

		$data = array(

				'class' => 'form-control',
				'name' => 'harga',
				'value' => $data_beton->harga

		);

	?>

	<?php echo form_input($data); ?>

</div>

<div class="form-group ">
<?php echo form_label('Isi / m2'); ?>
	<?php 

		$data = array(

				'class' => 'form-control',
				'name' => 'isi',
				'value' => $data_beton->isi

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">

	<?php 

		$data = array(

			'class' => 'btn btn-md u-btn-3d u-btn-orange g-mr-10 g-mb-15',
			'name' => 'submit',
			'value' => 'Update'

		);

		echo form_submit($data);

	 ?>

</div>

<?php echo form_hidden('id_pavin',$data_beton->id_pavin); ?>

<?php echo form_close(); ?>