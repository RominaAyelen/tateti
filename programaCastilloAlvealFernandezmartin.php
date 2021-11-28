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

/* creando una colección de juegos */

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

$juegos = []; //arreglo vacio
$juego[0] = $juego1;
$juego[1] = $juego2;
$juego[2] = $juego3;
$juego[3] = $juego4;
$juego[4] = $juego5;
$juego[5] = $juego6;
$juego[6] = $juego7;
$juego[7] = $juego8;
$juego[8] = $juego9;
$juego[9] = $juego10;

/**
 * Solicita al usuario un número en el rango [$min,$max]
 * @param int $min
 * @param int $max
 * @return int 
 */
function solicitarNumeroEntre($min, $max)
{
    //int $numero
    $numero = trim(fgets(STDIN));
    while (!is_int($numero) && !($numero >= $min && $numero <= $max)) {
        echo "Debe ingresar un número entre " . $min . " y " . $max . ": ";
        $numero = trim(fgets(STDIN));
    }
    return $numero;
}

/**
 * Solicita al usuario
 */



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/



//Declaración de variables:


//Inicialización de variables:


//Proceso:

$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);


echo"Ingrese un numero:";
/*
do {
    $opcion =trim(fgets(STDIN));

    
    switch ($opcion) {
        case 1: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1

            break;
        case 2: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2

            break;
        case 3: 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3

            break;
        
        case
    }
} while ($opcion != X);
*/