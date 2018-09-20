<br>
<br>
<br>
<br>
<br>
<br>
<!-- WARNING MESSAGES -->
<?php
//The message after redirecting from the illigal access to the link
if ($this ->session->flashdata('noaccess')):
	?>
	<p class = "alert alert-danger" >
		<?php echo $this ->session->flashdata('noaccess');?>
	</p>
<?php endif; ?>
<!-- WARNING MESSAGES -->


<?php
//user is controller we are colling, simmilar to POST
$attribute = array('id'=> 'login_form', 'class' => 'form-horizontal');

//form helper inside the codeignaighter
echo form_open('volunteers/login1', $attribute);
?>


<div max-width = "530px" class="container" >
	<div id="login-row" class="row">
	<div id="login-column" class="col-lg-3 col-offset-3 centered">
	</div>
		<div id="login-column" class="col-lg-6 col-offset-6 centered">


<?php
//Form helper to create a form for log in
//if something then...
if ($this ->session->flashdata('login_failed')):
	?>

	<?php echo '<p class = "alert alert-danger" >'.
		$this ->session->flashdata('login_failed').'</p>';?>
<?php endif; ?>

<!-- Shows all validation errors -->
<?php echo validation_errors('<p class = "alert alert-danger">') ?>

<h3> Login </h3>
<p>
<?php echo form_label("Email:");
$data = array('name' => 'email', 
				'placeholder' => 'Email',
				'class' => 'form-control',
				'value' => set_value('email')); 
echo form_input($data);
?>
</p>

<p>
<?php echo form_label("Password:");
$data = array('name' => 'password', 
				'placeholder' => 'Enter password',
				'class' => 'form-control',
				'value' => set_value('password'));
echo form_password($data);
?>
</p>

<p>
<?php 
$data = array('name' => 'submit', 
				'class' => 'btn btn-promary',
				'value' => 'Log In');
echo form_submit($data);
?>
</p>

<?php
echo form_close();
?>

</div>
 </div>
 </div>
<br>
<br>
<br>