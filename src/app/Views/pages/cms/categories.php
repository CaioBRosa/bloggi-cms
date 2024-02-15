<?= $this->extend('layouts/cms/index') ?>
<?= $this->section('content') ?>
	<?= $this->include('layouts/cms/partials/header') ?>
	<header>
		<div class="heroe">

			<h1>Welcome to CodeIgniter <?= CodeIgniter\CodeIgniter::CI_VERSION ?></h1>
			<p><?php echo session()->nome ?></p>

		</div>
	</header>
<?= $this->endSection() ?>