<br>
<div class="container-fluid">

<div class="row">
		<div class="col-sm-3">
<!-- ///Some code// -->
		</div>


		<div class="col-sm-6">
			<h1>Request help from volunteers</h1>
			<p>Please fill out the following form to create a new task</p>


			<!-- Validation error messages -->
			<?php 
			echo validation_errors('<p class = "alert alert-danger">') ?>

			<!-- We use special form for uploading the image -->
			<?php echo form_open_multipart('tasks/add'); ?>

			<p>
				<?php echo form_label('Task name'); ?>
				<?php $data=array(
					'name' => 'task_name',
					'class' => 'form-control',
					'value' => set_value('task_name') //to keep the data in the form even though it could be an error
				); ?>
				<?php echo form_input($data) ?>
			</p>

			<p>
				<?php echo form_label('Task Description'); ?>
				<?php $data=array(
					'name' => 'task_description',
					'class' => 'form-control',
					'value' => set_value('task_description') //to keep the data in the form even though it could be an error
				); ?>
				<?php echo form_textarea($data) ?>
			</p>

			<p>
				<?php echo form_label('Upload Image'); ?>
				<?php $data=array(
					'name' => 'file_path',
					'class' => 'form-control'

				); ?>
				<?php echo form_upload($data) ?>
			</p>

			<p>
			<?php 
			$data = array('name' => 'submit', 
							'class' => 'btn btn-primary',
							'value' => 'Create Task');
			echo form_submit($data);
			?>
			</p>
			<br>
			<br>

			<?php echo form_close(); ?>
		</div>
	</div>
</div>