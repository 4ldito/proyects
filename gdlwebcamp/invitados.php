<?php include_once "includes/templates/header.php" ?>

<section class="seccion contenedor">
    <h2>Invitados</h2>
    <?php try {
        require_once('includes/funciones/bd_conexion.php');
        $sql = "SELECT * FROM invitados";
        $resultado = $conn->query($sql);
    } catch (\Exception $e) {
        echo $e->getMessage();
    } ?>

    <section class="invitados contenedor seccion">
        <div class="lista-invitados">
            <!-- <h2>Nuestros Invitados</h2> -->
            <?php while ($invitados = $resultado->fetch_assoc()) { ?>
                <div class="columns-4 invitado-info">
                    <a class="invitadotexto" href="#invitado<?php echo $invitados["id_invitado"]; ?> ">
                    <img src="img/<?php echo $invitados["url_imagen"]; ?>" alt="Imagen Invitado">
                    <div class="nombre-invitado">
                        <p class="nombre"><?php echo $invitados["nombre_invitado"] . " " . $invitados["apellido_invitado"]; ?></p></a>
                    </div>
                </div>
                <div style="display:none;">
                    <div class="invitadotexto" id="invitado<?php echo $invitados["id_invitado"]; ?> ">
                        <h2><?php echo $invitados["nombre_invitado"] . " " . $invitados["apellido_invitado"]; ?></h2>
                        <img src="img/<?php echo $invitados["url_imagen"]; ?>" alt="Imagen Invitado">
                        <p><?php echo $invitados["descripcion_invitado"]; ?></p>
                    </div>
                </div>
            <?php } ?>
        </div>
    </section>
    </div>
    <?php $conn->close(); ?>
</section>

<?php include_once "includes/templates/footer.php" ?>