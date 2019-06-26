<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Marc Takeuchi v.6 | Account Manager Seattle, WA</title>
	<meta NAME="description" CONTENT="Welcome to the personal site of Marc Takeuchi">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">

	<link href="styles/style.css" rel="stylesheet" type="text/css" media="all" />

	<style>
		.buildout {
			margin-top: 100px;
		}
	</style>

</head>

<body>


<?php include 'includes/header.php';?>


<section class="quote buildout">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="quote1-txt">
					<div id="buildout"></div>
					<script type="text/javascript" src="//buildout.com/api.js?v8"></script>
						<script type="text/javascript">
                            BuildOut.embed({
                                token:     "ba10171cce57cb0e580bc3d4e626d5f3f88e3ba6",
                                plugin:    "inventory",
                                target:    "buildout"
                            });
							
							// include buildout plugin info here
							$('#buildout iframe')[0].scrolling = "no";
							var adjustZoom = function() {
							if ($(window).width() > 640) { return; }
							$('#buildout iframe').width(640);
							var zoom = $("#buildout").width() / 640;
							var marginBottom = "-" + Math.round($("#buildout").height() * (1 - zoom)) + "px"
							$("#buildout").css({ "margin-bottom": marginBottom, "-ms-zoom": zoom, "-moz-transform": "scale(" + zoom + ")", "-moz-transform-origin": "0 0", "-o-transform": "scale(" + zoom + ")", "-o-transform-origin": "0 0", "-webkit-transform": "scale(" + zoom + ")", "-webkit-transform-origin": "0 0"})
							};
							adjustZoom();
							setTimeout(adjustZoom, 1000);
							setTimeout(adjustZoom, 2000);
							setTimeout(adjustZoom, 4000);
							setTimeout(adjustZoom, 6000);
							setTimeout(adjustZoom, 8000);
							setTimeout(adjustZoom, 10000);
							$(window).resize(adjustZoom);      				// End buildout plugin info 
                        </script>
				</div>
			</div>
		</div>
	</div>
</section>



<section class="footer">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<?php include 'includes/footer.php';?>
			</div>
		</div>
	</div>

</section>


<script src="https://code.jquery.com/jquery-3.1.0.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>
	$(document).ready(function () {
	    $(window).scroll(function () {
	        $('.hideme').each(function (i) {
	            var bottom_of_object = $(this).position().top + $(this).outerHeight();
	            var bottom_of_window = $(window).scrollTop() + $(window).height();

	            if (bottom_of_window > bottom_of_object) {

	                $(this).animate({ 'opacity': '1' }, 1000);
	            }
	        });
	    });
	});
</script>

</body>
</html>