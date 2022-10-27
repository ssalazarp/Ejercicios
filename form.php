<?php
//Este script envia algunos de los datos rellenados en los campos
$cedula=$_POST['txt1'];
$nombre=$_POST['txt2'];
$apellido=$_POST['txt3'];
$sexo=$_POST['radio'];
echo "Aqui se muestran solo unos cuantos de los datos rellenados en los campos como muestra "."<br>"."<br>";
echo $cedula."<br>";  echo $nombre."<br>"; echo $apellido."<br>";
//Este condicional nos sirve para determinar cual de los campos fue el ingresado
if ($sexo == "Masculino"){
    echo 'Masculino';
    }else{
        echo 'Femenino';
    } 
?>