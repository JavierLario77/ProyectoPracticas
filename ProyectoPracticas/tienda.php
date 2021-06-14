<?php include_once 'includes/templates/header.php'; ?>

<section class="tienda">


    <h1>Tienda Virtual</h1>
        <div class="tienda2">
                <div style="width:300px;margin-left:30px;" class="reglas-tabla">
                    <p style="text-decoration:underline;">Reglas:</p>
                    <p>- Recibirás los artículos en tu casa en un plazo corto de tiempo.</p>
                    <p>- El formulario te informa cuando algo no está bien.</p>
                    <p>- Puedes pagar con tarjeta de crédito.</p>
                </div>
                <form action="validar_registro.php" style="margin-bottom:30px;" id="registro" class="registro formulario" method="post">
                        <div id="datos_usuario" class="registro caja datos_usuario clearfix">
                            <div class="campo">
                                <label for="nombre">Nombre:</label>
                                <input required type="text" id="nombre" name="nombre" placeholder="Tu Nombre">
                            </div>
                            <div class="campo">
                                <label for="apellido">Apellido:</label>
                                <input required type="text" id="apellido" name="apellido" placeholder="Tu Apellido">
                            </div>
                            <div class="campo">
                                <label for="email">Email:</label>
                                <input required type="email" id="email" name="email" placeholder="Tu Email">
                            </div> 
                            <div id="error">

                            </div>
                        </div>
                            <?php 
                            try {
                                require_once('includes/funciones/bd_conexion.php');
                                $sql="SELECT * FROM articulos";
                                $resultado=$conn->query($sql);
                            } catch (\Exception $e) {
                                echo $e->getMessage();
                            } ?>
                            <div class="flex-orden">
                            <?php while($articulos=$resultado->fetch_assoc()){ ?>
                                <div class="orden">
                                    <label for="nombre"><?php echo $articulos['nombre_articulo']; ?></label>
                                    <p><?php echo $articulos['descripcion']; ?></p>
                                    <p>Disponible en stock: <?php echo $articulos['stock']; ?></p>
                                    <p>Estado: <?php echo $articulos['estado']; ?></p>
                                    <p>Precio: <?php echo $articulos['precio']; ?>€</p>
                                    <img src="img/<?php echo $articulos['foto']; ?>" alt="">
                                    <br>
                                    <input type="number" id="<?php echo $articulos['clave']; ?>" min="0" max="<?php echo $articulos['maximo']; ?>" id="nombre" size="3" name="<?php echo $articulos['clave']; ?>[cantidad]" placeholder="0">
                                    <input type="hidden" id="<?php echo $articulos['clave']; ?>P" value="<?php echo $articulos['precio']; ?>" name="<?php echo $articulos['clave']; ?>[precio]">
                                    <input type="hidden" value="<?php echo $articulos['clave']; ?>" name="<?php echo $articulos['clave']; ?>[clave]">
                                    <input type="hidden" id="<?php echo $articulos['clave']; ?>N" value="<?php echo $articulos['nombre_articulo']; ?>" name="<?php echo $articulos['clave']; ?>[nombre]">
                                    <input type="hidden" id="<?php echo $articulos['clave']; ?>S" value="<?php echo $articulos['stock']; ?>" name="<?php echo $articulos['clave']; ?>[stock]">
                                </div>
                                <?php }
                                    $conn->close();
                                    ?>
                            
                            </div>
                            <div id="error2">

                            </div>
                            <div id="error3">

                            </div>
                        <input type="button" id="calcular" class="button" value="Calcular">
                        <div class="total">
                        <p>Resumen:</p>
                        <div id="lista-productos"></div>
                            <p>Total:</p>
                            <div id="suma-total"></div>
                            <input type="hidden" name="total_pedido" id="total_pedido">
                            <input type="submit" id="btnRegistro" name="submit" class="button" value="Pagar">
                        </div>
                </form>

            </div>
        </section>



    <script src="js/cotizador.js"></script>


<?php include_once 'includes/templates/footer.php'; ?>

