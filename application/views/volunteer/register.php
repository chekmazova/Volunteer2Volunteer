
<!-- REGISTRATION FORM -->
<?php
//user is controller we are colling, simmilar to POST
$attribute = array('id'=> 'register', 'class' => 'form-horizontal');

//form helper inside the codeignaighter
echo form_open('volunteers/register', $attribute);
?>
<h2 class="text-center">REGISTER</h2>
<?php echo validation_errors('<p class = "alert alert-danger">') ?>


<div class="row">
	<div class="col-sm-6">
		<p>
		<?php echo form_label("First name:");
		$data = array('name' => 'first_name', 
						'placeholder' => 'Enter first name',
						'class' => 'form-control',
						'value' => set_value('first_name')); //set value saves the value insite the input form
		echo form_input($data);
		?>
		</p>
	</div>

	<div class="col-sm-6">
		<p>
		<?php echo form_label("Last name:");
		$data = array('name' => 'last_name', 
						'placeholder' => 'Enter last name',
						'class' => 'form-control',
						'value' => set_value('last_name')); //set value saves the value insite the input form
		echo form_input($data);
		?>
		</p>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<p>
		<?php echo form_label("Phone number:");
		$data = array('name' => 'phone_number', 
						'placeholder' => 'Enter your phone number',
						'class' => 'form-control',
						'value' => set_value('phone_number'));
		echo form_input($data);
		?>
		</p>
	</div>
	<div class="col-sm-6">
		<p>
		<?php echo form_label("City:");
		$data = array('name' => 'city', 
						'placeholder' => 'Enter your city/town',
						'class' => 'form-control',
						'value' => set_value('city'));
		echo form_input($data);
		?>
		</p>
	</div>
</div>

<div class="row">
	<div class="col-sm-6">
		<p>
		<?php echo form_label("Email:");
		$data = array('name' => 'email', 
						'placeholder' => 'Email',
						'class' => 'form-control',
						'value' => set_value('email')); //set value saves the value insite the input form
		echo form_input($data);
		?>
		</p>
	</div>
	<div class="col-sm-6">
		<p>
		<?php echo form_label("Password:");
		$data = array('name' => 'password', 
						'placeholder' => 'Enter password',
						'class' => 'form-control',
						'value' => set_value('password'));
		echo form_password($data);
		?>
		</p>

	</div>
</div>

<p>
<?php 
$data = array('name' => 'submit', 
				'class' => 'btn btn-warning btn-lg active',
				'value' => 'Register');
echo form_submit($data);
?>
</p>
<?php
echo form_close();
?>


<!-- WARNINGS -->
<?php
//Getting the message from Registration form
if ($this ->session->flashdata('registered')):
	?>
	<p class = "alert alert-success" >
		<?php echo $this ->session->flashdata('registered');?>
	</p>
<?php endif; ?>

<?php
//if the user is not regustered successfuly to db
if ($this ->session->flashdata('nregistered')):
	?>
	<p class = "alert alert-danger" >
		<?php echo $this ->session->flashdata('nregistered');?>
	</p>
<?php endif; ?>

<!--<form action="volunteers/register" method="POST">

<input value="Register" type="submit" class="btn btn-warning"/>
</form> -->


