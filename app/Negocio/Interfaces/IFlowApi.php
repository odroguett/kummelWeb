<?php 
namespace App\Negocio\Interfaces;
interface IFlowApi
{
    public function send( $service, $params, $method = "GET");

}

?>

