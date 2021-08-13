<?php 

namespace App\Negocio\Utiles;

use Exception;
use FFI\Exception as FFIException;

/* * Clase para Configurar el cliente
* @Filename: Config.class.php
* @version: 2.0
* @Author: flow.cl
* @Email: csepulveda@tuxpan.com
* @Date: 28-04-2017 11:32
* @Last Modified by: Carlos Sepulveda
* @Last Modified time: 28-04-2017 11:32
*/ 

/* $COMMERCE_CONFIG = array(
    "APIKEY" => "593C7F7D-BE8A-4270-BA01-5679EL47DCD1", // Registre aquí su apiKey
    "SECRETKEY" => "854aced074755b43660e2cfdeb9e47fdddbeaf4c", // Registre aquí su secretKey
    "APIURL" => "https://sandbox.flow.cl/api", // Producción EndPoint o Sandbox EndPoint
    "BASEURL" => "http://localhost/kummel/" //Registre aquí la URL base en su página donde instalará el cliente
); */

class ConfigPagoFlow {
    
   static function get($name) {
       //global $COMMERCE_CONFIG;
       $COMMERCE_CONFIG = array(
        "APIKEY" => "62AAADF1-8424-4386-B512-9239FAF31L10", // Registre aquí su apiKey
        "SECRETKEY" => "6d82a5d185ef78cb6b6ef6e476f8aadfdfd9834f", // Registre aquí su secretKey
        "APIURL" => "https://sandbox.flow.cl/api", // Producción EndPoint o Sandbox EndPoint
        "BASEURL" => "http://localhost/" //Registre aquí la URL base en su página donde instalará el cliente
    );


       if(!isset($COMMERCE_CONFIG[$name])) {
      
         //  throw new FFIException("The configuration element thas not exist", 1);
       }
       else
       {
        return $COMMERCE_CONFIG[$name];

       }
       
   }
}

?>