
<p class="bg-danger">

	<?php echo validation_errors("<p class='bg-danger'>"); ?>

</p>
<?php
	
	$attributes = array(
						'class' => 'form-horizontal'
					);

 ?>

<?php echo form_open_multipart('Trihex/store',$attributes); ?>


<h2 class="text-center">Form Tambah Data </h2>

<div class="form-group">
			<?php echo form_label('Upload Foto'); ?>
		
				<input type="file" name="fl_photo" class="form-control col-md-6" required="required">
				<span>*Maksimum 1Mb File Upload</span>
</div>


<div class="form-group ">
<?php echo form_label('Nama Barang'); ?>
	<?php 

		$data = array(

				'class' => 'form-control',
				'name' => 'nama',
				'placeholder' => 'masukan nama barang'

		);

	?>

	<?php echo form_input($data); ?>

</div>

<div class="form-group ">
<?php echo form_label('Tebal'); ?>
	<?php 

		$data = array(

				'class' => 'form-control',
				'name' => 'tebal',
				'placeholder' => 'masukan tebal'

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
				'placeholder' => 'masukan harga / m2'

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
				'placeholder' => 'masukan isi / m2'

		);

	?>

	<?php echo form_input($data); ?>

</div>


<div class="form-group">

	<?php 

		$data = array(

			'class' => 'btn btn-md u-btn-3d u-btn-primary g-mr-10 g-mb-15',
			'name' => 'submit',
			'value' => 'Simpan'

		);

		echo form_submit($data);

	 ?>

</div>



<?php echo form_close(); ?>