<?php include_once 'includes/templates/header.php'; ?>
 
  <section class="seccion contenedor">
    <h2>Events Schedule</h2>
    <?php
        try{
            require_once('includes/funciones/bd_connection.php');
            $sql = " SELECT evento_id, nombre_evento, fecha_evento, hora_evento, cat_evento, nombre_invitado, apellido_invitado ";
            $sql.= " FROM eventos ";
            $sql.= " INNER JOIN categoria_evento ";
            $sql.= " ON eventos.id_cat_evento = categoria_evento.id_categoria ";
            $sql.= " INNER JOIN invitados ";
            $sql.= " ON eventos.id_inv = invitados.invitado_id ";
            $sql.= " ORDER BY evento_id ";
           
            $resultado = $conn->query($sql);
        }catch (\Exception $e){
            echo $e->getMessage();
        }
    ?>

    <div class="calendario">
        <?php
            $calendario = array();
            while($eventos = $resultado->fetch_assoc()){ 

                //Obtiene la fecha del evento
                $fecha = $eventos['fecha_evento'];

                $evento = array(
                    'titulo' => $eventos['nombre_evento'],
                    'fecha' => $eventos['fecha_evento'],
                    'hora' => $eventos['hora_evento'], 
                    'categoria' => $eventos['cat_evento'],
                    'invitado' => $eventos['nombre_invitado'] . " " .$eventos['apellido_invitado']
                );
    
                $calendario[$fecha][] = $evento;

                ?>
                
            <?php } //While ?>

            <?php
                //Imprime todos los eventos 
                foreach($calendario as $dia => $lista_eventos){ ?>
                <h3>
                    <i class="fa fa-calendar"></i>
                    <?php    
                        echo date ("F j, Y", strtotime($dia) ); 
                    ?>
                </h3>
                <?php foreach($lista_eventos as $evento) { ?>
                    <div class="dia">
                        <p class="titulo">
                            <pre>
                             <?php var_dump($evento); ?>
                            </pre>
                        </p>                    
                    </div>

                <?php } //foreach - lista_eventos ?>
            <?php } ?>

            <pre>
                <?php var_dump($calendario); ?>
            </pre>
        ?>

        
    </div>
    
    <?php
        $conn->close();
    ?>

  </section>

<?php include_once 'includes/templates/footer.php'; ?>