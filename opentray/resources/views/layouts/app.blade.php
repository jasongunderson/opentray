<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Metron Dietary</title>
	<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1.0">
	<link href="{{ asset('css/dietary.css') }}" rel="stylesheet">
	<script type="text/javascript" src="{{ asset('cjs/dietary.js') }}"></script>
</head>
<body>
	<div id="mainContainer">
		<div id="header">
			<p class="header_button">Login</p>
		</div>
		<div id="mainw_window">
			@yield('content')
		</div>
	</div>

</body>
</html>