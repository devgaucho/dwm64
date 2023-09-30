<?php
date_default_timezone_set('America/Sao_Paulo');
$time=time();
//https://www.php.net/manual/en/datetime.format.php
$dia_por_extenso=date('N',$time);
switch($dia_por_extenso){
    case 1:
    $dia_por_extenso='Lunes/Segunda';
    break;
    case 2:
    $dia_por_extenso='Martes/Terça';
    break;
    case 3:
    $dia_por_extenso='Miércoles/Quarta';
    break;
    case 4:
    $dia_por_extenso='Jueves/Quinta';
    break;
    case 5:
    $dia_por_extenso='Viernes/Sexta';
    break;
    case 6:
    $dia_por_extenso='Sábado';
    break;
    case 7:
    $dia_por_extenso='Domingo';
    break;
}
$dia_por_extenso_em_ingles=date('l',$time);
$dia=date('d',$time);
$mes=date('n',$time);
switch($mes){
    case 1:
    $mes='Jan';
    break;
    case 2:
    $mes='Fev';
    break;
    case 3:
    $mes='Mar';
    break;
    case 4:
    $mes='Abr';
    break;
    case 5:
    $mes='Mai';
    break;
    case 6:
    $mes='Jun';
    break;
    case 7:
    $mes='Jul';
    break;
    case 8:
    $mes='Ago';
    break;
    case 9:
    $mes='Set';
    break;
    case 10:
    $mes='Out';
    break;
    case 11:
    $mes='Nov';
    break;
    case 12:
    $mes='Dez';
    break;
}
$ano=date('Y',$time);
$hora=date('H',$time);
$minuto=date('i',$time);
$str=$dia_por_extenso_em_ingles.'/'.$dia_por_extenso.', ';
$str.=$dia.'.'.$mes.'.'.$ano.' ';
$str.=$hora.':'.$minuto;
print escapeshellcmd($str);
