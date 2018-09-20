<br>
<div class="container-fluid">
	<div class="row">
		<div class="col-sm-4">
<!-- ///Some code// -->
		</div>


		<div class="col-sm-8">
			<!-- WARNING MESSAGES -->
			<?php
			//result for the task created
			if ($this ->session->flashdata('task_created')):
				?>
				<p class = "alert alert-success" >
					<?php echo $this ->session->flashdata('task_created');?>
				</p>
			<?php endif; ?>

			<?php
			//result for the task created
			if ($this ->session->flashdata('task_create_failed')):
				?>
				<p class = "alert alert-danger" >
					<?php echo $this ->session->flashdata('task_create_failed');?>
				</p>
			<?php endif; ?>
			<!-- WARNING MESSAGES -->

			
			<!-- Creataing a list of tasks -->
			<h1>List of all tasks where we need your help</h1>
			<hr>
			<ul class="list_items">
			<?php
			foreach ($tasks as $task): ?>
			<li>
				<!-- the statement below provide a link to a particular id of the help-request from db -->
			<a href="<?php echo base_url();?>tasks/show/<?php echo $task->id ?>"><?php echo $task->task_name.'<br>'; ?></a>

			<?php  echo $task->task_description.'<br>'; ?>
			<hr>
			<?php endforeach; ?>
			</li>
			</ul>

			<a href="<?php echo base_url();?>tasks/add"> + Create a new task</a>
		</div>
	</div>
</div>
