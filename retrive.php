<?php
include('connect.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Kenya Opens Tournament</title>
	<link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:300i,400,500" rel="stylesheet">

	<link rel="stylesheet" href="vendor/themify-icons/themify-icons.css">
	<link rel="stylesheet" href="https://cdn.linearicons.com/free/1.0.0/icon-font.min.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.theme.default.min.css">
	<link rel="stylesheet" href="vendor/owl-carousel/owl.carousel.min.css">
	<link rel="stylesheet" href="vendor/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<body style="b">
	<!-- ================Offcanvus Menu Area =================-->

	<!--================End Offcanvus Menu Area =================-->

	<!--================Canvus Menu Area =================-->
	
	<!--================End Canvus Menu Area =================-->


	<section class="about section-margin mb-5">
		<div class="container">
			<div class="row align-items-center">
				<div class="col-sm-8" id="rsvp">
                <div class="form-panel">
                  <table class="table table-striped table-advance table-hover">
                    <div class="alert alert-info"><center>RSVP'd Users</center></div>
                    <hr>
                    <thead>
                      <tr>
                        <th></i> Id #</th>
                        <th><i class="fa fa-tags"></i> First Name</th>
                        <th><i class="fa fa-tags"></i> Last Name</th>
                        <th><i class="fa fa-envelope"></i> Email</th>
                        <th><i class=" fa fa-phone"></i> Telephone</th>
                        <th><i class="fa fa-briefcase"></i> Organisation</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                        $select="SELECT * FROM rsvps";
                        $select_query=mysqli_query($conn,$select);
                        while($row=mysqli_fetch_array($select_query)){ 
                     ?>
                      <tr>
                        <td><?php echo $row['id']?></td>
                        <td><?php echo $row['fname']?></td>
                        <td><?php echo $row['lname']?></td>
                        <td><?php echo $row['email']?></td>
                        <td><?php echo $row['tel']?></td>
                        <td><?php echo $row['org']?></td>
                      </tr>
                      <?php
                        }
                      ?>
                    </tbody>
                  </table>
                  <div class="form-group">
                    <button class="btn btn-round btn-info" onclick="window.location.href = 'retrive.php';" type="button">Refresh</button>
                  </div>
                  <div class="form-group">
                    <button class="btn btn-round btn-info" onclick="window.location.href = 'index.html';" type="button">Home</button>
                  </div>
                </div>
              <!-- /content-panel -->
            </div>
			</div>
		</div>
	</section>
	
	<footer class="footer footer-bg">
		<div class="container">
			<div class="row">


			</div>
			<div class="d-sm-flex justify-content-between footer__bottom top-border">
				<p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Errol Antonio</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				
			</div>
		</div>
	</footer>



	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>	
	<script src="vendor/bootstrap/bootstrap.bundle.min.js"></script>
	<script src="vendor/owl-carousel/owl.carousel.min.js"></script>

	<script>
		var testimonialCarousel = $('.testimonialCarousel');
      testimonialCarousel.owlCarousel({
      loop:true,
      margin:80,
      startPosition: 2,
      nav: false,
      responsiveClass:true,
      responsive:{
        0:{
            items:1
        },
        1000:{
            items:2,
            loop:true
        }
      }
    });

    var heroCarousel = $('.heroCarousel');
      heroCarousel.owlCarousel({
      loop:true,
      margin:10,
      nav: false,
      startPosition: 1,
      responsiveClass:true,
      responsive:{
        0:{
            items:1
        }
      }
	});

	var dropToggle = $('.menu_right > li').has('ul').children('a');
	dropToggle.on('click', function() {
		dropToggle.not(this).closest('li').find('ul').slideUp(200);
		$(this).closest('li').children('ul').slideToggle(200);
		return false;
	});

	$( ".toggle_icon" ).on('click', function() {
		$( 'body' ).toggleClass( "open" );
	});

	</script>
</body>
</html>