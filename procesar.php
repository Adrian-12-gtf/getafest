<?php
include ("header.php");
if (isset($_POST['enviar'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['Apellidos'];
    $email=$_POST['email'];
    $edad=$_POST['edad'];
    if ($edad<=18){
        echo "No puedes comprar la entrada si no eres mayor de edad";
        exit;
    }

    $entrada=$_POST['entrada'];
    $dias=$_POST['dias'];
    //calcular entrada
    $aumento=count($dias)*10;
    $aumento+=$entrada;

    $pago=$_POST['pago'];

    if (isset($_FILES["foto"])&& $_FILES["foto"]["error"] === 0){
        $nombreFoto=basename($_FILES['foto']['name']);
        $ruta="img/".$nombreFoto;
        move_uploaded_file($_FILES['foto']['tmp_name'],$ruta);

    }else{
        $ruta="";
    }
}else{
    print "No se envio datos para acceder";



}

?>
<html lang="es">
<body>
    <div class="ticket">
        <?php echo"<img src='".$ruta."' width='150'>" ?>
        <p>Nombre: <?php echo $nombre ?></p>
        <p>Apellidos: <?php echo $apellido ?></p>
        <p>Correo: <?php echo $email ?></p>
        <p>Tipo de entrada: <?php echo $entrada?></p>
        <?php
        $asiste="";
        foreach ($dias as $dia){
            if ($dia==1){
                $asiste="viernes ";
            }elseif ($dia==2){
                $asiste.="sabado ";
            }else{
                $asiste.="domingo ";
            }

        }?>
        <p>Dias seleccionados: <?php echo $asiste ?></p>
        <p>Metodo de pago: <?php echo $pago?></p>
        <p>Precio final: <?php echo $aumento?></p>
    </div>

</body>
</html>
