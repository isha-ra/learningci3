<?php include ('header.php');?>

<div class="container" style="margin-top: 20px;">
		<h1>Login form</h1>
<?php  if($error=$this->session->flashdata('Login_failed')):  ?>
<div class="row">
<div class="col-lg-6">
<div class="alert alert-danger">
<?= $error; ?>
</div>
</div>
</div>

<?php endif; ?>

        <?php echo form_open('admin/index'); ?>
        <div class ="row">
       <div class="col-lg-6">
	<div class="form-group">
		<label for="username">Username:</label>
		<?php echo form_input(['class'=>'form-control','placeholder'=>'Enter Username','name'=>'username','value'=>set_value('username')]);?>
</div>
<div class="col-lg-6">
	<?php echo form_error('username');?>
</div>
</div>

	</div>


<div class ="row">
        	<div class="col-lg-6">
	<div class="form-group">
		<label for="password">password:</label>
				<?php echo form_password(['class'=>'form-control','placeholder'=>'Enter Password','name'=>'password','value'=>set_value('password')]);?>
	</div>
</div></div>
	<div class="col-lg-6">
	<?php echo form_error('password');?>
</div>
	<?php echo  form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']);?>
	<?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);  ?>
 <?php echo anchor('Admin/register', 'Sign up?', 'class="link-class"') ?>
	

</div>
<?php include ('footer.php');?>
