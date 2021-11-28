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

$juego1 =

$juego2 =





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
