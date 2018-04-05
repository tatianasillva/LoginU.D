<?php

// mostrar datos
$localshost="localhost";
$user="root";
$password="mysql2018" ;
$database="ud";    
$port="3306";
        
        
        
$conexion=mysqli_connect($host, $user, $password, $database, $port, $socket);
$cadena="SELECT nombre, clave FROM usuario";
$mysqul_query($conexion, $cadena);
   
if (mysqli_num_rows($resultado)>0){
    $registro = mysqli_fetch_assoc($resultado);
        
        if ($_REQUEST["usuario"]== $registro["nombre"] && $_REQUEST["pass"] == $registro["clave"] ){
        echo "usted ha ingresado en este momento ";
        }else{
        echo "usted salio ya  ";
     
    }
}
