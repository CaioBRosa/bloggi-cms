<?= $this->extend('layouts/blog/index') ?>
<?= $this->section('content') ?>
<?= $this->include('layouts/blog/partials/header') ?>
<hr class="tm-hr-primary  tm-mb-55">
<div class="row tm-row tm-mb-120">
    <div class="col-12">
        <h2 class="tm-color-primary tm-post-title tm-mb-60">Entre em Contato</h2>
    </div>
    <div class="col-lg-7 tm-contact-left">
        <form method="POST" action="" class="mb-5 ml-auto mr-0 tm-contact-form">
            <div class="form-group row mb-4">
                <label for="name" class="col-sm-3 col-form-label text-right tm-color-primary">Nome</label>
                <div class="col-sm-9">
                    <input class="form-control mr-0 ml-auto" name="name" id="name" type="text" required>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label for="email" class="col-sm-3 col-form-label text-right tm-color-primary">Email</label>
                <div class="col-sm-9">
                    <input class="form-control mr-0 ml-auto" name="email" id="email" type="email" required>
                </div>
            </div>
            <div class="form-group row mb-4">
                <label for="subject" class="col-sm-3 col-form-label text-right tm-color-primary">Assunto</label>
                <div class="col-sm-9">
                    <input class="form-control mr-0 ml-auto" name="subject" id="subject" type="text" required>
                </div>
            </div>
            <div class="form-group row mb-5">
                <label for="message" class="col-sm-3 col-form-label text-right tm-color-primary">Mensagem</label>
                <div class="col-sm-9">
                    <textarea class="form-control mr-0 ml-auto" name="message" id="message" rows="8"
                        required></textarea>
                </div>
            </div>
            <div class="form-group row text-right">
                <div class="col-12">
                    <button class="tm-btn tm-btn-primary tm-btn-small">Enviar</button>
                </div>
            </div>
        </form>
    </div>
    <div class="col-lg-5 tm-contact-right">
        <div class="mb-4 tm-color-gray">
            120 Lorem ipsum dolor sit amet,
            consectetur adipiscing 10550
        </div>
        <span class="d-block">
            Tel: 060-070-0980
        </span>
        <span class="mb-4 d-block">
            Email: info@company.com
        </span>
        <p class="mb-5 tm-line-height-short">
            Maecenas eu mi eu dui cursus
            consequat non eu metus. Morbi ac
            turpis eleifend, commodo purus
            eget, commodo mauris.
        </p>
        <ul class="tm-social-links">
            <li class="mb-2">
                <a href="https://facebook.com" class="d-flex align-items-center justify-content-center">
                    <i class="fab fa-facebook"></i>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://twitter.com" class="d-flex align-items-center justify-content-center">
                    <i class="fab fa-twitter"></i>
                </a>
            </li>
            <li class="mb-2">
                <a href="https://youtube.com" class="d-flex align-items-center justify-content-center">
                    <i class="fab fa-youtube"></i>
                </a>
            </li>
            <li class="mb-2 ">
                <a href="https://instagram.com" class="d-flex align-items-center justify-content-center mr-0">
                    <i class="fab fa-instagram"></i>
                </a>
            </li>
        </ul>
    </div>
</div>
<?= $this->include('layouts/blog/partials/footer') ?>
</main>
</div>
<?= $this->endSection() ?>