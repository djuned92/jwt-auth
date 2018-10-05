<!DOCTYPE html>
<html>
<head>
	<title>Example - PDF</title>
</head>
<body>
	<style type="text/css">
		@page {
			header: page-header;
			footer: page-footer;
		}
	</style>

	<htmlpageheader name="page-header">
		Your Header Content
	</htmlpageheader>
		<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

		<p style="text-align: justify;">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
		tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
		quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
		consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
		cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
		proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
		<p>List of name</p>
		<ul>
			@foreach($name as $key => $value)
				<li>{{ $value }}</li>
			@endforeach
		</ul>
	<htmlpagefooter name="page-footer">
		Your Footer Content
	</htmlpagefooter>
</body>
</html>