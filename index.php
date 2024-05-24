<?php

$zip = new ZipArchive();
$filename = "test112.zip";

if ($zip->open($filename, ZipArchive::CREATE)!==TRUE) {
    exit("cannot open <$filename>\n");
}
//Parcear el archivo a base 64
// y la cadena mandarla a archivo de texto 
$zip->addFromString("Abi.txt", "#1 Esto es una cadena de prueba añadida como  testfilephp.txt.\n");

// Obtén los datos binarios del archivo
$datos_binarios = file_get_contents("test.txt");

// Convierte los datos binarios a base64
 $datos_base64 = base64_encode($datos_binarios);

//creamos nuestra propia encryptacion
//str_replace("E","É",$datos_base64);

$zip->addFromString("base 64.txt",$datos_base64);
//$zip->addFile("test.xlsx"); 
  $zip->close(); 

echo $datos_base64 = str_replace("G","7",$datos_base64);
echo $datos_base64 = str_replace("h","*",$datos_base64);

echo $datos_base64 = str_replace("7","G",$datos_base64);
echo $datos_base64 = str_replace("*","h",$datos_base64);
//Deciframos el b64
 $base64_decode = base64_decode($datos_base64);
    $pdf = fopen('Archivo decriptado de b64.txt','w');
    fwrite($pdf, $base64_decode);
    fclose($pdf);
//BORRAR EL XLS 


//extraer los archivos
//abrir el zip y poner contraseña
        $zip = new ZipArchive;

    $zip->open('test112.zip');

    $zip->extractTo('./');

//    $zip->close();

//DESENCYPTAR EL txt CON EL B64 DEL XLS
//DEBE DE RE APARECER
  //      echo "Ok!";
        

// $fp = fopen("base 64.txt", "r");
 //NO DECRYPTED B64
//echo $linea = fgets($fp);
//DECRYPTED B64
//https://base64.guru/converter/decode/file
//fclose($fp);