<?php
include("header.php");

?>
<html lang="es">
<body>
<div class="card">
<form method="post" enctype="multipart/form-data" action="procesar.php">
    <div class="form-group">
        <label for="nombre">Nombre: </label>
        <input type="text" name="nombre" required placeholder="Ej: Juan">
        <label for="apellido">Apellidos: </label>
        <input type="text" name="Apellidos" required placeholder="Ej: Perez">
        <label for="correo">Correo electronico</label>
        <input type="email" name="email" required>
        <label for="edad">Edad</label>
        <input type="number" name="edad" required>
    </div>
    <div class="form-group">
        <label for="entrada">Elije tu entrada</label>
        <label><input type="radio" name="entrada" value="50">General (50€)</label>
        <label><input type="radio" name="entrada" value="120">VIP con acceso a Backstage (120 €)</label>
        <label><input type="radio" name="entrada" value="180">Super VIP + Camping (180 €)</label>
    </div>
    <div class="form-group">
        <label for="dias" >Elije el dia que asistiras</label>
        <label><input type="checkbox" name="dias[]" value="1">Viernes (+10 €)</label>
        <label><input type="checkbox" name="dias[]" value="2">Sábado (+10 €)</label>
        <label><input type="checkbox" name="dias[]" value="3">Domingo (+10 €)</label>
    </div>
    <div class="form-group">
        <label for="pago">Elije el metodo de pago</label>
        <select name="pago" id="pago" required>
            <option value="-1">Elije opcion</option>
            <option value="1">Tarjeta de credito</option>
            <option value="2">Bizum</option>
            <option value="3">PayPal</option>
        </select>
    </div>
    <div class="form-group">
        <label for="foto">Sube una imagen tuya para acreditar tu identidad</label>
        <input type="file" id="foto" name="foto" required>

    </div>
    <div class="form-group">
        <label for="comentarios">Comentarios o peticiones especiales</label>
        <textarea name="comentarios"></textarea>
    </div>
    <button type="submit" value="crear ficha" name="enviar">enviar</button>

</form>

</div>

</body>



</html>

