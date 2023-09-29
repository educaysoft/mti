<style>
#lista5 {
    counter-reset: li; 
    list-style: none; 
    *list-style: decimal; 
    font: 1.5vw 'trebuchet MS', 'lucida sans';
    padding: 0;
    margin-bottom: 4em;
    text-shadow: 0 1px 0 rgba(255,255,255,.5);
}

#lista5 ol {
    margin: 0 0 0 2em; 
}

#lista5 {
    list-style-type: none;
    list-style-type: decimal !ie; /*IE 7- hack*/
     
    margin: 0;
    margin-left: 1em;
    padding: 0;
     
    counter-reset: li-counter;
}

#lista5 > li{
    position: relative;
    margin-bottom: 1.5em;
    padding: 1.5em;
    background-color: #eaeaea;
}

#lista5 > li:before {
    position: absolute;
    top: -0.3em;
    left: -0.5em;
    width: 1.8em;
    height: 1.2em;
     
    font-size: 2em;
    line-height: 1.2;
    font-weight: bold;
    text-align: center;
    color: #464646;
    background-color: #d0d0d0;
     
    transform: rotate(-20deg);
    -ms-transform: rotate(-20deg);
    -webkit-transform: rotate(-20deg);
    z-index: 99;
    overflow: hidden;
     
    content: counter(li-counter);
    counter-increment: li-counter;
}



</style>




<div id="equipo" style="border-top: 2px solid green;  width: 90%; margin:20px auto; display: inline-block;">
<div id="xxx" class="w3-container" style="margin-left:10px; margin-top:10px;  padding: 0px; width: 100%; height: 100%; display: inline-block;">
    


<main>

  <div class="album py-5 ">
    <div class="container">

 	<div class="row py-lg-5 text-center container">
      		<div class="col-lg-6 col-md-8 mx-auto">
        		<h1 class="fw-light">Actividades previa de ingreso </h1>
      		</div>
    	</div>



 <div class="my-3 p-3 bg-body rounded shadow-sm">
<ol id="lista5">
    <li><b> Preinscripción.</b><br>A través de formulario de preinscripción, correo electrónico o acercandose a las oficina de post-grado.</li>
    <li><b>Recepción y calificación de carpeta.</b> <br> En una carpeta color naranja debe entregar los documento.  </li>
    <li><b>Entrevista a aspirantes</b>.<br>La entrevista sera realizada por el Coordinador de la maestría y/o la Directora de postgrado. </li>
    <li><b>Prueba de conocomientos.</b><br> El aspirante deberá demostrar un conocimiento básico en el áres de informática.</li> 
    <li><b>Notificación de aceptación.</b><br> Después de haber superado la entrevista y la prueba de conocimiento el aspirante será notificado de su aceptación. </li> 
    <li><b>Matrículas.</b><br>En esta etapa se debe pagar el valor de la matrícula $300</li> 
    <li><b>Suscripción de contrato de pago.</b><br>El aspirante debe dejar establecido su forma de pago.</li> 
    <li><b>Inicio de actividades de clase.</b><br>Después de superar todas las etapas anteriores estará listo para inciar su primera clase que inicio del 17 de octubre.</li> 
</ol>






    </div>

    <small class="d-block text-end mt-3">
    <!---  <a href="congresoutlvte-tematicas.php">Todas las temáticas</a> -->
    </small>

  


      
    </div>
  </div>

</main>

</div>
</div>
