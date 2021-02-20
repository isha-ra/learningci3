<?php include('header.php'); ?>

<div class="container" style="margin-top: 20px;">
    <h1>Registration form</h1>
        <?php echo form_open('admin/registerprocess'); ?>
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

 <div class ="row">
       <div class="col-lg-6">
  <div class="form-group">
    <label for="firstname">firstname:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter firstname','name'=>'firstname','value'=>set_value('username')]);?>
</div>
<div class="col-lg-6">
  <?php echo form_error('firstname');?>
</div>
</div>
</div>
 <div class ="row">
       <div class="col-lg-6">
  <div class="form-group">
    <label for="lastname">lastname:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter lastname','name'=>'lastname','value'=>set_value('username')]);?>
</div>
<div class="col-lg-6">
  <?php echo form_error('lastname');?>
</div>
</div>

  </div>

   <div class ="row">
       <div class="col-lg-6">
  <div class="form-group">
    <label for="email">email:</label>
    <?php echo form_input(['class'=>'form-control','placeholder'=>'Enter email','name'=>'email','value'=>set_value('username')]);?>
</div>
<div class="col-lg-6">
  <?php echo form_error('email');?>
</div>
</div>



  </div>
  <?php echo  form_submit(['type'=>'submit','class'=>'btn btn-primary','value'=>'Submit']);?>
  <?php  echo form_reset(['type'=>'reset','class'=>'btn btn-primary','value'=>'Reset']);  ?>
 <?php echo anchor('Admin/login', 'Sign in?', 'class="link-class"') ?>
  

</div>

<?php include('footer.php'); ?>