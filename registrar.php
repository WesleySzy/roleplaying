<!doctype html>
<html lang="pt-br">

<head>
    <!-- Required meta tags -->
    <?php include_once('include/head.php'); ?>
    <!-- Bootstrap CSS -->
</head>

<body>

    <div class="sidenav d-flex flex-column justify-content-center pl-5 text-white">
        <h2>Werle<br> Mama nois</h2>
        <p>Perugini nao pode usar isso!</p>
    </div>
    <div class="main">
        <div class="col-md-6">
            <div class="login-form">
                <form action="gravar/gravar_cadastro.php" method="post">
                    <div class="form-group">
                        <label>Nome</label>
                        <input type="text" class="form-control" id="nome" name="nome" placeholder="Insira seu nome...">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Insira seu e-mail...">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" id="senha" name="senha" placeholder="Insira sua senha...">
                    </div>
                    <button type="submit" class="btn btn-black">Cadastrar</button>
                    <a href="<?php echo $urlProjeto?>login" class="btn btn-secondary">Voltar</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include_once('include/scripts-footer.php'); ?>

</body>

</html>