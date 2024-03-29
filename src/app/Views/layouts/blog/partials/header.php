<?php
$session = \Config\Services::session();

$ultimoPost = session()->get('ultimo_id');

if (!$ultimoPost) {
    $ultimoId = $post[0]['post_id'];
    $session->set('ultimo_id', $ultimoId);
}

$ultimoURI = 'post/' . $ultimoPost;
$currentURI = uri_string();

// Verifica se a URI atual corresponde ao último post e aplica a classe 'active' se necessário
$isActive = strpos($currentURI, $ultimoURI) !== false ? 'active' : '';
?>
<header class="tm-header" id="tm-header">
    <div class="tm-header-wrapper">
        <button class="navbar-toggler" type="button" aria-label="Toggle navigation">
            <i class="fas fa-bars"></i>
        </button>
        <!-- logo -->
        <div class="tm-site-header">
            <div class="mb-3 mx-auto tm-site-logo"><img src="<?= base_url('assets/img/icon-codigo.png') ?>" alt="dev"></div>
            <h1 class="text-center">Caio B. Rosa</h1>
        </div>
        <!-- logo -->
        <!-- navbar -->
        <nav class="tm-nav" id="tm-nav">
            <ul>
                <li class="tm-nav-item <?= (uri_string() === '') ? 'active' : ''; ?>">
                    <a href="<?= base_url('') ?>" class="tm-nav-link">
                        <i class="fas fa-home"></i>
                        Inicio
                    </a>
                </li>
                <?php if (isset($post)) : ?>
                    <li class="tm-nav-item <?= $isActive ?>">
                        <a href="<?= base_url($ultimoURI); ?>" class="tm-nav-link">
                            <i class="fas fa-pen"></i>
                            Último Post
                        </a>
                    </li>
                <?php endif; ?>        
                <li class="tm-nav-item <?= (uri_string() === 'sobre') ? 'active' : ''; ?>">
                    <a href="<?= base_url('sobre') ?>" class="tm-nav-link">
                        <i class="fas fa-user"></i>
                        Quem Sou
                    </a>
                </li>
                <li class="tm-nav-item <?= (uri_string() === 'contato') ? 'active' : ''; ?>">
                    <a href="<?= base_url('contato') ?>" class="tm-nav-link">
                        <i class="fas fa-comments"></i>
                        Contato
                    </a>
                </li>
            </ul>
        </nav>
        <!-- navbar -->
        <!-- informacoes pessoais -->
        <div class="tm-mb-65">
            <a rel="nofollow" href="https://github.com/CaioBRosa" target="_blank" class="tm-social-link">
                <i class="fab fa-github tm-social-icon"></i>
            </a>
            <a href="https://www.linkedin.com/in/caio-b-rosa-0440862b1/" target="_blank" class="tm-social-link">
                <i class="fab fa-linkedin tm-social-icon"></i>
            </a>
        </div>
        <p class="tm-mb-80 pr-5 text-white">
            Café e código: a vida do programador desde os tempos do COBOL, 
            e assim será até as IAs tomarem conta e pedirem café também!
        </p>
        <!-- logo -->
    </div>
</header>
<div class="container-fluid">
    <main class="tm-main">
        <!-- Search form -->
        <div class="row tm-row">
            <div class="col-12">
                <form method="GET" action="<?= base_url('search') ?>" class="form-inline tm-mb-80 tm-search-form">
                    <input class="form-control tm-search-input" name="query" type="text" placeholder="Pesquisar..."
                        aria-label="Search">
                    <button class="tm-search-button" type="submit">
                        <i class="fas fa-search tm-search-icon" aria-hidden="true"></i>
                    </button>
                </form>
            </div>
        </div>
        <!-- Search form -->