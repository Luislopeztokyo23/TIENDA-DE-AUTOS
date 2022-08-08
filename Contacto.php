<?php include_once '/xampp/htdocs/tienda/templates/includes/header.php';?>
<br>
<br>
<br>
<h1>Contactanos</h1>
<main class="contacto">
<form class="contacto">
<fieldset>
    <legend>Datos personales</legend>
    <div class="datos">

    
    <label>Nombre</label>
    <input type="text" name="nombre" placeholder="Tu Nombre" autocomplete="on" required>
    <br>

     <label>Apellido</label>
    <input type="text" name="apellido" placeholder="Tu Apellido" autocomplete="on" required>
     <br>
     <br>
     <br>

    <label>Sexo</label>
    <input type="radio" name="sexo" value="Hombre" checked autofocus >
    Hombre<br>

    <label>Sexo</label>
    <input type="radio" name="sexo" value="Mujer">
    Mujer<br>
    <br>
    

    <label>Fecha de nacimiento</label>
    <br>
    <input type="date" name="fecha_n">

    <input type="datetime-local" name="fecha2">
     
     <br>
     <br>
    

     <label>Correo</label>
     <input type="correo" name="correo" placeholder="correo@dominio.com">
     <br>
     <br>

    

     <label>Cuanto sabes de Autos</label>
     <input type="range" name="cuant_sab_dep" min="0" max="10">
     <br>
     <br>

     
    </fieldset>


    
      <legend>Información sobre el auto</legend>
    <label>Autos</label>
    <select class="equipos" name="equipos">
        <option value="nike">FERRARI</option>
        <option value="adidas">MUSTANG</option>
        <option value="gucci">PORSCHE</option>
        <option value="panam">HONDA</option>
        <option value="panam">NISSAN</option>
        <option value="panam">DODGE</option>
    </select>
    <br>
    <br>

<label>Que marca desea agregar</label>
<br>
<input list="propuesta" name="encuesta">
<datalist id="propuesta">
<option value="BUGATTI"></option>
<option value="BMW"></option>
<option value="LOTUS"></option>
<option value="MCLAREN"> </option>
</datalist>
<br>
<br>
<br>

<label>¡ELIGE TUS FAVORITOS!</label> 
<br>

<input type="checkbox" value="nike">FERRARI<br>
<input type="checkbox" value="adidas">MUSTANG<br>
<input type="checkbox" value="converse">PORSCHE<br>
<input type="checkbox" value="jordan">HONDA<br>

<br>


<br>
<fieldset>

    
    <H3>ELIGE LA MARCA QUE MAS TE GUSTE</H3>
    <br>
    <input type="color" name="color"> 

</fieldset>
<br>

<fieldset>

    
    <legend >Usuario y Password</legend>
    <label>Usuario:</label>
    
    <input type="text" name="usuario" placeholder="Usuario">
    <br>
    <br>
    <label>Password:</label>
    <input type="Password" name="password" placeholder="Password">
<br>
</fieldset>
<br>

<button type="reset" name="borrar"> Borrar </button> 
<button type="submit"  name="enviar"> Enviar</button> 
<button type="submit" name="eliminar"> Eliminar</button> 






</form>
<br>
<br>
<br>
<?php include_once '/xampp/htdocs/tienda/templates/includes/footer.php';?>
