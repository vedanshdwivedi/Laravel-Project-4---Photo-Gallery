<!DOCTYPE html>
<html>
<head>
	<title>PhotoShow</title>
	<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.3.1/css/foundation.css">
</head>
<body>
	@include('inc.topbar')
	<br>
	<div class="row">
		@include('inc.messages')
		@yield('content')
	</div>
</body>
</html>