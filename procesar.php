<?php
include ("header.php");
if (isset($_POST['enviar'])){

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
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
    $aumento+=$entrada['value'];

    $pago=$_POST['pago'];

    if (isset($_POST["foto"])){
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