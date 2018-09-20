
<!-- Header -->
<div class="jumbotron text-center">

	<h1>Volunteer 2 Volunteer</h1> 
	<p>ANY HELP MATTERS</p> 
	<?php if($this->session->userdata('logged_in')) : ?>
 	<p><code>Welcome <?php echo $this->session->userdata('email');?></code></p>
 <?php endif; ?>	
</div>
	<!-- --Getting success / fail login messages--- -->

	<?php
	//Getting message after logging in, wether it was successful or not
	if ($this ->session->flashdata('login_success')):
		?>
		<p class = "alert alert-success" >
			<?php echo $this ->session->flashdata('login_success');?>
		</p>
	<?php endif; ?>


<!-- --Getting success / fail login messages--- -->

<!-- Block for requesting help -->
<div id="request" class="container-fluid">
	<div class="row">
		<div class="col-sm-6">
			<h2>Ask for help right now</h2>
			<p>Many of us don't like to ask for help. We may have been taught that it's a sign of weakness, so we cling to the notion, "I can do everything myself," even if it's no longer the case.</p>
			<br>
			<p>I suggest you practice asking for help.</p> 
			<br>
			<p> You may think you're placing a burden on the person you've contacted, yet if you did the very same thing for that person, you wouldn't consider it a burden...so, go for it!</p>
			<br>
			<a href="<?php echo base_url();?>tasks/add" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Ask for help</a>
		</div>
		<div class="col-sm-6">
			<img src="<?php echo base_url();?>assets/img/helper.jpg" height="400px" class="img-responsive thumbnail">
		</div>
	</div>
</div>

<!-- Block for offering help -->
<div id="offer" class="container-fluid bg-grey">
	<div class="row">
		<div class="col-sm-6">
			<img src="<?php echo base_url();?>assets/img/offer-help.jpg" height="400px" class="img-responsive thumbnail">
		</div>
		<div class="col-sm-6">
			<h2>Offer help</h2>
			<p>Volunteering gives you the chance to vote every day about the kind of community and world you want to live in. It gives you the opportunity to be apart of something bigger than yourself and use your civic responsibility for the greater good</p>
			<br>
			<p>Without people who are willing to sacrifice their time and skills to meaningful causes, a lot more people and animals would be worse off.</p>
			<br>
			<p>Are you ready for the next step?</p>
			<br>
			<a href="<?php echo base_url();?>tasks" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">View all requests</a>
		</div>
	</div>
</div>

<!-- Categories of works -->
<div id="works" class="container-fluid text-center">
	<h2>Works</h2>
	<h4>Types of work where you can help with</h4>
	<br>
	<div class="row">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off"></span>
			<h4>HOUSEHOLD</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off"></span>
			<h4>REPAIR</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off"></span>
			<h4>COURIER</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off"></span>
			<h4>EDUCATION</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off"></span>
			<h4>CARE</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off"></span>
			<h4>CONSULTATION</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off"></span>
			<h4>DESIGN</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off"></span>
			<h4>HANDCRAFT</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
		<div class="col-sm-4">
			<span class="glyphicon glyphicon-off"></span>
			<h4>OTHER</h4>
			<p>Lorem ipsum dolor sit amet..</p>
		</div>
	</div>
	<br>
	<a href="<?php echo base_url();?>tasks" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">View all tasks</a>
</div>


<!-- Ricent published posts -->
<div class="container-fluid text-center bg-grey">
	<h2>The recent published posts</h2>
	<h4>Click to reed more</h4>
	<div class="row">
		<div class="col-sm-4">
			<div class="thumbnail">
			<!-- 	<img src="http://www.yourdictionary.com/images/definitions/lg/13306.repair.jpg" alt="New York"> -->
				<img src="http://gobeshona.net/wp-content/themes/gobeshona/asset/images/author-icon.png?s=44&r=G">
				<p><strong>Auckland</strong></p>
				<p>Can anybody help me with my php assignment. It requires from you no more then 2 hours. Pleeeeease:)</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="thumbnail">
			<!-- 	<img src="http://www.yourdictionary.com/images/definitions/lg/13306.repair.jpg" alt="New York"> -->
				<img src="http://gobeshona.net/wp-content/themes/gobeshona/asset/images/author-icon.png?s=44&r=G">
				<p><strong>Dunedin</strong></p>
				<p>Urgent delivery to Auckland. Is anyvody driving to Auckland today or tomorrow. Really need to send documents to my family</p>
			</div>
		</div>
		<div class="col-sm-4">
			<div class="thumbnail">
			<!-- 	<img src="http://www.yourdictionary.com/images/definitions/lg/13306.repair.jpg" alt="New York"> -->
				<img src="http://gobeshona.net/wp-content/themes/gobeshona/asset/images/author-icon.png?s=44&r=G">
				<p><strong>Auckland</strong></p>
				<p>Is there anybody who can test my desktop application in order to find the bags?</p>
			</div>
		</div>
	</div>
</div>



<div id="myCarousel" class="carousel slide text-center" data-ride="carousel">
	<h2>What our volunteers say</h2>
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <h4>"It was an amazing experience! Our volunteer comunity is the best!<br>Thanks for your help, we repainted my granny's house just in 3 hours! Love you guys!"<br><span style="font-style:normal;">Michael Roe, Vice President, Comment Box</span></h4>
    </div>

    <div class="item">
       <h4>"One word... WOW!! Now I know how to spend my free time whenever I want to do something good for the comunity!"<br><span style="font-style:normal;">John Doe, Salesman, Rep Inc</span></h4>
    </div>

    <div class="item">
      <h4>"I'm proud to be a part of this community! Now I visit this wensite even more often than FB:) I'm I all right, doctor? "<br><span style="font-style:normal;">Chandler Bing, Actor, FriendsAlot</span></h4>
    </div>
  </div>

    <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div>


<!-- REGISTER SECTION -->
<div class="container-fluid bg-grey"> 
  <div class="row">
    <div class="col-sm-6">
    	<br>
    	<br>
    	<br>
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> Auckland, NZ</p>
      <p><span class="glyphicon glyphicon-phone"></span> +64 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> support@v2v.com</p> 
      <?php echo validation_errors('<p class = "alert alert-danger">') ?>
    </div>

      	<div class="col-sm-6">
  		<?php $this->load->view('volunteer/register'); ?>
  	</div>

  </div>
</div>
