<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/

/* Apellido, Nombre. Legajo. Carrera. mail. Usuario Github */
/* ... COMPLETAR ... */
 
/*
*Castillo Davila, Romina Ayelen
*legajo: FAI-3686 email: romina.castillo@est.fi.uncoma.edu.ar usuario en github: RominaAyelen
*Alveal, Jonathan
*legajo: FAI-3581 email: jonathan.alveal@est.fi.uncoma.edu.ar usuario en github: JonathanAlveal
*Fernandez, Juan Manuel
*legajo: FAI-3641 email: jmfernand100@hotmail.com usuario en github: JuanManuelFM
*/

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/


/**
*retorna la cantidad de juegos ganados por un simbolo elegido, que luego nos permite calcular el porcentaje
* @param array $arregloJuego
* @param string $simboloElegido
* @return int
*/
function porcentajeJuegosGanados($arregloJuego, $simboloElegido){
    // int $contJuegosGanador, int $i
    $arregloJuego = [];
    $n = count($arregloJuego); 
    $contJuegosGanador = 0;

    for($i = 0 ; $i <= $n; $i++ ){
        if($simboloElegido == "X"){
            if ($arregloJuego[$i]["puntosCruz"] > 1) {
            $contJuegosGanador = $contJuegosGanador + 1;
            }
        }elseif($simboloElegido == "O"){
            if ($arregloJuego[$i]["puntosCirculo"] > 1) {
                $contJuegosGanador = $contJuegosGanador + 1;
            }
        }
    }  
    return $contJuegosGanador;  
}

/* creando una colección de juegos */
function cargarJuegos (){
$arregloJuego = [];
$juego1 = ["jugadorCruz" => "Gaturro",
            "jugadorCirculo" => "Agatha",
            "puntosCruz" => 1,
            "puntosCirculo" => 1] ;

$juego2 = ["jugadorCruz" => "Romi",
            "jugadorCirculo" => "Jona",
            "puntosCruz" => 2,
            "puntosCirculo" => 0] ;

$juego3 = ["jugadorCruz" => "Manu",
            "jugadorCirculo" => "Gaturro",
            "puntosCruz" => 6,
            "puntosCirculo" => 0] ;

$juego4 = ["jugadorCruz" => "Agatha",
            "jugadorCirculo" => "Romi",
            "puntosCruz" => 3,
            "puntosCirculo" => 0] ;

$juego5 = ["jugadorCruz" => "Jona",
            "jugadorCirculo" => "Manu",
            "puntosCruz" => 1,
            "puntosCirculo" => 1] ;

$juego6 = ["jugadorCruz" => "Gaturro",
            "jugadorCirculo" => "Jona",
            "puntosCruz" => 4,
            "puntosCirculo" => 0] ;

$juego7 = ["jugadorCruz" => "agatha",
            "jugadorCirculo" => "Manu",
            "puntosCruz" => 3,
            "puntosCirculo" => 1] ;

$juego8 = ["jugadorCruz" => "Romi",
            "jugadorCirculo" => "Gaturro",
            "puntosCruz" => 0,
            "puntosCirculo" => 5] ;

$juego9 = ["jugadorCruz" => "gaturro",
            "jugadorCirculo" => "agatha",
            "puntosCruz" => 0,
            "puntosCirculo" => 3] ;

$juego10 = ["jugadorCruz" => "jona",
            "jugadorCirculo" => "agatha",
            "puntosCruz" => 1,
            "puntosCirculo" => 1] ;

    $arregloJuego[0] = $juego1;
    $arregloJuego[1] = $juego2;
    $arregloJuego[2] = $juego3;
    $arregloJuego[3] = $juego4;
    $arregloJuego[4] = $juego5;
    $arregloJuego[5] = $juego6;
    $arregloJuego[6] = $juego7;
    $arregloJuego[7] = $juego8;
    $arregloJuego[8] = $juego9;
    $arregloJuego[9] = $juego10;

return $arregloJuego;
}

/* @param array $j 
*@param array $arreglo
*return array */
function agregarJuego($j, $arreglo){
    // int $n
    $n = count($arreglo);
    $arreglo[$n] =  $j;
    return $arreglo;
}

//function solicitarNumeroEntre($min, $max)

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/



//Declaración de variables:
/**
 * int juegosGanados
 */

//Inicialización de variables:
$arregloJuego = [];
$porcentaje = 0;
$juegosGanados = 0;
//Proceso:
//$juegosGanados = porcentajeJuegosGanados ();
$arregloJuego = cargarJuegos();
//print_r($arregloJuego);

//print_r($juego);
//imprimirResultado($juego);




do {
    echo"1) Jugar a tateti \n";
    echo"2) Mostrar un juego \n";
    echo"3) Mostrar el primer juego ganado \n";
    echo"4) Mostrar porcentaje de Juegos ganados \n";
    echo"5) Mostrar resumen de un Jugador\n";
    echo"6) Mostrar listado de juegos ordenados por jugador O \n";
    echo"7) Salir \n";
    echo"INGRESE UN NUMERO ";
    $opcion =trim(fgets(STDIN));
    switch ($opcion) {
        case ($opcion == "1"): 
            //comienza una nueva partida de tateti
            echo"TATETI \n";
            $juego = jugar();
            $arregloJuego = agregarJuego($juego, $arregloJuego);
            //print_r($arregloJuego);
        break;
        case ($opcion == "2"):    
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2
            echo"funciona  2 \n";
        break;
        case ($opcion == "3"): 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3
            echo"funciona  3 \n";
        break;
        case ($opcion == "4"): 
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 4
                $f = count($arregloJuego); 
                echo"Ingrese un simbolo (X/O) para saber el porcentaje de juegos ganados de dicho simbolo: \n";
                $simbolo = trim(fgets(STDIN));
                $juegosGanados = porcentajeJuegosGanados($arregloJuego, $simbolo); 
                $porcentaje = ($juegosGanados * 100) / $f;
                echo "El porcentaje de juegos ganador por: ".$simbolo." es: ".$porcentaje."%\n"; 
        break;
        case ($opcion == "5"):    
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 5
                echo"funciona  5 \n";
        break;
        case ($opcion == "6"): 
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 6
                echo"funciona  6 \n";
        break;
    }
} while ($opcion <> 7);
