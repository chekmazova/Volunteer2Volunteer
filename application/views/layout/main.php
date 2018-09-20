<!DOCTYPE html>
<html lang="en">
<head>
  <title>Place where people help each other | Volunteer 2 Volunteer</title>
<!--   default character encoding for HTML5 -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url();?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url();?>assets/css/themify-icons.css" />

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <script>
  $(document).ready(function(){
    // Add smooth scrolling to all links in navbar + footer link
    $(".navbar a, footer a[href='#myPage']").on('click', function(event) {

     // Make sure this.hash has a value before overriding default behavior
    if (this.hash !== "") {

      // Prevent default anchor click behavior
      event.preventDefault();

      // Store hash
      var hash = this.hash;

      // Using jQuery's animate() method to add smooth page scroll
      // The optional number (900) specifies the number of milliseconds it takes to scroll to the specified area
      $('html, body').animate({
        scrollTop: $(hash).offset().top
      }, 900, function(){

        // Add hash (#) to URL when done scrolling (default click behavior)
        window.location.hash = hash;
        });
      } // End if
    });
  })
  </script>
</head>

<!-- Settings for sroll menu -->
<body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">


<!-- Navigation menu -->
<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span> 
      		</button>
      		<a class="navbar-brand" href="<?php echo base_url();?>home/index"><img src="<?php echo base_url();?>assets/img/v2v-logo.png" height="75px"></a>
		</div>	
		<div class="collapse navbar-collapse" id="myNavbar">
			<ul class="nav navbar-nav navbar-right">
			  <li><a href="<?php echo base_url();?>home/index/#request">ASK FOR HELP</a></li>
			  <li><a href="<?php echo base_url();?>home/index#offer">OFFER HELP</a></li>
			  <li><a href="<?php echo base_url();?>home/index#works">TODOS</a></li>
			  <li><a href="<?php echo base_url();?>home/index#register">BECOME A VOLUNTEER</a></li>
			  <?php if ($this->session->userdata('logged_in')) : ?>
			  	<li class="nav-item dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown" id="navbarDropdown">MY ACCOUNT<span class="caret"></span></a> 
			  		<ul class="dropdown-menu">
			  			<li><a class="dropdown-item" href="<?php echo base_url();?>volunteers/profile">Profile</a></li>
			  			<li><a class="dropdown-item" href="<?php echo base_url();?>volunteers/mytasks">My Tasks</a></li>
			  			<li><a class="dropdown-item" href="<?php echo base_url();?>volunteers/logout">Logout</a></li>
			  		</ul>
			  	</li>
			  	<!-- <li class="nav-item"><a href="<?php echo base_url();?>lists" class="nav-link">MY ACCOUNT</a></li> -->
			  <?php else: ?>
				<li><a href="<?php echo base_url();?>volunteers/login1" class="nav-link">LOGIN</a></li>
			  <?php endif; ?>
			 <!--  <li><a href="<?php echo base_url();?>volunteers/login1" class="nav-link">LOGIN</a></li> -->
			</ul>
		</div>	
	</div>	
</nav>

<?php $this->load->view($main_content); ?>

<!-- Footer -->
<footer class="footer-top">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h1 style="color: white;">- 3567 -</h1>
				<h4>kindly deeds completed in 2018</h4>
				<h4>with</h4>
			</div>

			<div class="col-md-12">
				<p>&copy; 2018 Volunteer 2 Volunteer (v2v.com) </p>
			</div>
		</div>
	</div>
</footer>

</body>
</html>
