<br>
<div class="container-fluid">

<div class="row">
    <div class="col-sm-3">
<!-- ///Some code// -->
    </div>


    <div class="col-sm-9">
      <?php if($this->session->userdata('logged_in')) : ?>
       <h2>Your latest tasks published</h2>
       <hr>
       <!-- https://getbootstrap.com/docs/4.0/content/tables/ -->
       <table class="table table-striped">
         <tr>
           <th>Task name</th>
           <th>Created on</th>
           <th>View</th>
         </tr>
       <!--  we add this statement to prevent a crush if the user has no lists saved -->
      <?php if(isset($mytasks)) : ?>

      <?php foreach($mytasks as $task): ?>
         <tr>
           <td><?php echo $task->task_name; ?></td>
           <td><?php echo $task->publication_date; ?></td>
           <!-- $task->id is comming from db as we retrieved the array of the mytasks and then use the object of task $task -->
           <td><a href="<?php echo base_url();?>tasks/show/<?php echo $task->id?>">View task</a></td>
         </tr>
      <?php endforeach; ?>
      <?php endif; ?>
       </table>
       <br>
       <br>
      <?php endif; ?>
    </div>
  </div>
</div>
