<?php

class JuegoView
{

    function __construct()
    {
    }

    function showJuegos($juegos)
    {
        echo "<ul>";

        foreach ($juegos as $juego) {
            "<li> $juego->nombre, $juego->cant_jugadores, $juego->juego_cartas </li>";
        }
    }

    function showApuestaswithJuego($apuestas)
    {
        echo "<ul>";

        foreach ($apuestas as $apuesta) {
            "<li> $apuesta->fecha, $apuesta->monto / $apuesta->nombre, $apuesta->cant_jugadores, $apuesta->juego_cartas </li>";
        }
    }
}
