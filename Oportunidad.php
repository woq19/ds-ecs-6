<?php

require_once 'modelo/DatosOperacion.php';
require_once 'modelo/Oportunidad.php';
require_once 'modelo/Persona.php';
require_once 'modelo/RespuestaOportunidad.php';

header('Content-Type: application/json');

$p=new Persona;
$p->Nombres= "pedro rodriguez";
$p->Sexo= "F";
$p->Documento= "123123";
$p->Email= "aaaa@aaaa.com.ar";
$p->Celular= "123456";
$p->TelefonoAlternativo= "123456";

$do=new DatosOperacion;
$do->MontoSolicitado= 500000;
$do->Linea= "504";
$do->CantidadCuotas= 12;
$do->TasaEfectivaMensual= 2.9589;
$do->CuotaPromedio= 53503.08;
$do->TasaNominalAnual= 36;
$do->CostoFinancieroTotal= 56.55;

$o=new Oportunidad;
$o->Persona=$p;
$o->DatosOperacion=$do;
$o->SmsConsultaId= "17654293-27258197726";
$o->IdValidatorId= 893;
$o->MotorSolaFirmaId= 8870;

$ro=new RespuestaOportunidad;
$ro->Oportunidad=$o;
$ro->IsOk= true;

echo json_encode($ro);