<?php include "inc/layout/header.php"; ?>

<div class="contenedor-barra">
    <h1>Agenda De Contactos</h1>
</div>

<div class="bg-amarillo sombra contenedor">
    <form action="#" id="contacto">
        <legend>Añada un Contacto<span>Todos los campos son obligatorios</span> </legend>
        <?php include "inc/layout/formulario.php"; ?>
    </form>
</div>

<main class="contenedor sombra bg-blanco contactos">
    <div class="contenedor-contactos">
        <h2>Contactos</h2>
        <input type="text" name="buscar" id="buscar" placeholder="Buscar Contactos" class="buscador sombra">
        <p class="total-contactos"><span>2</span> Contactos</p>

        <div class="contenedor-tabla">
            <table id="listado-contactos" class="listado-contactos">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Empresa</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Aldo</td>
                        <td>Aliscioni's</td>
                        <td>0934253455</td>
                        <td>
                            <a class="btn-editar btn" href="editar.php?id=1"><i class="fas fa-user-edit"></i></a>
                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Aldo</td>
                        <td>Aliscioni's</td>
                        <td>0934253455</td>
                        <td>
                            <a class="btn-editar btn" href="editar.php?id=1"><i class="fas fa-user-edit"></i></a>
                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>

                    <tr>
                        <td>Aldo</td>
                        <td>Aliscioni's</td>
                        <td>0934253455</td>
                        <td>
                            <a class="btn-editar btn" href="editar.php?id=1"><i class="fas fa-user-edit"></i></a>
                            <button data-id="1" type="button" class="btn-borrar btn">
                                <i class="fas fa-trash-alt"></i>
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

</main>

<?php include "inc/layout/footer.php"; ?>