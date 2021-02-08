<?php require 'pages/header.php'; ?>

    <div class="container">
        <h1>Cadastre-se</h1>

        <?php
            require 'classes/usuarios.class.php';
            $u = new Usuarios();

            if(isset($_POST['nome']) && !empty($_POST['nome'])) {
                $nome = addslashes($_POST['nome']);
                $email = addslashes($_POST['email']);
                $senha = $_POST['senha'];
                $telefone = addslashes($_POST['telefone']);
            

                if(!empty($nome) && !empty($email) && !empty($senha)) {
                    if($u->cadastrar($nome, $email, $senha, $telefone)) {
                        ?>
                        <div class="alert alert-success">
                            <strong>Parabéns</strong>
                            Cadastrado com sucesso. <a href="login.php" class="alert-link">Faça o login</a>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="alert alert-warning">
                            Usuário já existe!. <a href="login.php" class="alert-link">Faça o login</a>
                        </div>
                        <?php
                    }

                }else {
                    ?>
                    <div class="alert alert-warning">
                        Preencha todos os campos!
                    </div>
                    <?php
                }
            }
        ?>

        <form method="POST">
            <div class="mb-3">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" name="nome" id="nome">
            </div>
            
            <div class="mb-3">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" name="email" id="email">
            </div>
            
            <div class="mb-3">
                <label for="senha" class="form-label">Senha:</label>
                <input type="password" class="form-control" name="senha" id="senha">
            </div>
            
            <div class="mb-3">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="text" class="form-control" name="telefone" id="telefone">
            </div>
            <button type="submit" class="btn btn-primary" value="Cadastrar">Cadastrar</button>
        </form>
    </div>

<?php require 'pages/footer.php'; ?>