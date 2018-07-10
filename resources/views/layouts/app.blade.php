<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Task</title>

        

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    </head>
    <body>
    <header>
	<div class="navbar navbar-dark bg-dark box-shadow">
		<div class="container d-flex justify-content-between">
			<a class="navbar-brand d-flex align-items-center" href="{{ url('/') }}"><svg class="mr-2"
			height="20" viewbox="0 0 24 24" width="20" xmlns=
			"http://www.w3.org/2000/svg">
			<path d=
			"M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z">

			</path>
			<circle cx="12" cy="13" r="4">
			</circle></svg> <strong>Very amazing image hosting website</strong></a>
		</div>
	</div>
</header>

    <main role="main">
    <div class="album py-5 bg-light">
		<div class="container">

        @yield('content')

        </div>
    </div>
    </main>

   </body>
</html>
