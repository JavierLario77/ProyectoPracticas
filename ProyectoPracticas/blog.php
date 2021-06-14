<?php include_once 'includes/templates/header.php'; ?>

<section class="blog">

    <h1>Blog</h1>
    <div class="blog0">
        <div class="reglas">
            <div style="margin-left:30px;" class="reglas-tabla">
                <p style="text-decoration:underline;">Reglas:</p>
                <p>- Se añaden publicaciones de todas las temáticas.</p>
                <p>- No se puede ofender a las demás personas.</p>
            </div>
        </div>
        <div class="blog2">
                    <?php 
                        try {
                            require_once('includes/funciones/bd_conexion.php');
                            $sql="SELECT * FROM post ORDER BY fecha DESC;";
                            $resultado=$conn->query($sql);
                        } catch (\Exception $e) {
                            echo $e->getMessage();
                        }
                    
                        while ($blog=$resultado->fetch_assoc()) {
            ?> <div class="post1" style="margin-bottom:40px;">
                            <div class="datos">
                                <p><strong>Nombre:</strong><?php echo $blog['nombre'];?></p>
                                <p><strong>Fecha:</strong><?php echo $blog['fecha'];?></p>
                                <p><strong>PublicaciÃ³n:</strong><?php echo $blog['post'];?></p>
                                <img src="img/<?php echo $blog['foto']; ?>" alt="">
                            </div>
                            <button class="comentario">Ver comentarios
                            <?php
                            $sql2="SELECT * FROM comentarios WHERE id_publicacion={$blog['id_post']}";
                            $resultado2=$conn->query($sql2);
                            while ($blog2=$resultado2->fetch_assoc()) {
                                ?> 
                                <div class="comentarios-ocultos">
                                    <hr>
                                    <p><strong>Nick:</strong><?php echo $blog2['nick'];?></p>
                                    <p><strong>Fecha:</strong><?php echo $blog2['fecha_coment'];?></p>
                                    <p><strong>Comentario:</strong><?php echo $blog2['comentario'];?></p>
                                </div> 
                                <?php } ?>
                            </button>
                            
                            <form action="dejar_comentario.php" id="registro" class="registro comentario2" method="post">
                                <div class="campo">
                                    <label for="nick">Nick:</label>
                                    <input required type="text" id="nick" name="nick" placeholder="Nick">
                                </div>
                                <div class="campo">
                                    <label for="comentario">Comentario:</label>
                                    <input required type="text" id="comentario" name="comentario" placeholder="Comentario">
                                </div>
                                <input type="hidden" id="btnRegistro" name="id_post" class="button" value="<?php echo $blog['id_post']; ?>">
                                <input type="submit" id="btnRegistro" name="submit" class="button" value="Dejar comentario">
                            </form>
                        
                        
                            
                </div>
                <?php
                            
                        }  
        
                        
                        $conn->close();
        
                        ?>
        </div>
        </div>
</section>


<?php include_once 'includes/templates/footer.php'; ?>