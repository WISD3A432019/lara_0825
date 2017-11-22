<html>
	<head>
		<title>@yield('title')|MyBlog</title>
	</head>
	
	<body>

		@include('layouts.partials.navigation')
		<divclass="container">
			@yield('content')
		</div>
	</body>
</html>
