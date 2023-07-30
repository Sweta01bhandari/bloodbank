
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Swet's Design Emporium</title>
	<!--googlefonts-->
	<!--custom CSS-->
	<link rel="stylesheet" type="text/css" href="images/css/style.css"/>
	<!--bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
<header class="top">
	<nav>
		<a href="index.html">
			<img src="images/logo1.png"/>
		</a>
	    <div class="nav-links">
		<ul>
			<li><a href="#">Home</a></li>
			<li><a href="{{ route('login') }}">Admin</a></li>
            <li><a href="{{ route('donor.login') }}">Donor</a></li>
            <li><a href="{{ route('patient.login') }}">Patient</a></li>
		</ul>
	</div>
</nav>
	</header>	
</body>
</html>