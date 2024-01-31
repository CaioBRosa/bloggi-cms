<?= $this->extend('layouts/blog/index') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/blog/partials/header') ?>

<div class="row tm-row tm-mb-60">
    <div class="col-12">
        <hr class="tm-hr-primary  tm-mb-55">
    </div>
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="assets/img/about-02.jpg" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2">John Henry</h2>
                <h3 class="tm-h3 mb-3">CEO/Founder</h3>
                <p class="mb-0 tm-line-height-short">
                    Aliquam non vulputate lectus, vel ultricies diam. Suspendisse at ipsum
                    hendrerit, vestibulum mi id, mattis tortor.
                </p>
            </div>
        </div>
    </div>
    <div class="col-lg-6 tm-mb-60 tm-person-col">
        <div class="media tm-person">
            <img src="assets/img/about-03.jpg" alt="Image" class="img-fluid mr-4">
            <div class="media-body">
                <h2 class="tm-color-primary tm-post-title mb-2">Timy Cake</h2>
                <h3 class="tm-h3 mb-3">Project Director</h3>
                <p class="mb-0 tm-line-height-short">
                    Quisque in bibendum elit, in egestas turpis. Vestibulum ornare sollicitudin congue.
                    Aliquam lorem mi, maximus at iaculis ut.
                </p>
            </div>
        </div>
    </div>
</div>
<?= $this->include('layouts/blog/partials/footer') ?>
</main>
</div>

<?= $this->endSection() ?>