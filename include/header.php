<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand text-primary" href="<?php $urlProjeto?>">____<i class="fab fa-accessible-icon fa-4x"></i></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
            aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse d-flex justify-content-end" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item active">
                    <a class="nav-link" href="<?php $urlProjeto?>home" <?php if ($paginaAtual == 1){echo "active";}?>>Pagina Inicial</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php $urlProjeto?>perfil" <?php if ($paginaAtual == 1){echo "active";}?>>Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php $urlProjeto?>configuracoes" <?php if ($paginaAtual == 1){echo "active";}?>>Configuracoes</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#" <?php if ($paginaAtual == 1){echo "active";}?>>Sair</a>
                </li>
            </ul>
        </div>
    </nav>
</header>