<?php 
$session = \Config\Services::session();
$ultimoId = $session->get('ultimo_id');
?>
<?= $this->extend('layouts/blog/index') ?>

<?= $this->section('content') ?>
        <?= $this->include('layouts/blog/partials/header') ?>
        <div class="row tm-row">
            <!-- artigos -->
            <?php if ($post): ?>
                <?php foreach ($post as $post): ?>
                    <article class="col-12 col-md-6 tm-post">
                        <hr class="tm-hr-primary">
                        <a href="<?= base_url('post/'.$post['post_id']) ?>" class="effect-lily tm-post-link tm-pt-60">
                            <div class="tm-post-link-inner">
                                <img src="assets/img/<?= $post['post_thumbnail'] ?>" alt="Image" class="img-fluid">
                            </div>
                            <?php if ($post['post_id'] == $ultimoId): ?>
                                <span class="position-absolute tm-new-badge">Novo</span>
                            <?php endif; ?>
                            <!-- titulo do post -->
                            <h2 class="tm-pt-30 tm-color-primary tm-post-title"><?= $post['post_title'] ?></h2>
                            <!-- titulo do post -->
                        </a>
                        <!-- descricao do post -->
                        <p class="tm-pt-30">
                            <?= $post['post_description'] ?>
                        </p>
                        <!-- descricao do post -->
                        <!-- autor e data do post -->
                        <div class="d-flex justify-content-between tm-pt-45">
                            <span class="tm-color-primary"><?= $post['post_date'] ?></span>
                            <span class="tm-color-primary">by <?= $post['post_author'] ?></span>
                        </div>
                        <!-- autor e data do post -->
                        <hr> 
                    </article>
                <?php endforeach ?>
            <?php else: ?>
                <p>Posts não encontrado.</p>
            <?php endif; ?> 
            <!-- artigos -->
        </div>
        <!-- paginas -->
        <div class="row tm-row tm-mt-100 tm-mb-75">
            <div class="tm-prev-next-wrapper ">
            </div>
            <div class="tm-paging-wrapper">
                <span class="d-inline-block mr-3">Pagina</span>
                <nav class="tm-paging-nav d-inline-block">
                    <?= $pager->links('default', 'pagination'); ?>
                </nav>
            </div>
        </div>
        <!-- paginas -->
        <?= $this->include('layouts/blog/partials/footer') ?>
    </main>
</div>
<?= $this->endSection() ?>