
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body  >



   <nav class="navbar navbar-expand-md navbar-dark bg-dark ">
      <a class="navbar-brand" href="#">Md Omer Arafat</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarsExampleDefault">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/about">about</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="/contact">Contact</a>
          </li>
          
        </ul>
        
      </div>
    </nav>  



<div class="container" style="margin-top:30px">

  @if(Request::is('/'))
      @include('inc.dashboard')

  @endif
    <div class="row">
	    <div class="col-md-8  col-lg-8">
      
      @if(count($errors)>0)
      @foreach($errors->all()  as $error)
      <div class="alert alert-danger">
        {{ $error }}
      </div>

      @endforeach
      @endif

			@yield('content')

	    </div>


	    <div class="col-md-4  col-lg-4">
	   		@include('inc.sidebar')

	   </div>

    </div>


</div>



<footer id="footer" class="footer-copyright text-center py-2">
	<p>Copyright 2018 @copy , Md Omer Arafat</p>
	
</footer>

	

</body>
</html>