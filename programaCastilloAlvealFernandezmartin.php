<?php
include_once("tateti.php");

/**************************************/
/***** DATOS DE LOS INTEGRANTES *******/
/**************************************/
/** 
*Castillo Davila, Romina Ayelen
*Legajo: FAI-3686, email: romina.castillo@est.fi.uncoma.edu.ar, Usuario en Github: RominaAyelen
*Alveal, Jonathan Hernan
*Legajo: FAI-3581, email: jonathan.alveal@est.fi.uncoma.edu.ar, Usuario en Github: JonathanAlveal
*Fernandez, Juan Manuel
*Legajo: FAI-3641, email: jmfernand100@hotmail.com, Usuario en Github: JuanManuelFM
*/

/**************************************/
/***** DEFINICION DE FUNCIONES ********/
/**************************************/

/**
 * Función que muestra las opciones del menú en la pantalla
 * @return int
 */

function seleccionarOpcion() {
    $minimo = 1;
    $maximo = 7;
        echo"1) Jugar a tateti \n";
        echo"2) Mostrar un juego \n";
        echo"3) Mostrar el primer juego ganado \n";
        echo"4) Mostrar porcentaje de Juegos ganados \n";
        echo"5) Mostrar resumen de un Jugador\n";
        echo"6) Mostrar listado de juegos ordenados por jugador O \n";
        echo"7) Salir \n";
        echo"INGRESE UN NUMERO: ";
        $opcion = solicitarNumeroEntre($minimo, $maximo);
        // Function solicitarNumeroEntre($min, $max), reusada el archivo tateti.php
    return $opcion;
}

/** 
 * Función que inicializa una estructura de datos con ejemplos de juegos y retorna la colección
 * @return array
 */
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
    $arregloJuego= [];
return $arregloJuego;
}

/** 
* OPCION 1 DEL MENU
* Función para jugar una partida de tateti y almacenarla en el arreglo
* @param array $j 
* @param array $arreglo
* @return array 
*/
function agregarJuego($j, $arreglo){
    // int $n
    $n = count($arreglo);
    $arreglo[$n] =  $j;
    return $arreglo;
}
  
/** 
* OPCION 2 DEL MENU
* Función que mostrará los datos de un juego previamente guardado en la colección de juegos
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

/** 
* OPCION 3 DEL MENU
* Función que recorrerá la colección de juegos buscando las primeras partidas ganados y devolviendo su indice de posición
* @param string $nombrePersona
* @param array $arreglo
* @return int $indice
*/
function recorridoJuegosGanados($nombrePersona, $arreglo){
    $indice = 0;
    $n = 0;
    $partidasAnalizar = count($arreglo);
    $partidaEncontrada = FALSE;
    while ($n < $partidasAnalizar && !$partidaEncontrada){
        if ($nombrePersona == $arreglo[$n]["jugadorCruz"]){
            if ($arreglo[$n]["puntosCruz"] > $arreglo[$n]["puntosCirculo"]){
                $indice = $n;
                $partidaEncontrada = TRUE;
            } 
        }
        elseif ($nombrePersona == $arreglo[$n]["jugadorCirculo"]){
            if ($arreglo[$n]["puntosCruz"] < $arreglo[$n]["puntosCirculo"]){
                $indice = $n;
                $partidaEncontrada = TRUE;
            }       
        } 
        elseif ($nombrePersona <> $arreglo[$n]["jugadorCruz"] || $nombrePersona <> $arreglo[$n]["jugadorCirculo"]){
            $indice = -1;
        }
        $n++;
    } return $indice;
}

/** 
 * FUNCION 4 DEL MENU
 * Funcion sin parametros formales que pide un simbolo X/O al usuario y lo retorna
 * @return string 
 */
function elegirSimboloXO(){
    echo "Ingrese un simbolo X/O: ";
    $simbolo=trim(fgets(STDIN));
return $simbolo;
}

/**
* OPCION 4 DEL MENU
* Funcion que retorna el porcentaje de juegos ganados segun el simbolo que ingrese el usuario
* @param array $juegos
* @param string $simbolo

*/



function porcentajeJuegoGanadoXO($juegos, $simbolo){
    //int $j, $cantJuegosGanadosX, $cantJuegosGanadosO, float $porcentajeX, $porcentajeO
    $j= count($juegos);
    $porcentajeX= 0;
    $porcentajeO= 0;
    $cantJuegosGanadosX = 0;
    $cantJuegosGanadosO = 0;
    $cantJuegosGanados = 0;
    for ($z = 0; $z < $j; $z++) {
        if ($juegos[$z]["puntosCruz"] > 1 || $juegos[$z]["puntosCirculo"] > 1) {
            $cantJuegosGanados++;
            if ($simbolo == "X") {
                if ($juegos[$z]["puntosCruz"] > 1) {
                 $cantJuegosGanadosX++;
                }
            } 
            else {
                if ($juegos[$z]["puntosCirculo"] > 1) {
                 $cantJuegosGanadosO++;
                }
            }
        }
    }
    if($simbolo == "X"){
        $porcentajeX= ($cantJuegosGanadosX*100)/$cantJuegosGanados;
        //$porcentajeX = int($porcentajeX);
        echo "El porcentaje de juegos ganados de X es de: ". round($porcentajeX) ."%\n";
    }
    elseif($simbolo == "O"){
        $porcentajeO= ($cantJuegosGanadosO*100)/$cantJuegosGanados;
        //$porcentajeO = int($porcentajeO);
        echo "El porcentaje de juegos ganados de O es de: ". round($porcentajeO) ."%\n";
    }   
}

 /**
 * OPCION 5 DEL MENU
 * Función que dada la colección de juegos y el nombre de un jugador, retorna el resumen del jugador
 * @param array $coleccionDeJuegos
 * @param array $nombreDeJugador
 * @return array 
 */
function resumenDelJugador($coleccionDeJuegos, $nombreDeJugador){
    // int $auxJuegosGanados, $auxJuegosPerdidos, $auxJuegosEmpatados, $auxPuntosAcumulados, $cantColeccionDeJuegos, $j 
    // string $auxNombre
    // array $resumen
    $resumen = [
        "nombre" => "",
        "juegosGanados" => 0,
        "juegosPerdidos" => 0,
        "juegosEmpatados" => 0,
        "puntosAcumulados" => 0
    ];
    $auxNombre = "";
    $auxJuegosGanados = 0;
    $auxJuegosPerdidos = 0;
    $auxJuegosEmpatados = 0;
    $auxPuntosAcumulados = 0;
    // La siguiente intrucción recorre la colección de Juegos y acumula los valores segun el nombre del jugador.
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
        }elseif ($coleccionDeJuegos[$j]["jugadorCirculo"] == $nombreDeJugador) {
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
* OPCION 5 DEL MENU
* Función que muestra el resumen de un jugador por pantalla
* @param array $resumen 
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

 /**
 *OPCION 2, 3 y 5 DEL MENU 
 * Función que verifica a través del nombre de un jugador, si esta en la colección de juegos 
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
 * OPCION 6 DEL MENU
 * Modulo que nos permite ordenar los juegos del jugador O
 * @param array $arregloJuego
 * @return string
 */
function juegosOrdenadosParaJugadorO($arregloJuego){
    uasort($arregloJuego, "ordenarNombresJugadorO");
    print_r($arregloJuego);
}

/**
 * OPCION 6 DEL MENU
 * Modulo que ordena alfabeticamente lo distintos nombres del jugador O
 * de la misma manera que lo explica la funcion 'cmp' en el manual.php
 */
function ordenarNombresJugadorO($a, $b){
    // int $ordenAlfabetico

    if (($a["jugadorCirculo"] < $b["jugadorCirculo"])) {
        $ordenAlfabetico = -1;
    }
    elseif ($a["jugadorCirculo"] == $b["jugadorCirculo"]) {
        $ordenAlfabetico = 0;
    } else {
        $ordenAlfabetico = 1;
    }
    return $ordenAlfabetico;
}

/**
 * OPCION 6 DEL MENU
 * Modulo que retorna el primer juego ganado por jugador O
 * @param array $arregloJuego
 * @param string $nombreJugador
 * @return int
 */
function primerJuegoGanadoJugadorO($arregloJuegos, $nombreJugador){
    //int $i, $cantArreglos string $bandera
$cantArreglos = count($arregloJuegos);
$i = 0;
$bandera = FALSE;

while($i < $cantArreglos && !$bandera){
if($arregloJuegos[$i]["jugadorCruz"]== $nombreJugador){
    if($arregloJuegos[$i]["puntosCruz"] > $arregloJuegos[$i]["puntosCirculo"] ){
        $bandera = TRUE;
        }
    }elseif($arregloJuegos[$i]["jugadorCirculo"]== $nombreJugador){
        if($arregloJuegos[$i]["puntosCruz"] > $arregloJuegos[$i]["puntosCirculo"] ){
            $bandera = TRUE;
        }
    }
    $i = $i + 1;
}
return $i;
}

/**************************************/
/*********** PROGRAMA PRINCIPAL *******/
/**************************************/

/**
 * Estructura de control SWITCH (segun): es una estructura que nos permite
 * evaluar los distintos valores que puede llegar a obtener una misma variable, y, a su vez,
 * ejecutar una accion (case) distinta dependiendo de cada valor. Es similar a la estructura de control IF
 * vista en la materia, pero, cuando hablamos de switch hablamos de "casos" y no de in if anidado.
 */


//Declaración de variables:
/*
 * int $juegosGanados, $maximo, $minimo, $numeroValido, $jugadorParticipo, $indiceJuego, $f
 * string $nombre, $simboloElegido, $juegosGanados, $nombreResumen
 * float $porcentaje
 * array $juego, $arregloJuego
 */

//Inicialización de variables:
$arregloJuego = [];
$juegosGanados = 0;
$porcentaje = 0;
$minimo = 1;
$indiceJuego = 0;
$jugadorParticipo = 0;

//Proceso:
//$juegosGanados = porcentajeJuegosGanados ();
$arregloJuego = cargarJuegos();

//imprimirResultado($juego);

// Array to be sorted
$array = cargarJuegos();

do {
    $opcion = seleccionarOpcion();
    switch ($opcion) {
        case 1: 
            //comienza una nueva partida de tateti
            echo"TATETI \n";
            $juego = jugar();
            $arregloJuego = agregarJuego($juego, $arregloJuego);
        break;
        case 2:    
            //se muestra en pantalla los datos de una partida guardada en el arreglo
            $maximo = count($arregloJuego);
            echo "Ingrese el numero del partido que desea ver: ";
            $numeroValido = solicitarNumeroEntre($minimo, $maximo);
            mostrarJuego($numeroValido, $arregloJuego);
        break;
        case 3: 
            //se muestra en pantalla la primera partida ganada de un jugador guardada en el arreglo
            echo "Ingrese el nombre de un jugador para saber su primera partida ganada: ";
            $nombre = trim(fgets(STDIN));
            $jugadorParticipo = verificarJugador($arregloJuego, strtoupper($nombre));
            if ($jugadorParticipo == 1){
                $indiceJuego = recorridoJuegosGanados(strtoupper($nombre), $arregloJuego);
                if ($indiceJuego == -1){
                    echo "Este jugador no ganó ninguna partida \n";
                }
                else {
                $indiceJuego = $indiceJuego + 1;
                mostrarJuego($indiceJuego, $arregloJuego);
                }
            }
            else {
                echo "Este jugador no participó en ninguna partida \n";
            }
            
        break;
        case 4: 
                //el usario ingresa un simbolo (X/O) y obtiene el porcentaje de juegos ganados de ese simbolo
                $f = count($arregloJuego); 
                $simboloElegido = elegirSimboloXO();
                $juegosGanados = porcentajeJuegoGanadoXO($arregloJuego, strtoupper($simboloElegido)); 
        break;
        case 5:     
                 // Se le solicita al usuario un nombre de jugador para imprimir por pantalla su resumen de juegos y puntos
                echo "Ingrese el nombre de un jugador: ";
                $nombreResumen = trim(fgets(STDIN));
                 // Comprobamos si el nombre del jugador ingresado se encuentra en alguno de los juegos almacenados.
                $jugadorExiste = verificarJugador($arregloJuego, strtoupper($nombreResumen));
                 // Si existe, retorna 1 y sino retorna -1.
                if ($jugadorExiste == 1) {
                    mostrarResumen(resumenDelJugador($arregloJuego, strtoupper($nombreResumen)));
                }
                else {
                     echo "El jugador ". $nombreResumen . " no jugó ninguna partida.\n";
             }
        break;
        case 6: 
            //muestra por pantalla una lista ordenada por el jugador circulo
                juegosOrdenadosParaJugadorO($arregloJuego);
        break;
    }
} while ($opcion <> 7);
