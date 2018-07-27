<!DOCTYPE html>
<html>
<head>
	<title>Rental Mobil - Login</title>
	<meta charset="utf-8">
	<meta name=description content="">
	<meta name=viewport content="width=device-width, initial-scale=1">

	<!-- CSRF Token -->

	<!-- JS -->
	<script type="text/javascript" src="public/js/jquery.js"></script>
	<script type="text/javascript">
		function getAdmin() {
			var data = '';
			$.ajax({
				url: 'http://localhost/rentalmobil/controller/test.php',
				type: 'GET',
				dataType: 'json',
			})
			.done(function(rest) {
				$('#place').html(rest.username);
			})
			.fail(function(e) {
				console.log(e);
			})
			.always(function() {
				console.log("complete");
			});
		}

		$(document).ready(function() {
			getAdmin();
		});
	</script>
</head>
<body>
	<div id="place"></div>
</body>
</html>