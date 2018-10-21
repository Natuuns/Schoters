
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Schoters</title>

    <!-- Bootstrap core CSS -->
    <link href="{{ asset('/css/bootstrap.css') }}" rel="stylesheet">
    <link href="{{ asset('/css/nathan.css') }}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" rel="stylesheet">

  </head>

  <body>

  

    <!-- Navigation -->
 <nav class="navbar navbar-expand-lg navbar-dark bg-light">

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
		<input class="form-control mr-sm-2 search_width" type="search" placeholder="Cari beasiswa apa?" aria-label="Search">
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
      <h1 class="mt-5">Personalize your Schoters homepage</h1>
      <p>Pick 5 top scholarship categories that you are interested to help us deliver the most relevant information with your preferences</p>
      <!-- <button type="button" value="" class="MyBtn">S1/Bachelor</button>
      <button type="button" value="" class="MyBtn">S2/Master</button>
      <button type="button" value="" class="MyBtn">S3/Ph.D</button>
      <button type="button" value="" class="MyBtn">Short Course</button> -->

      @foreach ($category as $ct)
	     <button type="button" value="{{ $ct['slug'] }}" class="MyBtn">{{ $ct['name'] }}</button>
	  @endforeach


    </div>
    <form action="{{ action('NathanController@show')}} " method="POST">
        {{ csrf_field() }}

    	<input type="hidden" name="selectedCat" id="selectedCat">
    	<div class="container">
	    	<button type="submit" id="submit" class="btn_submit">Done</button>
	    </div>
    </form>
    

    <!-- /.container -->

    <!-- Bootstrap core JavaScript -->
    <script src="{{ ('/jquery/jquery.js') }}"></script>
    <script src="{{ ('/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ ('/jquery/nathan.js') }}"></script>

  </body>

</html>


