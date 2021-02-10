<?php
    class Anuncios {
        
        public function getMeusAnuncios() {
            global $pdo;
            $array = array();

        /*    
            $sql = $pdo->prepare("SELECT
            *,
            (SELECT anuncios_imagens.url FROM anuncios_images WHERE anuncios_images.
            id_anuncio = anuncio.id limit 1) as url 
            FROM anuncios 
            WHERE id_usuario = :id_isuario");
        */

            $sql->bindValue(":id_isuario", $_SESSION['cLogin']);
            $sql->execute();

            if($sql->rowCount() > 0) {
                $array = $sql->fetchAll();
            }

            return $array;
        }

    }
?>