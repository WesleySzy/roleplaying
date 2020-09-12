<?php if($_SESSION['session_usuario'] != '' ) { header('Location: home'); }?>
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
                <form id="LoginForm" method="post">
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" class="form-control" id="email" name="email"
                            placeholder="Insira seu e-mail...">
                    </div>
                    <div class="form-group">
                        <label>Senha</label>
                        <input type="password" class="form-control" id="password" name="password"
                            placeholder="Insira sua senha...">
                    </div>
                    <button type="submit" class="btn btn-black">Entrar</button>
                    <a href="<?php echo $urlProjeto?>registrar" class="btn btn-secondary">Registrar</a>
                </form>
            </div>
        </div>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <?php include_once('include/scripts-footer.php'); ?>

    <script type="text/javascript" language="javascript">
        $(document).ready(function () {
            $('#LoginForm').submit(function (e) {
                e.preventDefault();
                $.ajax({
                    type: "POST",
                    url: 'login-check.php',
                    data: $(this).serialize(),
                    success: function (data) {
                        validar = data.trim();
                        if (validar === 'sucesso') {
                            location.href = "home";
                        } else {
                            alert(data);
                        }
                    }
                });
            });
        });
    </script>

</body>

</html>