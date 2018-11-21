<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Unidad Educativa - @yield('title')</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  		<a class="navbar-brand" href="#">@yield('title1')</a>
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
		    <div class="navbar-nav">
		      <a class="nav-item nav-link" href="/">Home <span class="sr-only">(current)</span></a>
		      <a class="nav-item nav-link @yield('t')" href="/teachers/create">New Teachers</a>
		      <a class="nav-item nav-link @yield('s')" href="/students/create">New Students</a>
		      <a class="nav-item nav-link @yield('a')" href="/areas/create">New Areas</a>
		      <a class="nav-item nav-link @yield('c')" href="/courses">See Courses</a>
		      <a class="nav-item nav-link @yield('sh')" href="/schedules">See Schedules</a>
		    </div>
		</div>
	</nav>
	<div class="container">
		@yield('content')
	</div>
</body>
</html>