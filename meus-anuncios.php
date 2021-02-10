<?php require 'pages/header.php'; ?>
    <div class="container">
        <h1>Meus Anúncios</h1>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Título</th>
                    <th>Valor</th>
                    <th>Ação</th>
                </tr>
            </thead>
            <?php
                require 'classes/anuncios.class.php';
                $a = new Anuncios();
                $anuncios = $a->getMeusAnuncios();

                foreach($anuncios as $anuncios):
            ?>
                <tr>
                    <td><img src="img/anuncios/<?php echo $anuncio['url'];?>" alt="" border="0"></td>
                    <td><?php echo $anuncio['titulo'];?></td>
                    <td>R$ <?php echo number_format(['valor'], 2); ?></td>
                    <td></td>
                </tr>
            <?php endforeach; ?>
        </table>
    </div>

<?php require 'pages/footer.php'; ?>