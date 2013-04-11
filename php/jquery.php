<!DOCTYPE html>
<html>
<head>


	<style>
		a.test {
			font-weight: bold;
	}
	</style>
	<meta charset="utf-8">
	<title> Jquery </title>
</head>
	<body>
<a href="http://jquery.com">Jquery</a>
<br>
<br>
								<hr noshade size=7>
<br>
<br>

	<div class="sc_menu_wrapper">
		<div class="sc_menu">
<a title="Home" href="#"><img src="img/home.png" alt="Home"/></a>
<a title="HTML" href="#"><img src="img/html.png" alt="HTML"/></a>
<a title="CSS" href="#"><img src="img/css.png" alt="CSS"/></a>
<a title="Javascript" href="#"><img src="img/javascript.png" alt="Javascript"/></a><a title="Photoshop" href="#"><img src="img/photoshop.png" alt="Photoshop"/></a>
<a title="About" href="#"><img src="img/about.png" alt="About"/></a>
<a title="Contact" href="#"><img src="img/contact.png" alt="Contact"/></a>
		</div>
	</div>
<!-- CSS Stylesheet (normally in seperate file -->
<style type="text/css">
div.sc_menu_wrapper {
	position: relative;
	height: 5000px;
	width: 250px;

	margin-top: 30px;
	overflow: auto;
}
div.sc_menu {
	padding: 15px 0;
}
.sc_menu a {
	display: block;
	margin-bottom: 5px;
	width: 250px;

	border: 2px rgb(79, 79, 79) solid;
	-webkit-border-radius: 4px;
	-moz-border-radius: 4px;

 /* When image support is turned off */
	color: #fff;
	background: rgb(79, 79, 79);
}
.sc_menu a:hover {
	border-color: rgb(130, 130, 130);
	border-style: dotted;
}
.sc_menu img {
	display: block;
	border: none;
}

</style>
<script src="jquery-1.9.1.min.js"></script>
<script>
//jquery
$(document).ready(function() {
	// code
	$("a").addClass("test"); // instead of having to <b></b> every link 
	$("a").click(function(event) {
		alert("Thank you for learning jquery!");
		event.preventDefault();
		$(this).hide("slow"); // silly slowly disappearing link
	});	
});
</script>
	</body>
</html>
