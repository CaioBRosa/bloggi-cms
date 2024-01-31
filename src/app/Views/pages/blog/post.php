<?= $this->extend('layouts/blog/index') ?>

<?= $this->section('content') ?>
<div class="container-fluid">
        <?= $this->include('layouts/blog/partials/header') ?>
        <div class="row tm-row">
            <div class="col-lg-8 tm-post-col">
                <div class="tm-post-full">
                    <!-- if -->
                    <?php if ($post): ?>
                        <div class="mb-4">
                            <h2 class="pt-2 tm-color-primary tm-post-title"><?= $post['post_title']; ?></h2>
                            <p class="tm-mb-40"><?= $post['post_date']; ?><span class="pl-5"><?= $post['post_author']; ?></span></p>
                            <p><?= $post['post_content']; ?></p>
                        </div>
                    <?php else: ?>
                        <p>Post não encontrado.</p> 
                    <?php endif; ?>     
                    <!-- if -->
                </div>
            </div>
            <!-- os outros posts -->
            <aside class="col-lg-4 tm-aside-col">
                <div class="tm-post-sidebar">
                    <hr class="mb-3 tm-hr-primary">
                    <h2 class="tm-mb-40 tm-post-title tm-color-primary">Related Posts</h2>
                    <a href="#" class="d-block tm-mb-40">
                        <figure>
                            <img src="<?= base_url('assets/img/'.$post['post_thumbnail']) ?>" alt="Image" class="mb-3 img-fluid">
                            <figcaption class="tm-color-primary"><?= $post['post_title']; ?></figcaption>
                        </figure>
                    </a>
                </div>
            </aside>
            <!-- os outros posts -->
        </div>
        <?= $this->include('layouts/blog/partials/footer') ?>
    </main>
</div>
<?= $this->endSection() ?>