
<!DOCTYPE HTML>
<html>
<head>
<title>Old Age Home Management System || Search</title>
<link href="public/css/bootstrap.css" rel='stylesheet' type='text/css' />
<!-- Custom Theme files -->
<link href="public/css/styles.css" rel='stylesheet' type='text/css' />
<!--Custom Theme files-->


<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
</script>
<script src="public/js/jquery-1.8.3.min.js"></script>
<script src="public/js/modernizr.custom.js"></script>
<!--start-smoth-scrolling-->
<script type="text/javascript" src="public/js/move-top.js"></script>
<script type="text/javascript" src="public/js/easing.js"></script>
		
		<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!--start-smoth-scrolling-->
<!--webfonts-->
	<link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic,700italic|Niconne' rel='stylesheet' type='text/css'>
	<!--webfonts-->
</head>
<body>

	
<?php include_once('includes/header.php');?>	
</div>	
<!--/start-footer-->
	<!--content-->

	<div class="content">
	<div class="blog">
		<div class="container">	
			<div class="blog-top">		
				<h3>Services</h3>
			</div>

    <div class="col-md-12" style="margin-top:4%">
            <div class="col-md-4 service-images">
              <img src="public/images/c2.jpg" class="img-responsive" alt=""/>
            </div>
            <div class="col-md-8 service-images-text">
              <div class="inner-text">
                
			  <h2>24 Hour Care</h2>
              </div>
              <h2>Rehabilitation Care</h2>
              <h2>Palliative Care</h2>
            </div>
          </div>
        
</div>

		</div>	
	</div>
	<?php include_once('includes/footer.php');?>
								<script type="text/javascript">
									$(document).ready(function() {
										/*
										var defaults = {
								  			containerID: 'toTop', // fading element id
											containerHoverID: 'toTopHover', // fading element hover id
											scrollSpeed: 1200,
											easingType: 'linear' 
								 		};
										*/
										
										$().UItoTop({ easingType: 'easeOutQuart' });
										
									});
								</script>
				<a href="/home" id="toTop" class="scroll" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>



</body>
</html>			