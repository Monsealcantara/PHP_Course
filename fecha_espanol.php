<?php
date_default_timezone_set("America/Mexico_City");
function fecha_espanol_larga(){
    $fecha_dia=date("d");
    $fecha_mes=date("m");
    $fecha_year=date("Y");
    $dia_semana = [
        'Monday' => 'Lunes', 
        'Tuesday' => 'Martes', 
        'Wednesday' => 'Miércoles', 
        'Thursday' => 'Jueves', 
        'Friday' => 'Viernes', 
        'Saturday' => 'Sábado', 
        'Sunday' => 'Domingo'
    ];
    $meses_year=[
        "01"=>"Enero", 
        "02"=>"Febrero", 
        "03"=>"Marzo", 
        "04"=>"Abril", 
        "05"=>"Mayo", 
        "06"=>"Junio", 
        "07"=>"Julio", 
        "08"=>"Agosto", 
        "09"=>"Setiembre", 
        "10"=>"Octubre", 
        "11"=>"Noviembre", 
        "12"=>"Diciembre"
    ];   
    $fecha_final=$dia_semana[date("l")]." ".$fecha_dia."de".$meses_year[$fecha_mes]."de".$fecha_year;
    return $fecha_final;
}

echo fecha_espanol_larga();

echo "<br>";

function fecha_espanol_corta($fecha="") {
    if ($fecha == "") {
        $fecha = date("d-m-Y");
    } else {
        $fecha = date("d-m-Y", strtotime($fecha));
    }

    $fecha = explode("-", $fecha);

    $fecha_dia = $fecha[0];
    $fecha_mes = $fecha[1];
    $fecha_anio = $fecha[2];

    $dia_semana = [
        'Monday' => 'Lunes', 
        'Tuesday' => 'Martes', 
        'Wednesday' => 'Miércoles', 
        'Thursday' => 'Jueves', 
        'Friday' => 'Viernes', 
        'Saturday' => 'Sábado', 
        'Sunday' => 'Domingo'
    ]; 

    $mes_year = [
        "01" => "Enero",
        "02" => "Febrero",
        "03" => "Marzo",
        "04" => "Abril",
        "05" => "Mayo",
        "06" => "Junio",
        "07" => "Julio",
        "08" => "Agosto",
        "09" => "Septiembre",
        "10" => "Octubre",
        "11" => "Noviembre",
        "12" => "Diciembre"
    ];

    $dia_nombre = $dia_semana[date("l", strtotime("$fecha_anio-$fecha_mes-$fecha_dia"))];
    $fecha_final = $dia_nombre . " " . $fecha_dia . " de " . $mes_year[$fecha_mes] . " de " . $fecha_anio;

    return $fecha_final;
}

echo fecha_espanol_corta() . "<br>";
echo fecha_espanol_corta("01-01-2020") . "<br>";
