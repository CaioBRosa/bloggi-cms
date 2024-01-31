<?php

use CodeIgniter\Pager\PagerRenderer;

/**
 * @var PagerRenderer $pager
 */
$pager->setSurroundCount(2);
?>

<nav aria-label="<?= lang('Pager.pageNavigation') ?>">
	<ul class="pagination">
		<?php foreach ($pager->links() as $link) : ?>
			<li class="tm-paging-item <?= $link['active'] ? 'active' : '' ?>">
				<a class="mb-2 tm-btn tm-paging-link" href="<?= $link['uri'] ?>">
					<?= $link['title'] ?>
				</a>
			</li>
		<?php endforeach ?>
	</ul>
</nav>
