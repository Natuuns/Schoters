
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Logo Nav - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/nathan.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" rel="stylesheet">

  </head>

  <body>

  

    <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-light bg-light">

<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
</button>

<div class="collapse navbar-collapse" id="navbarSupportedContent">
<ul class="navbar-nav mr-auto dropdown__custom">
<li class="nav-item dropdown">
<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
<span class="navbar-toggler-icon"></span>
</a>
<div class="dropdown-menu" aria-labelledby="navbarDropdown">
<a class="dropdown-item" href="#">Action</a>
<a class="dropdown-item" href="#">Another action</a>
<div class="dropdown-divider"></div>
<a class="dropdown-item" href="#">Something else here</a>
</div>
</li>
</ul>

<ul class="navbar-nav mr-auto dropdown__custom2">
<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
<li class="nav-item"><a class="nav-link" href="#">Link</a></li>
</ul>

<ul class="navbar-nav mr-auto custom__navbar_ul">
	<li class="nav-item active">
		<form class="form-inline my-2 my-lg-0">
		<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
		</form>
	</li>
	<ul class="custom_ul">
		<li class="custom_li">
		    <a class="nav-link" href="#">Login <span class="sr-only">(current)</span></a>
		</li>
		<li class="custom_li">
			<a class="nav-link" href="#"><span class="fas fa-user" style="background-color:white; color: black; border-radius: 50%; padding:5px; "></span></a>
		</li>
		<li class="custom_li">
			<a class="nav-link" href="#"><span class="fas fa-bell" style="color: black;"></span></a>
		</li>
	</ul>
	
</ul>
<!-- <ul class="navbar-nav mr-auto">
          
        </ul> -->
</div>
<a class="navbar-brand" href="#">Schoters</a>
</nav>

    <!-- Page Content -->
    <div class="container">
      <h1 class="mt-5">Logo Nav by Start Bootstrap</h1>
      <p>The logo in the navbar is now a default Bootstrap feature in Bootstrap 4! Make sure to set the width and height of the logo within the HTML. For best results, it's recommended that you use an SVG image as your logo.</p>
    </div>
    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ ('/jquery/jquery.js') }}"></script>
    <script src="{{ ('/js/bootstrap.bundle.js') }}"></script>

  </body>

</html>

