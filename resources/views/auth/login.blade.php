<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>DEWEP\TUKIS</title>
  
  
  
      <link rel="stylesheet" href="{{asset('css/styles1.css')}}">

  
</head>

<body>
  <div class="wrapper">
	<div class="container">
		<h1><strong>Aplicación Comercial</strong></h1>
		
		<form class="form" method="POST" action="/login">
			{!!csrf_field()!!}
			<input type="email" name="email" placeholder="Email">
			<input type="password" name="password" placeholder="Password">
			<input type="submit" value="Login">
		</form>
	</div>
	
	<ul class="bg-bubbles">
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script  src="{{asset('js/index.js')}}"></script>

</body>
</html>
