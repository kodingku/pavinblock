
<?php if ($this->session->flashdata('edit_password')): ?>
  <div class="alert alert-success">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
    <strong>
      <?php echo $this->session->flashdata('edit_password'); ?>
    </strong> 
  </div>
  <?php endif; ?>

<h1 class="text-center">Dashboard SINAR BARU</h1>
<div class="row">


  <div class="col-md-6">
    <!-- Article -->
     <?php echo form_open(); ?>
       <?php foreach ($data as $value) { ?>
	    <article class="row  text-center mx-0">
	      <!--Article Content-->
	      <div class=" g-bg-black g-px-30 g-py-45">
	        <i class="fas fa-lock fa-4x" style="color: #fff;"></i>
	        <p class="g-color-white g-mb-25">Ganti Password Secara Berkala</p>
	        <a class="btn btn-md u-btn-outline-white g-font-weight-600 g-font-size-11 text-uppercase" href="<?php echo base_url()?>Admin/change_password/<?php echo $value->id_user ?>">Ganti Password</a>
	      </div>
	      <!-- End Article Content -->

	      
	    </article>
    <!-- End Article -->
     <?php } ?>

  <?php echo form_close(); ?>
  </div>
 </div>