<?php include_once "includes/templates/header.php" ?>
<section class="seccion contenedor">
    <h2>La mejor conferencia de Diseño Web en español</h2>
    <p>Dolor sit amet consectetur adipisicing elit. Tempora deleniti eaque magni cum sunt repellendus tenetur
        expedita
        quaerat ad labore saepe voluptatum dignissimos maiores, eos reiciendis animi quia, provident harum? Tempora
        deleniti eaque magni cum sunt repellendus tenetur expedita quaerat ad labore saepe voluptatum.</p>
</section>

<section class="programa">
    <div class="contenedor-video">
        <video autoplay loop poster="img/bg-talleres.jpg">
            <source src="video/video.mp4" type="video/mp4">
            <source src="video/video.webm" type="video/webm">
            <source src="video/video.ogv" type="video/ogg">
        </video>
    </div>
    <!--contenedor-video-->
    <div class="contenido-programa">
        <div class="contenedor">
            <div class="programa-evento">
                <h2>Programa del evento</h2>
                <nav class="menu-programa">
                    <a href="#talleres"><i class="fas fa-code"></i>Talleres</a>
                    <a href="#conferencias"><i class="fas fa-comment"></i>Conferencias</a>
                    <a href="#seminarios"><i class="fas fa-university"></i>Seminarios</a>
                </nav>

                <div id="talleres" class="info-curso ocultar clearfix">
                    <div class="info-evento">
                        <h3>HTML5, CSS3 y JavaScript</h3>
                        <p><i class="fas fa-clock"></i>16:00 hs</p>
                        <p><i class="fas fa-calendar"></i>19 de Enero</p>
                        <p><i class="fas fa-user"></i>Aldo Geremias Aliscioni</p>
                    </div>
                    <div class="info-evento">
                        <h3>Responsive Web Design</h3>
                        <p><i class="fas fa-clock"></i>20:00 hs</p>
                        <p><i class="fas fa-calendar"></i>19 de Enero</p>
                        <p><i class="fas fa-user"></i>Aldo Geremias Aliscioni</p>
                    </div>
                    <a href="#" class="btn float-right">Ver Todos</a>
                </div>
                <!--talleres-->

                <div id="conferencias" class="info-curso ocultar clearfix">
                    <div class="info-evento">
                        <h3>Cómo ser Freelancer</h3>
                        <p><i class="fas fa-clock"></i>10:00 hs</p>
                        <p><i class="fas fa-calendar"></i>20 de Enero</p>
                        <p><i class="fas fa-user"></i>Geraldine Echeveste</p>
                    </div>
                    <div class="info-evento">
                        <h3>Tecnologías del Futuro</h3>
                        <p><i class="fas fa-clock"></i>12:00 hs</p>
                        <p><i class="fas fa-calendar"></i>19 de Enero</p>
                        <p><i class="fas fa-user"></i>Geraldine Echeveste</p>
                    </div>
                    <a href="#" class="btn float-right">Ver Todos</a>
                </div>
                <!--conferencias-->
                <div id="seminarios" class="info-curso ocultar clearfix">
                    <div class="info-evento">
                        <h3>Diseño UI/UX para celular.</h3>
                        <p><i class="fas fa-clock"></i>17:00 hs</p>
                        <p><i class="fas fa-calendar"></i>18 de Enero</p>
                        <p><i class="fas fa-user"></i>Harold Garcia</p>
                    </div>
                    <div class="info-evento">
                        <h3>Aprende a programar en 20 minutos</h3>
                        <p><i class="fas fa-clock"></i>20:00 hs</p>
                        <p><i class="fas fa-calendar"></i>17 de Enero</p>
                        <p><i class="fas fa-user"></i>Harold Garcia</p>
                    </div>
                    <a href="#" class="btn float-right">Ver Todos</a>
                </div>
                <!--seminarios-->

            </div>
            <!--programa evento-->
        </div> <!-- contenedor-->
    </div>
    <!--contenido-programa-->
</section>

<section class="invitados contenedor seccion">
    <h2>Nuestros Invitados</h2>

    <div class="lista-invitados">
        <div class="columns-4 invitado-info">
            <img src="img/invitado1.jpg" alt="Imagen Invitado">
            <div class="nombre-invitado">
                <p class="nombre">Rafael Mendez</p>
            </div>
        </div>

        <div class="columns-4 invitado-info">
            <img src="img/invitado2.jpg" alt="Imagen Invitado">
            <div class="nombre-invitado">
                <p class="nombre">Carolina Jerrera</p>
            </div>
        </div>

        <div class="columns-4 invitado-info">
            <img src="img/invitado3.jpg" alt="Imagen Invitado">
            <div class="nombre-invitado">
                <p class="nombre">Geraldine Echeveste</p>
            </div>
        </div>

        <div class="columns-4 invitado-info">
            <img src="img/invitado4.jpg" alt="Imagen Invitado">
            <div class="nombre-invitado">
                <p class="nombre">Harold Garcia</p>
            </div>
        </div>

        <div class="columns-4 invitado-info">
            <img src="img/invitado5.jpg" alt="Imagen Invitado">
            <div class="nombre-invitado">
                <p class="nombre">Aldo Aliscioni</p>
            </div>
        </div>

        <div class="columns-4 invitado-info">
            <img src="img/invitado6.jpg" alt="Imagen Invitado">
            <div class="nombre-invitado">
                <p class="nombre">Marta Martinez</p>
            </div>
        </div>
    </div>
</section>

<div class="contador parallax">
    <div class="contenedor">
        <ul class="resumen-evento">
            <li>
                <p class="numero">0</p>
                <p>Invitados</p>
            </li>

            <li>
                <p class="numero">0</p>
                <p>Talleres</p>
            </li>

            <li>
                <p class="numero">0</p>
                <p>Días</p>
            </li>

            <li>
                <p class="numero">0</p>
                <p>Conferencias</p>
            </li>
        </ul>
    </div>
</div>

<section class="precios seccion">
    <h2>Precios</h2>
    <div class="contenedor">
        <ul class="lista-precios">
            <div class="tabla-precio columns-4">
                <li>
                    <h3>Pase por Día</h3>
                    <p class="numero">$20</p>
                    <ul>
                        <li><i class="fas fa-check"></i>Comida Gratis</li>
                        <li><i class="fas fa-check"></i>Todas las conferencias</li>
                        <li><i class="fas fa-check"></i>Todos los talleres</li>
                    </ul>
                    <a href="#" class="btn hollow">Comprar</a>
                </li>
            </div>

            <div class="tabla-precio columns-4">
                <li>
                    <h3>Todos los Días</h3>
                    <p class="numero">$50</p>
                    <ul>
                        <li><i class="fas fa-check"></i>Comida Gratis</li>
                        <li><i class="fas fa-check"></i>Todas las conferencias</li>
                        <li><i class="fas fa-check"></i>Todos los talleres</li>
                    </ul>
                    <a href="#" class="btn">Comprar</a>
                </li>
            </div>

            <div class="tabla-precio columns-4">
                <li>
                    <h3>Dos Días</h3>
                    <p class="numero">$35</p>
                    <ul>
                        <li><i class="fas fa-check"></i>Comida Gratis</li>
                        <li><i class="fas fa-check"></i>Todas las conferencias</li>
                        <li><i class="fas fa-check"></i>Todos los talleres</li>
                    </ul>
                    <a href="#" class="btn hollow">Comprar</a>
                </li>
            </div>
        </ul>
    </div>
</section>

<div id="mapa" class="mapa">

</div>

<section class="seccion contenedor">
    <h2>Testimoniales</h2>
    <div class="testimoniales">
        <div class="testimonial columns-4">
            <blockquote>
                <p><i class="fas fa-quote-left"></i>Ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eius
                    repudiandae ut, quas voluptas
                    dicta voluptate voluptates sequi consequatur maiores earum pariatur debitis a ea reprehenderit
                    adipisci provident magni itaque.</p>
                <footer class="info-testimonial">
                    <img src="img/testimonial.jpg" alt="Imagen Persona">
                    <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Google</span></cite>
                </footer>
            </blockquote>
        </div>
        <!--testimonial-->

        <div class="testimonial columns-4">
            <blockquote>
                <p><i class="fas fa-quote-left"></i>Ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eius
                    repudiandae ut, quas voluptas
                    dicta voluptate voluptates sequi consequatur maiores earum pariatur debitis a ea reprehenderit
                    adipisci provident magni itaque.</p>
                <footer class="info-testimonial">
                    <img src="img/testimonial.jpg" alt="Imagen Persona">
                    <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Google</span></cite>
                </footer>
            </blockquote>
        </div>
        <!--testimonial-->

        <div class="testimonial columns-4">
            <blockquote>
                <p><i class="fas fa-quote-left"></i>Ipsum dolor sit amet consectetur adipisicing elit. Nesciunt eius
                    repudiandae ut, quas voluptas
                    dicta voluptate voluptates sequi consequatur maiores earum pariatur debitis a ea reprehenderit
                    adipisci provident magni itaque.</p>
                <footer class="info-testimonial">
                    <img src="img/testimonial.jpg" alt="Imagen Persona">
                    <cite>Oswaldo Aponte Escobedo <span>Diseñador en @Google</span></cite>
                </footer>
            </blockquote>
        </div>
        <!--testimonial-->
    </div>
</section>


<div class="newsletter parallax">
    <div class="contenido contenedor">
        <p>regístrate al newsletter</p>
        <h3>GdlWebCamp</h3>
        <a href="#" class="btn transparente">Registro</a>
    </div>
</div>



<section class="seccion fondo-faltan">
    <h2>Faltan</h2>
    <div class="cuenta-regresiva contenedor">
        <ul class="numeros-lista">
            <li>
                <p id="dias" class="numero"></p>días
            </li>
            <li>
                <p id="horas" class="numero"></p>horas
            </li>
            <li>
                <p id="minutos" class="numero"></p>Minutos
            </li>
            <li>
                <p id="segundos" class="numero"></p>Segundos
            </li>
        </ul>
    </div>
</section>
<?php include_once "includes/templates/footer.php" ?>