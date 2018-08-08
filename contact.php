<!DOCTYPE HTML>

<html>
	<title>Software Engineer</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="author" content="William Ma">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/css/mdb.min.css">
	<link rel="stylesheet" type="text/css" href="./all.css">

	<body>
		<nav class="navbar navbar-expand-lg navbar-light mx-auto" style="background-color: #ffffff">
			<div class="container">
				<a class="navbar-brand" href="./index.html">William Ma</a>
				<button class="navbar-toggler collapsed" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>

				<div class="navbar-collapse collapse" id="navbarSupportedContent">
					<ul class="navbar-nav mr-auto">
						<li class="nav-item">
							<a class="nav-link" href="./index.html">Home</a>
						</li>
						<li class="nav-item ">
							<a class="nav-link" href="./biography.html">Biography</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" href="./portfolio.html">Portfolio</a> <!-- TODO: Change active colors -->
						</li>
						<li class="nav-item active">
							<a class="nav-link active" href="#">Contact <span class="sr-only">(current)</span></a>
						</li>
					</ul>
					<div class="social-media">
						<a href="https://www.linkedin.com/in/william-ma-856aa27b/" class="fab fa-linkedin fa-lg"></a>
						<a href="https://github.com/williamma64" class="fab fa-github-square fa-lg"></a>
					</div>
				</div>
			</div>
		</nav>
		<div class="containter">
		<section class="section">

			<h2 class="h1-responsive font-weight-bold text-center my-5">Talk to me</h2>
			<p class="text-center w-responsive mx-auto mb-5">If you have any questions or concerns, don't hesitate to contact me.</p>
			<div class="row">
				<div class="col-md-10 col-lg-6 offset-lg-3 offset-md-1 mb-md-0 mb-5">
					<form id="contact-form" name="contact-form" action="mail.php" method="POST">

						<div class="row">

							<div class="col-md-5 col-lg-6">
								<div class="md-form mb-0">
									<input type="text" autocomplete="off" id="name" name="name" class="form-control">
									<label for="name">Your name</label>
								</div>
							</div>

							<div class="col-md-5 col-lg-6">
								<div class="md-form mb-0">
									<input type="text" autocomplete="off" id="email" name="email" class="form-control">
									<label for="email" class="">Your email</label>
								</div>
							</div>

						</div>

						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="md-form mb-0">
									<input type="text" autocomplete="off" id="subject" name="subject" class="form-control">
									<label for="subject" class="">Subject</label>
								</div>
							</div>
						</div>

						<div class="row">
							<div class="col-md-12 col-lg-12">
								<div class="md-form mb-0">
									<textarea type="text" id="message" name="message" rows="1" class="form-control md-textarea"></textarea>
									<label for="message">Your message</label>
								</div>
							</div>
						</div>
					</form>

					<div class="text-center text-md-left">
						<a class="btn btn-primary" onclick="validateForm()">Send</a>
					</div>
					<div class="status" id="status"></div>
				</div>

				<div class="col-md-12 col-lg-12 text-center">
	        <ul class="list-unstyled mb-0">
	          <li class="list-inline-item"><i class="fa fa-map-marker fa-2x"></i>
	            <p>Sacramento, CA, USA</p>
	          </li>

	      	</ul>
	    	</div>
	    </div>
						
		</section>
		</div>
		<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
		<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.4/js/mdb.min.js"></script>
		<script>new WOW().init();</script>

		<script>

		function validateForm() {

    	document.getElementById('status').innerHTML = "Sending...";
    	formData = {
        	'name'     : $('input[name=name]').val(),
        	'email'    : $('input[name=email]').val(),
        	'subject'  : $('input[name=subject]').val(),
        	'message'  : $('textarea[name=message]').val()
    	};


   		$.ajax({
    		url : "mail.php",
    		type: "POST",
    		data : formData,
    		success: function(data, textStatus, jqXHR) {

        	$('#status').text(data.message);
        	if (data.code) //If mail was sent successfully, reset the form.
        	$('#contact-form').closest('form').find("input[type=text], textarea").val("");
    	},
    	error: function (jqXHR, textStatus, errorThrown)
    	{
        	$('#status').text(jqXHR);
    	}
			});

		}
		
    </script>
		
	</body>
</html>
