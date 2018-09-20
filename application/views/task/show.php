
<!-- Task details block -->
<div class="container-fluid">
	

	<div class="row">
		<div class="col-sm-3">
			<br>
			<br>
			<!-- WARNING MESSAGES -->
			<?php
			//result for the task created
			if ($this ->session->flashdata('task_created')):
				?>
				<p class = "alert alert-success" >
					<?php echo $this ->session->flashdata('task_assigned');?>
				</p>
			<?php endif; ?>


			<div class="card">
				<img class="img-thumbnail" width="200" height="200" src="<?php echo base_url();?>assets/img/tasks/<?php echo $task->task_path;?>">
			</div>
		</div>
		<div class="col-sm-6">
			<p>Published on: <i class="fas fa-date"></i><?php echo $task->publication_date;?></p>
			<h1> <?php echo $task->task_name; ?> </h1>
			<h5 style="background-color: grey; color: white; padding: 5px">Due Date: <i class="fas fa-date"></i> <strong><?php echo $task->due_date;?></strong></h5>
			
			<br>
			<br>
			<div class="card">
				<div class="card-body" style="font-size: 1.5em"> <?php echo $task->task_description; ?></div>
			</div>
			<br>
			<a href="#" class="btn btn-warning btn-lg">Volunteer</a>
			<hr>
			<p style="color: grey;"><i>Click "Volunteer" if you are ready to help with this task for free</i></p>
		</div>


		<div class="col-sm-3">
			<p><strong>Task #<i class="glyphicon glyphicon-user"></i> <?php echo $user_task->id; ?></strong></p>
			<p>The volunteer requesting your help:</p>
			<img src="<?php echo base_url();?>assets/img/volunteers/<?php echo $user_task->img_path; ?>" class="img-thumbnail" width="150" height="150"> 
			<h1><i class="fas fa-user"></i> <?php echo $user_task->first_name; ?></h1>
			<h4><?php echo $user_task->location; ?></h4>
			<!-- We getting the name grom 'user_task' that we created in a controller -->
<!-- 			<?php $this->load->view($mainn_content); ?> -->

			<?php
			//alert showing the successful UPDATE
			if ($this ->session->flashdata('task_assigned')):
			  ?>
			  <h4>Email: <?php echo $this_user->email; ?></h4>
			  <h4>Tel: <?php echo $this_user->phone_number; ?></h4>
			  <p class = "alert alert-success" >
			    <?php echo $this ->session->flashdata('task_assigned');?>
			  </p>

			<?php endif; ?>

		</div>
	</div>


</div>




