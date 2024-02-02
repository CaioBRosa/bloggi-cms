<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title><?= $title ?></title>
	<meta name="description" content="The small framework with powerful features">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

	<!-- HEADER: MENU + HEROE SECTION -->
	<header>

		<div class="heroe">

			<h1>Welcome to CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>

			<h2>Clique <?php echo anchor('logout', 'aqui') ?> para sair.</h2>
			<p><?php echo session()->nome ?></p>

		</div>

	</header>


</body>

</html>