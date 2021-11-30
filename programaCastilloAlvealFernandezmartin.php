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
* retorna la cantidad de juegos ganados de un simbolo introducido por el usuario
* @param array $juegos
* @param string $simboloElegido
* @return int
 */
function porcentajeJuegosGanados($juegos, $simboloElegido)
{
// Inicializamos nuestro contador que nos va a indicar cuantas partidas ganó el símbolo elegido
$cantidadDeJuegosGanadosSimbolo = 0;
for ($i = 0; $i < count($juegos); $i++) {
    if ($simboloElegido == "X") {
        $juegos[$i]["puntosCirculo"];
    if ($juegos[$i]["puntosCruz"] > 1) {
        $cantidadDeJuegosGanadosSimbolo++;
    }
}   
    else {
    if ($juegos[$i]["puntosCirculo"] > 1) {
        $cantidadDeJuegosGanadosSimbolo++;
    }
}
}
return ($cantidadDeJuegosGanadosSimbolo);
}


/* creando una colección de juegos */
function cargarJuegos(){
$arregloJuego = [];
$juego1 = ["jugadorCruz" => "GATURRO",
            "jugadorCirculo" => "AGATHA",
            "puntosCruz" => 1,
            "puntosCirculo" => 1] ;

$juego2 = ["jugadorCruz" => "ROMI",
            "jugadorCirculo" => "JONA",
            "puntosCruz" => 2,
            "puntosCirculo" => 0] ;

$juego3 = ["jugadorCruz" => "MANU",
            "jugadorCirculo" => "GATURRO",
            "puntosCruz" => 6,
            "puntosCirculo" => 0] ;

$juego4 = ["jugadorCruz" => "AGATHA",
            "jugadorCirculo" => "ROMI",
            "puntosCruz" => 3,
            "puntosCirculo" => 0] ;

$juego5 = ["jugadorCruz" => "JONA",
            "jugadorCirculo" => "MANU",
            "puntosCruz" => 1,
            "puntosCirculo" => 1] ;

$juego6 = ["jugadorCruz" => "GATURRO",
            "jugadorCirculo" => "JONA",
            "puntosCruz" => 4,
            "puntosCirculo" => 0] ;

$juego7 = ["jugadorCruz" => "AGATHA",
            "jugadorCirculo" => "MANU",
            "puntosCruz" => 3,
            "puntosCirculo" => 1] ;

$juego8 = ["jugadorCruz" => "ROMI",
            "jugadorCirculo" => "GATURRO",
            "puntosCruz" => 0,
            "puntosCirculo" => 5] ;

$juego9 = ["jugadorCruz" => "GATURRO",
            "jugadorCirculo" => "AGATHA",
            "puntosCruz" => 0,
            "puntosCirculo" => 3] ;

$juego10 = ["jugadorCruz" => "JONA",
            "jugadorCirculo" => "AGATHA",
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

/**  Función para jugar una partida de tateti y almacenarla en el arreglo
* @param array $j 
* @param array $arreglo
* return array 
*/
function agregarJuego($j, $arreglo){
    // int $n
    $n = count($arreglo);
    $arreglo[$n] =  $j;
    return $arreglo;
}

/** Función que mostrará los datos de un juego previamente guardado en la colección de juegos
* @param int $numJuego
* @param array $arreglo
*/
function mostrarJuego($numJuego, $arreglo){
    echo "****************************** \n";
    echo "Juego TATETI: " . $numJuego;
        if ($arreglo[$numJuego - 1]["puntosCruz"] > $arreglo[$numJuego - 1]["puntosCirculo"]) {
        echo " (gano X) \n";
    }
        elseif ($arreglo[$numJuego - 1]["puntosCruz"] < $arreglo[$numJuego - 1]["puntosCirculo"]){
        echo " (gano O) \n";
    }
        elseif ($arreglo[$numJuego - 1]["puntosCruz"] == $arreglo[$numJuego - 1]["puntosCirculo"]) {
        echo " (empate) \n";
    }
    echo "Jugador X: " . strtoupper($arreglo[$numJuego - 1]["jugadorCruz"]) . " obtuvo " . $arreglo[$numJuego - 1]["puntosCruz"] . " puntos" . "\n";
    echo "Jugador O: " . strtoupper($arreglo[$numJuego - 1]["jugadorCirculo"]) . " obtuvo " . $arreglo[$numJuego - 1]["puntosCirculo"] . " puntos" . "\n";
    echo "****************************** \n";
}

/** Función que recorrerá los arreglos buscando juegos ganados
* @param string $nombrePersona
* @param array $arreglo
* return int $indice
*/
function recorridoJuegosGanados($nombrePersona, $arreglo){
    
    $n = 0;
    $partidasAnalizar = count($arreglo);
    $partidaEncontrada = FALSE;

    while ($n < $partidasAnalizar && !$partidaEncontrada){
        if ($nombrePersona == $arreglo[$n]["jugadorCruz"]) {
            if ($arreglo[$n]["puntosCruz"] > $arreglo[$n]["puntosCirculo"]) {
                $partidaEncontrada = TRUE;
                echo "****************************** \n";
                echo "Juego TATETI: " . $n;
            if ($arreglo[$n]["puntosCruz"] > $arreglo[$n]["puntosCirculo"]) {
                echo " (gano X) \n";
    }
            elseif ($arreglo[$n]["puntosCruz"] < $arreglo[$n]["puntosCirculo"]){
                echo " (gano O) \n";
    }
            elseif ($arreglo[$n]["puntosCruz"] == $arreglo[$n]["puntosCirculo"]) {
                echo " (empate) \n";
    }
                echo "Jugador X: " . $arreglo[$n]["jugadorCruz"] . " obtuvo " . $arreglo[$n]["puntosCruz"] . " puntos" . "\n";
                echo "Jugador O: " . $arreglo[$n]["jugadorCirculo"] . " obtuvo " . $arreglo[$n]["puntosCirculo"] . " puntos" . "\n";
                echo "****************************** \n";
            }
        }elseif ($nombrePersona == $arreglo[$n]["jugadorCirculo"]) {
            if ($arreglo[$n]["puntosCruz"] < $arreglo[$n]["puntosCirculo"]) {
                $partidaEncontrada = TRUE;
                echo "Partida circulo encontrada \n";
            }
        }elseif ($nombrePersona == !$arreglo[$n]["jugadorCruz"] || !$arreglo[$n]["jugadorCirculo"]){
            $partidaEncontrada = TRUE;
            echo "No hay partidas encontradas \n";
        }
        $n++;
    }

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
         if ($coleccionJuegos[$x]["jugadorCruz"] == $nomJugador || $coleccionJuegos[$x]["jugadorCirculo"] == $nomJugador) {
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
/**
 * int juegosGanados
 */

//Inicialización de variables:
$arregloJuego = [];
$porcentaje = 0;
$juegosGanados = 0;
//$nombre = "";

//Proceso:
//$juegosGanados = porcentajeJuegosGanados ();
$arregloJuego = cargarJuegos();
//print_r($arregloJuego);

//print_r($juego);
//imprimirResultado($juego);

//ordenando alfabeticamente las jugadas del jugador 0
function cmp($a, $b) {
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

// Array to be sorted
$array = cargarJuegos();
//print_r($array);

// Sort and print the resulting array
uasort($array, 'cmp');
//print_r($array);



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
        break;
        case ($opcion == "2"):    
            //se muestra en pantalla los datos de una partida guardada en el arreglo
            $minimo = 1;
            $maximo = count($arregloJuego);
            echo "Ingrese el numero del partido que desea ver: ";
            $numeroValido = solicitarNumeroEntre($minimo, $maximo);
            mostrarJuego($numeroValido, $arregloJuego);
        break;
        case ($opcion == "3"): 
            //se muestra en pantalla la primera partida ganada guardada en el arreglo
            echo "Ingrese el nombre de un jugador para saber su primera partida ganada: ";
            $nombre = trim(fgets(STDIN));
            recorridoJuegosGanados(strtoupper($nombre), $arregloJuego);
        break;
        case ($opcion == "4"): 
                //el usario ingresa un simbolo (X/O) y obtiene el promedio de juegos ganados de ese simbolo
                $f = count($arregloJuego); 
                echo"Ingrese un simbolo (X/O) para saber el porcentaje de juegos ganados de dicho simbolo: ";
                $simbolo = trim(fgets(STDIN));
                $juegosGanados = porcentajeJuegosGanados($arregloJuego, $simbolo); 
                $porcentaje = ($juegosGanados * 100) / $f;
                echo "El porcentaje de juegos ganador por el jugador ". strtoupper($simbolo)." es: ".$porcentaje."%\n"; 
        break;
        case ($opcion == "5"):
                 // string $nombre      
                 // Se le solicita al usuario un nombre de jugador para imprimir por pantalla su resumen de juegos y puntos
                 echo "Ingrese el nombre de un jugador: ";
             $nombre = trim(fgets(STDIN));

                 // Comprobamos si el nombre del jugador ingresado se encuentra en alguno de los juegos almacenados.
             $jugadorExiste = verificarJugador($arregloJuego, strtoupper($nombre));
                 // Si existe, retorna 1 y sino retorna -1.
             if ($jugadorExiste == 1) {
                mostrarResumen(resumenDelJugador($arregloJuego, strtoupper($nombre)));
             }
             else {
                 echo "El jugador ". $nombre . " no jugó ninguna partida.\n";
             }
        break;
        case ($opcion == "6"): 
                 //completar qué secuencia de pasos ejecutar si el usuario elige la opción 6
                $mostrarOrdenAlfabetico = cmp($arregloJuego); 
        break;
    }
} while ($opcion <> 7);
