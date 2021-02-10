<?php require 'pages/header.php'; ?>

    <div class="container">
        <h1>Login</h1>

        <?php
            require 'classes/usuarios.class.php';
            $u = new Usuarios();

            if(isset($_POST['email']) && !empty($_POST['email'])) {
                $email = addslashes($_POST['email']);
                $senha = $_POST['senha'];
                
                if($u->login($email, $senha)) {
                    ?>
                        <script type="text/javascript">window.location.href="./"</script>
                    <?php
                }else {
                    ?>
                    <div class="alert alert-warning">
                       Usuário e/ou senha estão incorretos!
                    </div>
                    <?php
                }
            }
        ?>

        <form method="POST">
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>
            
            <button type="submit" class="btn btn-primary" value="Fazer login">Login</button>
        </form>
    </div>

<?php require 'pages/footer.php'; ?>