<html>
	<head>
		<title>@yield('title')</title>

		<meta name="description" content="@yield('description')" />

		<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
		<link rel="stylesheet" href="//cdn.datatables.net/1.10.3/css/jquery.dataTables.min.css">
		<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
	</head>
	<body>

		<div class="navbar navbar-default navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="{{ URL::asset('/') }}">Books</a>
				</div>
				<div class="navbar-collapse collapse">
					<ul class="nav navbar-nav">
						<li <?php echo (Request::is('/')) ? ' class="active"' : ''; ?>><a href="{{ URL::asset('/') }}">View List</a></li>
						<li <?php echo (Request::is('books/add')) ? ' class="active"' : ''; ?>><a href="{{ URL::asset('books/add') }}">Add a book</a></li>
					</ul>
				</div><!--/.nav-collapse -->
			</div>
		</div>

		<div class="container">
@yield('content')
		</div>

		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
		<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
		<script src="//cdn.datatables.net/1.10.3/js/jquery.dataTables.min.js"></script>
		<script src="{{ URL::asset('js/custom.js') }}"></script>
	</body>
</html>