<!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html lang="es">

<head>
	<title>Dance School Entertainment Category Bootstrap Responsive Web Template | Home :: W3layouts</title>
	<!-- Meta tag Keywords -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="UTF-8" />
	<meta name="keywords"
		content="Dance School Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
	<script>
		addEventListener("load", function () {
			setTimeout(hideURLbar, 0);
		}, false);

		function hideURLbar() {
			window.scrollTo(0, 1);
		}
	</script>
	<!-- //Meta tag Keywords -->

	<!-- Custom-Files -->
<link rel="stylesheet" href="{{ asset("assets/$theme/css/bootstrap.css")}}">
	<!-- Bootstrap-CSS -->
<link rel="stylesheet" href="{{ asset("assets/$theme/css/style.css")}}" type="text/css" media="all" />
	<!-- Style-CSS -->
<link href="{{ asset("assets/$theme/css/font-awesome.min.css")}}" rel="stylesheet">
	<!-- Font-Awesome-Icons-CSS -->
	<!-- //Custom-Files -->
<link href="{{ asset("assets/animate/animate.css")}}" rel="stylesheet">
	<!-- Web-Fonts -->
	<link
		href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i&amp;subset=devanagari,latin-ext"
		rel="stylesheet">
	<link
		href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i&amp;subset=cyrillic,cyrillic-ext,greek,greek-ext,latin-ext,vietnamese"
		rel="stylesheet">
	<!-- //Web-Fonts -->
</head>

<body>

    <!-- main -->
    @include("theme/$theme/main")
    <!-- /main -->

    <!-- classes  -->
    @include("theme/$theme/classes")
    <!-- /classes  -->

    <!-- welcome -->
    @include("theme/$theme/welcome")
    <!-- /welcome -->

    <!-- testimonials -->
    @include("theme/$theme/testimonials")
    <!-- /testimonials -->

    <!-- slides images -->
    @include("theme/$theme/slides")
    <!-- /slides images -->

    <!-- footer -->
    @include("theme/$theme/footer")
    <!-- /footer -->


    <script src="https://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.4.1.min.js"></script>
</body>
</html>
