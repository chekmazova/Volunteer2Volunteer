<br>
<div class="container-fluid">
    <div class="row">
  		<div class="col-sm-3"><!--left col-->
        <br>
        <br>
        <br>
        <div class="text-center">
          <img src="<?php echo base_url();?>assets/img/volunteers/<?php echo $this_user->img_path; ?>" class="avatar img-circle img-thumbnail img-responsive" alt="avatar">
        <!--   <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar"> -->
          <h6>Upload a different photo...</h6>
          <?php 
          // $attribute = array('id'=> 'list_update_form', 'class' => 'form-horizontal');

          echo validation_errors('<p class = "alert alert-danger">') ?>

          <!-- We use special form for uploading the image -->
          <?php echo form_open_multipart('volunteers/profile'); ?>
          <p>
            <?php echo form_label('Upload Image'); ?>
            <?php $data=array(
              'name' => 'file_path',
              'class' => 'form-control'

            ); ?>
            <?php echo form_upload($data) ?>
          </p>
        </div><br>
      </div>

 
    	<div class="col-sm-9">
        <!-- WARNING MESSAGES -->
        <?php
        //The message after redirecting from the illigal access to the link
        if ($this ->session->flashdata('user_updated')):
          ?>
          <p class = "alert alert-success" >
            <?php echo $this ->session->flashdata('user_updated');?>
          </p>
        <?php endif; ?>
        <!-- WARNING MESSAGES -->

        <h2>Welcome, <?php echo $this_user->first_name ;?>!</h2>
          <hr>
              <?php
              //alert showing the successful UPDATE
              if ($this ->session->flashdata('list_updated')):
                ?>
                <p class = "alert alert-success" >
                  <?php echo $this ->session->flashdata('list_updated');?>
                </p>
              <?php endif; ?>

              <?php

              //user is controller we are colling, simmilar to POST
              $attribute = array('id'=> 'task_update_form', 'class' => 'form-horizontal');

              //form helper inside the codeignaighter
              echo form_open('volunteers/profile/'.$this_user->volunteer_id, $attribute);
              ?>
              <?php echo validation_errors('<p class = "alert alert-danger">') ?>


              <div class="row">
                <div class="col-sm-6">
                  <p>
                  <?php echo form_label("First name:");
                  $data = array('name' => 'first_name', 
                          'class' => 'form-control',
                          'value' => $this_user->first_name); //set value saves the value insite the input form
                  echo form_input($data);
                  ?>
                  </p>
                </div>

                <div class="col-sm-6">
                  <p>
                  <?php echo form_label("Last name:");
                  $data = array('name' => 'last_name',
                          'class' => 'form-control',
                          'value' => $this_user->last_name); //set value saves the value insite the input form
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
                          'class' => 'form-control',
                          'value' => $this_user->phone_number);
                  echo form_input($data);
                  ?>
                  </p>
                </div>
                <div class="col-sm-6">
                  <p>
                  <?php echo form_label("City:");
                  $data = array('name' => 'city', 
                          'class' => 'form-control',
                          'value' => $this_user->location);
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
                          'class' => 'form-control',
                          'disabled'    => 'disabled',
                          'value' => $this_user->email); //set value saves the value insite the input form
                  echo form_input($data);
                  ?>
                  </p>
                </div>
                <div class="col-sm-6">
                  <p>
                  <?php echo form_label("Password:");
                  $data = array('name' => 'password', 
                          'placeholder' => 'Set new password or you may use your current password',
                          'class' => 'form-control',
                          'value' => set_value('password'));
                  echo form_password($data);
                  ?>
                  </p>
                </div>
              </div>
              <hr>

              <p>
              <?php 
              $data = array('name' => 'button', 
                      'class' => 'btn-warning btn-lg active',
                      'value' => 'Update');
              echo form_submit($data);
              ?>
              </p>
              <?php echo form_close(); ?>

              <hr>
        </div><!--/col-9-->
    </div><!--/row-->
    <div class="col-md-12"> 
      <a href="<?php echo base_url();?>volunteers/profile" class="btn-secondary btn-lg active" role="button" aria-pressed="true">Reset</a>
<!--       <button class="btn-secondary btn-lg active" type="reset" style="text-align: right;"><i class="glyphicon glyphicon-repeat"></i> Reset</button> -->
    </div>
  </div>
  <br>
