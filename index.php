<?php include_once 'includes/templates/header.php'; ?>

  <section class="seccion contenedor">
    <h2>The best conference in Software Development</h2>
    <p>Malaga Software Conference is an international software development conference that helps software teams adopt new trends and technologies. 
      Malaga Software conference features 9 editorial tracks over three days with 6 industry experts from companies 
      such as Google, Uber, Slack, Dropbox, Twitter, and more.
    </p>
  </section><!--seccion-->
  <section class="programa">
    <div class="contenedor-video">
      <div class="imagen-talleres"></div>
      <!--
        <video autoplay loop poster="../img/bg-talleres.jpg">
          <source src="video/video.mp4" type="video/mp4">
          <source src="video/video.webm" type="video/webm">
          <source src="video/video.ogv" type="video/ogg">
        </video>
      -->  
    </div><!--contenedor.video-->

    <div class="contenido-programa">
      <div class="contenedor">
        <div class="programa-evento">
            <h2>Schedule of the Event</h2>
            <nav class="menu-programa">
                <a href="#talleres"><i class="fas fa-code"></i> Workshops</a>
                <a href="#conferencias"><i class="fas fa-comment"></i> Conferences</a>
                <a href="#seminarios"><i class="fas fa-university"></i> Seminars</a>
            </nav>

            <div id="talleres" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Google Digital Workshop</h3>
                <p><i class="far fa-clock"></i></i> 16:00 PM</p>
                <p><i class="fas fa-calendar"></i> 25th August</p>
                <p><i class="fas fa-user"></i> Mark LaVine</p>
              </div>
            
              <div class="detalle-evento">
                <h3>IBM Blockchain Networks</h3>
                <p><i class="far fa-clock"></i></i> 20:00 PM</p>
                <p><i class="fas fa-calendar"></i> 25th August</p>
                <p><i class="fas fa-user"></i> Stuart Smith</p>
              </div>
              <a href="calendario.php" class="boton derecha">See all</a>
            </div><!--talleres-->

            <div id="conferencias" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>Design of Interfaces</h3>
                <p><i class="far fa-clock"></i></i> 16:00 PM</p>
                <p><i class="fas fa-calendar"></i> 25th August</p>
                <p><i class="fas fa-user"></i> Mark LaVine</p>
              </div>
            
              <div class="detalle-evento">
                <h3>Cybersecurity Main Problems</h3>
                <p><i class="far fa-clock"></i></i> 20:00 PM</p>
                <p><i class="fas fa-calendar"></i> 25th August</p>
                <p><i class="fas fa-user"></i> Stuart Smith</p>
              </div>
              <a href="calendario.php" class="boton derecha">See all</a>
            </div><!--conferencias-->

            <div id="seminarios" class="info-curso ocultar clearfix">
              <div class="detalle-evento">
                <h3>HTML, CSS and JavaScript</h3>
                <p><i class="far fa-clock"></i></i> 16:00 PM</p>
                <p><i class="fas fa-calendar"></i> 25th August</p>
                <p><i class="fas fa-user"></i> Mark LaVine</p>
              </div>
            
              <div class="detalle-evento">
                <h3>Symfony VS Laravel</h3>
                <p><i class="far fa-clock"></i></i> 20:00 PM</p>
                <p><i class="fas fa-calendar"></i> 25th August</p>
                <p><i class="fas fa-user"></i> Stuart Smith</p>
              </div>
              <a href="calendario.php" class="boton derecha">See all</a>
            </div><!--seminarios-->

        </div><!--programa-evento-->
      </div><!--contenedor-->
    </div><!--contenido-programa-->
  </section><!--programa-->
  
  <section class="invitados contenedor">
    <h2>Our Guests</h2>
    <ul class="lista-invitados">
      <li>
        <div class="invitado">
          <img src="img/invitado1.jpg" alt="Invitado">
          <p>Mark LaVine</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado2.jpg" alt="Invitado">
          <p>Charlie Miller</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado3.jpg" alt="Invitado">
          <p>Stuart Smith</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado4.jpg" alt="Invitado">
          <p>Nicole Jones</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado5.jpg" alt="Invitado">
          <p>Spencer James</p>
        </div>
      </li>
      <li>
        <div class="invitado">
          <img src="img/invitado6.jpg" alt="Invitado">
          <p>Olivia Williams</p>
        </div>
      </li>
    </ul>
  </section>

  <div class="contador parallax">
    <div class="contenedor">
      <ul class="resumen-evento">
        <li><p class="numero"></p> Guests</li>
        <li><p class="numero"></p> Workshops</li>
        <li><p class="numero"></p> Guests</li>
        <li><p class="numero"></p> Conferences</li>
      </ul>
    </div>
  </div>

  <section class="precios seccion">
    <h2>Prizes</h2>
    <div class="contenedor">
      <ul class="lista-precios">
        <li>
            <div class="tabla-precio">
              <h3>One Day Pass</h3>
              <p class="numero">30€</p>
              <ul>
                <li><i class="fas fa-check"></i> Free Lunch</li>
                <li><i class="fas fa-check"></i> All conferences</li>
                <li><i class="fas fa-check"></i> All the workshops</li>
              </ul>
              <a href="registro.php" class="boton hollow">Buy It</a>
            </div>  
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Full Pass</h3>
            <p class="numero">50€</p>
            <ul>
              <li><i class="fas fa-check"></i> Free Lunch</li>
              <li><i class="fas fa-check"></i> All conferences</li>
              <li><i class="fas fa-check"></i> All the workshops</li>
            </ul>
            <a href="registro.php" class="boton">Buy It</a>
          </div>  
        </li>
        <li>
          <div class="tabla-precio">
            <h3>Two Day Pass</h3>
            <p class="numero">45€</p>
            <ul>
              <li><i class="fas fa-check"></i> Free Lunch</li>
              <li><i class="fas fa-check"></i> All conferences</li>
              <li><i class="fas fa-check"></i> All the workshops</li>
            </ul>
            <a href="registro.php" class="boton hollow">Buy It</a>
          </div>  
        </li>
      </ul>
    </div>
  </section>

  <div id="mapa" class="mapa"></div>

  <section class="seccion">
    <h2>Opinions</h2>
    <div class="opiniones contenedor">

      <div class="opinion">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent posuere lectus mauris, sed pretium mi cursus sed.
            Duis consectetur lacinia libero, nec ultrices orci ultrices eget.
          </p>
          <footer class="info-opinion">
            <img src="img/testimonial.jpg" alt="Imgen Opinion">
            <cite>Mark LaVine <span>Diseñador en Google</span></cite>
          </footer>
        </blockquote>
      </div><!--comentario-->
      <div class="opinion">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent posuere lectus mauris, sed pretium mi cursus sed.
            Duis consectetur lacinia libero, nec ultrices orci ultrices eget.
          </p>
          <footer class="info-opinion">
            <img src="img/testimonial.jpg" alt="Imgen Opinion">
            <cite>Mark LaVine <span>Diseñador en Google</span></cite>
          </footer>
        </blockquote>
      </div><!--comentario-->
      <div class="opinion">
        <blockquote>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
            Praesent posuere lectus mauris, sed pretium mi cursus sed.
            Duis consectetur lacinia libero, nec ultrices orci ultrices eget.
          </p>
          <footer class="info-opinion">
            <img src="img/testimonial.jpg" alt="Imgen Opinion">
            <cite>Mark LaVine <span>Diseñador en Google</span></cite>
          </footer>
        </blockquote>
      </div><!--comentario-->

    </div>
  </section>

  <div class="newsletter parallax">
    <div class="contenido contenedor">
      <p>Subscribe to the Newsletter</p>
      <h3>Malaga Software Conference</h3>
      <a href="#" class="boton transparente">Subscribe</a>
    </div>
  </div>

  <section class="contador seccion contenedor">
    <h2>Remaining</h2>
    <ul>
      <li><p id="dias" class="numero"></p>days</li>
      <li><p id="horas" class="numero"></p>hours</li>
      <li><p id="minutos" class="numero"></p>minutes</li>
      <li><p id="segundos" class="numero"></p>seconds</li>
    </ul>
  </section>

<?php include_once 'includes/templates/footer.php'; ?>
