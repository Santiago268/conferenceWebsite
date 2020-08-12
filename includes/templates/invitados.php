 
  <section class="seccion contenedor">
    <h2>Our Guests</h2>
    <?php
        try{
            require_once('includes/funciones/bd_connection.php');
            $sql = " SELECT * FROM invitados";
           
            $resultado = $conn->query($sql);
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    ?>

    <ul class="lista-invitados">
        <?php while($invitados = $resultado->fetch_assoc() ){ ?>
            <li>
                <div class="invitado">
                    <a class='invitado_info' href="#invitado<?php echo $invitados['invitado_id']; ?>">
                        <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="Invitado">
                        <p><?php echo $invitados['nombre_invitado']." ".$invitados['apellido_invitado']; ?></p>
                    </a>
                </div>
            </li>
            <div style="display:none;">
                <div class='invitado_info' id='invitado<?php echo $invitados['invitado_id']; ?>'>
                    <h2><?php echo $invitados['nombre_invitado']." ".$invitados['apellido_invitado']; ?></h2>
                    <img src="img/<?php echo $invitados['url_imagen']; ?>" alt="Invitado">
                    <p><?php echo $invitados['descripcion']; ?></p>    
                </div>

            </div>
        <?php } ?>
    </ul>
    </section>
    
    <?php
        $conn->close();
    ?>
