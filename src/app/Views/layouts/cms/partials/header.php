<!-- header -->
    <h1>Lista de Informações</h1>
    <ul>
        <li>
            <a href="<?= base_url('app/dashboard') ?>">Dashboard</a>
            <ul>
                <li><a href="#">Visão geral</a></li>
                <li><a href="#">Estatísticas</a></li>
                <li><a href="#">Usuários</a></li>
            </ul>
        </li>
        <li>
            <a href="<?= base_url('app/posts') ?>">Posts</a>
            <ul>
                <li><a href="#">Criar novo post</a></li>
                <li><a href="#">Gerenciar posts</a></li>
                <li><a href="#">Categorias</a></li>
            </ul>
        </li>
        <li>
            <a href="<?= base_url('app/categories') ?>">Categorias</a>
            <ul>
                <li><a href="#">Criar nova categoria</a></li>
                <li><a href="#">Gerenciar categorias</a></li>
            </ul>
        </li>
        <li>
            <a href="<?= base_url('app/comments') ?>">Comentários</a>
            <ul>
                <li><a href="#">Aprovar comentários</a></li>
                <li><a href="#">Gerenciar comentários</a></li>
            </ul>
        </li>
        <li>
            <a href="<?= base_url('app/website') ?>">Website</a>
            <ul>
                <li><a href="#">Configurações gerais</a></li>
                <li><a href="#">Aparência</a></li>
                <li><a href="#">Plugins</a></li>
            </ul>
        </li>
        <li>
            <a href="<?= base_url('app/settings') ?>">Configurações</a>
            <ul>
                <li><a href="#">Perfil</a></li>
                <li><a href="#">Conta</a></li>
                <li><a href="#">Notificações</a></li>
            </ul>
        </li>
        <li>
            <a href="<?= base_url('logout') ?>">logout</a>
        </li>
    </ul>