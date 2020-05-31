<?php
$t = intval($_POST['eNviar']);
$op1 = $_POST['op1'];
$op2 = $_POST['op2'];
$op3 = $_POST['op3'];
$op4 = $_POST['op4'];
$op5 = $_POST['op5'];
$e = $_POST['lugar'];
if ($t == 1) {
  echo'<!DOCTYPE html>
  <html lang="es" dir="ltr"><!--Esta página debe de estar en u PHP con Echos-->
    <head>
      <meta charset="utf-8">
      <title>Confirmación del Pedido  |  Cafetería Coyote</title>
    </head>
    <body>
      <header>
        <section>
          <div class="nav">
            <!--Aquí va el Nav-->
          </div>
          <div class="título">
            <h1>Pedido Generado Exitósamete!</h1>
          </div>
        </section>
      </header>
      <section>
        <div class="info">
          <h2>Información del Pedido</h2>
        </div>
        <div class="alimentos">
          <table>
            <tr>
              <th>Alimentos:</th>
            </tr>
            <tr>
              <td>'.$op1.'</td><!--Aquí deveremos de colocar las variables igual de las opciones-->
            </tr>
            <tr>
              <td>'.$op2.'</td><!--Podemos hacer que si no está la opción en el pedido no se genere el "td" con la variable dentro-->
            </tr>
            <tr>
              <td>'.$op3.'</td><!--Eso es con un foreach y un if-->
            </tr>
            <tr>
              <td>'.$op4.'</td>
            </tr>
            <tr>
              <td>'.$op5.'</td>
            </tr>
          </table>
        </div>
        <div class="preparacion">
          <p>Tiempo de Preparación: (-)</p><!--Aquí irá un valor en imnutos definido por el tiempo de preparación de cada alimento-->
        </div>
        <div class="tolerancia">
          <p>Tiempo de Tolerancia: (-)</p><!--Aquí irá el timepo de tolerancia para recojer el pedido, este tenrá un mínimo de 5 minutos-->
        </div><!--Y cambiará a 10 minútos si es 15 para la siguiente hora, porque usualmente los profes te dejan salir a "comer"-->
        <div class="lugar">
          <p>Lugar de Entrega: '.$e.'</p><!--Aquí pondremos la variable de la opción selecionada en el lugar de entrega-->
        </div>
        <div class="cobro">
          <p>Monto Final: (-)</p><!--Aquí estará la suma de todos los preciós de cada alimento y modificación que se les halla echo-->
        </div><!--Esto asociando valores a cada alimento-->
      </section>
      <section>
        <div class="gracias">
          <h1>Gracias y provecho!</h1>
        </div>
        <div class="otro">
        <a href="../TEMPLATES/Maquetado.html"><button type="button" name="otropedido">Generar otro Pedido</button></a>
        </div>
        <div class="otro">
        <a href="../DYNAMICS/CerrarSesion.php"><button type="button" name="cerrar">Cerrar Sesión</button></a>
        </div>
      </section>
      <footer>
        <section>
          <div class="titulofooter">
            <h4><u>Footer</u></h4>
          </div>
          <div class="contacto">
            <a href="Contacto.html">Página de Contacto</a>
          </div>
          <div class="direccion">
            <img src="https://static.vecteezy.com/system/resources/previews/000/552/663/non_2x/geo-location-pin-vector-icon.jpg" alt="Pint Logo" width="20px">
            <p><a href="https://www.google.com.mx/maps/place/Escuela+Nacional+Preparatoria+N%C2%B0+6+%22Antonio+Caso%22+UNAM/@19.3521753,-99.1561553,17z/data=!3m1!4b1!4m5!3m4!1s0x85d1ffcf9cc30dbd:0xf8b434a6ebcd6c83!8m2!3d19.3521753!4d-99.1561553"><u>Corina 3, Del Carmen, Coyoacán, 04100 Ciudad de México, CDMX</u></a></p>
          </div>
          <div class="legal">
            <p>Copyright (c) 2020 Copyright Holder All Rights Reserved.</p>
          </div>
          <div class="autores">
            <p>Diego Vapnik, Montze Baez, Aranxta Junco, Diego Muriel.</p>
          </div>
        </section>
      </footer>
    </body>
  </html>';
}

?>
