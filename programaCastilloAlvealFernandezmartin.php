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
$arregloJuegos = [];
/* creando una colección de juegos */
function cargarJuegos (){
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

return $juegos;
print_r($juegos);
}

//function solicitarNumeroEntre($min, $max)

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/



//Declaración de variables:


//Inicialización de variables:


//Proceso:

$juego = jugar();
//print_r($juego);
//imprimirResultado($juego);


echo"1) Jugar a tateti \n";
echo"2) Mostrar un juego \n";
echo"3) Mostrar el primer juego ganado \n";
echo"4) Mostrar porcentaje de Juegos ganados \n";
echo"5) Mostrar resumen de un Jugador\n";
echo"6) Mostrar listado de juegos ordenados por jugador O \n";
echo"7) Salir \n";

do {
    echo"INGRESE UN NUMERO ";
    $opcion =trim(fgets(STDIN));
    switch ($opcion) {
        case ($opcion == "1"): 
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1
            echo"JUGANDO AL TATETI \n";
            $juego = jugar();
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
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1
                echo"funciona  4 \n";
                break;
        case ($opcion == "5"):    
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 2
                echo"funciona  5 \n";
                break;
        case ($opcion == "6"): 
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3
                echo"funciona  6 \n";
                break;
        case ($opcion == "7"): 
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 3
                echo"funciona  7 \n";
                break;
    }
} while ($opcion <> 7);
