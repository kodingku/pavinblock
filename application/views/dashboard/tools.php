<h1 class="text-center">Form Edit Password</h1>


<?php echo validation_errors("<p class='bg-danger'>"); ?>


<?php $attributes = array('class'=>'form-horizontal'); ?>
  <?php echo form_open('Admin/change_password/'.$users_data->id_user. '',$attributes); ?>
  <div class="form-group g-mb-15">
  <?php 
    $data = array(

      'class'=>'form-control',
      'name' => 'password',
      'placeholder' => 'masukan password baru'

    );

    echo form_password($data);

  ?>
</div>
  <div class="form-group">
    
    <?php 

      $data  = array(
        'class' => 'btn btn-md btn-offset-3 u-btn-3d u-btn-red btn-block g-mb-15',
        'name' => 'submit',
        'value' => 'Update Password'

      );



    ?>
    
    <?php echo form_submit($data); ?>
    
  </div>
  <?php echo form_close(); ?>
</div>


                  