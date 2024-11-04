<!doctype html>
<html lang=nl> 

<?php include('includes/head.php') ?>
<title>Cookies pagina</title>
	<script>
		function akkoord(){
			location.href = 'begin.php';

		}
		function nietakkoord(){
			location.href = 'https://www.google.com';
		}
	</script>
<body>
	<div class="container">
		<div class="jumbotron">
			<h1 class="display-4">CCO fotowedstrijd</h1>
	</div>
	<div class ="col tegel knoppen">
		<p>Deze website maakt gebruik van cookies. Wil je cookies accepteren?</p>
		<p>
			<button onclick="akkoord()" class="btn-outline-dark btn-lg">
			<button onclick="nietakkoord()" class="btn-outline-dark btn-lg">
		</p>
</body>
</html>
