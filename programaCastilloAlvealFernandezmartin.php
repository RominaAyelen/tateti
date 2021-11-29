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
 

 /**
 * Función que verifica a través del nombre de un jugador, si está en la colección de juegos 
 * En caso de estar retorna 1, en caso contrario retorna -1
 * @param array $coleccionJuegos
 * @param string $nomJugador
 * @return int
 */
 function verificarJugador($coleccionJuegos, $nomJugador) {
      
     // int $cantidadJuegos, $jugadorEncontrado

     $cantidadJuegos = count($coleccionJuegos);
     $jugadorEncontrado = -1;
     $x = 0;
     do {
         if ($coleccionJuegos[$x]["jugadorCruz"] == $nomJugador && $coleccionJuegos[$x]["jugadorCirculo"] == $nomJugador) {
             $jugadorEncontrado = 1;
         }
         $x++;
     } while ($x < $cantidadJuegos && $jugadorEncontrado <> 1);
     return($jugadorEncontrado);
 }



 /**
 * Función que dada la colección de juegos y el nombre de un jugador, retorna el resumen del jugador
 * @param array $coleccionDeJuegos
 * @param array $nombreDeJugador
 * @return array 
 */
 function resumenDelJugador($coleccionDeJuegos, $nombreDeJugador)
 {
     // array $resumen 
     $resumen = [
         "nombre" => "",
         "juegosGanados" => 0,
         "juegosPerdidos" => 0,
         "juegosEmpatados" => 0,
         "puntosAcumulados" => 0
     ];

     // string $auxNombre
     // int $auxJuegosGanados, $auxJuegosPerdidos, $auxJuegosEmpatados, $auxPuntosAcumulados
     $auxNombre = "";
     $auxJuegosGanados = 0;
     $auxJuegosPerdidos = 0;
     $auxJuegosEmpatados = 0;
     $auxPuntosAcumulados = 0;

     // La siguiente intrucción recorre la colección de Juegos y acumula los valores segun el nombre del jugador.
     // int $cantColeccionDeJuegos, $j
     $cantColeccionDeJuegos = count($coleccionDeJuegos);

     for ($j=0; $j < $cantColeccionDeJuegos ; $j++) { 
         if ($coleccionDeJuegos[$j]["jugadorCruz"] == $nombreDeJugador) {
             $auxNombre = $nombreDeJugador;
            
             if ($coleccionDeJuegos[$j]["puntosCruz"] > $coleccionDeJuegos[$j]["puntosCirculo"]) {
                 // Cantidad de juegos ganados
                 $auxJuegosGanados = $auxJuegosGanados + 1;
                 $auxPuntosAcumulados = $auxPuntosAcumulados + $coleccionDeJuegos[$j]["puntosCruz"];
             }
             elseif ($coleccionDeJuegos[$j]["puntosCruz"] < $coleccionDeJuegos[$j]["puntosCirculo"]) {
                 // Cantidad de juegos perdidos
                 $auxJuegosPerdidos = $auxJuegosPerdidos + 1;
            }
             elseif ($coleccionDeJuegos[$j]["puntosCruz"] == $coleccionDeJuegos[$j]["puntosCirculo"]) {
                 // Cantidad  de juegos empatados
                 $auxJuegosEmpatados = $auxJuegosEmpatados + 1;
                 $auxPuntosAcumulados = $auxPuntosAcumulados + $coleccionDeJuegos[$j]["puntosCruz"];
             }
         }

         elseif ($coleccionDeJuegos[$j]["jugadorCirculo"] == $nombreDeJugador) {
             $auxNombre = $nombreDeJugador;
             
             if ($coleccionDeJuegos[$j]["puntosCruz"] < $coleccionDeJuegos[$j]["puntosCirculo"]) {
                 // Cantidad de juegos ganados
                 $auxJuegosGanados = $auxJuegosGanados + 1;
                 $auxPuntosAcumulados = $auxPuntosAcumulados + $coleccionDeJuegos[$j]["puntosCirculo"];
             }
             elseif ($coleccionDeJuegos[$j]["puntosCruz"] > $coleccionDeJuegos[$j]["puntosCirculo"]) {
                 // Cantidad de juegos perdidos 
                 $auxJuegosPerdidos = $auxJuegosPerdidos + 1;
            }
             elseif ($coleccionDeJuegos[$j]["puntosCruz"] == $coleccionDeJuegos[$j]["puntosCirculo"]) {
                 // Cantidad  de juegos empatados
                 $auxJuegosEmpatados = $auxJuegosEmpatados + 1;
                 $auxPuntosAcumulados = $auxPuntosAcumulados + $coleccionDeJuegos[$j]["puntosCirculo"];
             }
         }
     }

     $resumen["nombre"] = $auxNombre;
     $resumen["juegosGanados"] = $auxJuegosGanados;
     $resumen["juegosPerdidos"] = $auxJuegosPerdidos;
     $resumen["juegosEmpatados"] = $auxJuegosEmpatados;
     $resumen["puntosAcumulados"] = $auxPuntosAcumulados;

     return $resumen;
 }



 /**
 * Función que muestra el resumen de un jugador por pantalla
 * @param array $resumen
 * 
 */
 function mostrarResumen($resumen){   
     echo "****************************** \n";
     echo "Jugador: ".$resumen["nombre"]."\n";
     echo "Ganó: ".$resumen["juegosGanados"]." juegos \n";
     echo "Perdió: ".$resumen["juegosPerdidos"]." juegos \n";
     echo "Empató: ".$resumen["juegosEmpatados"]." juegos \n";
     echo "Total de puntos acumulados: ".$resumen["puntosAcumulados"]." puntos \n";
     echo "****************************** \n";
}



/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/



//Declaración de variables:


//Inicialización de variables:
$arregloJuego = [];

//Proceso:

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
            //completar qué secuencia de pasos ejecutar si el usuario elige la opción 1
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
                echo"funciona  4 \n";
        break;
        case ($opcion == "5"):
                 // string $nombre      
                 // Se le solicita al usuario un nombre de jugador para imprimir por pantalla su resumen de juegos y puntos
                 echo "Ingrese el nombre de un jugador: ";
             $nombre = trim(fgets(STDIN));

             // Comprobamos si el nombre del jugador ingresado se encuentra en alguno de los juegos almacenados.
             $jugadorExiste = verificarJugador($colJuegos, strtoupper($nombre));
             // Si existe, retorna 1 y sino retorna -1.
             if ($jugadorExiste == 1) {
                mostrarResumen(resumenDelJugador($colJuegos, strtoupper($nombre)));
             }
             else {
                 echo "El jugador ". $nombre . " no jugó ninguna partida.\n";
             }
             break;
        case ($opcion == "6"): 
                //completar qué secuencia de pasos ejecutar si el usuario elige la opción 6
                echo"funciona  6 \n";
        break;
    }
} while ($opcion <> 7);
