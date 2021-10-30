<?php


class HabitacionView
{

    function __construct()
    {
    }

    function showRooms($rooms)
    {
        include_once "templates/header.html";
        echo '<ul>';
        foreach ($rooms as $room) {
            if (!$room->ocupada)
                $style = `style="color: green;"`;
            else $style = "";
            echo "<li $style> Número de habitación: $room->nro_habitacion, 
                       Cantidad de camas: $room->cant_camas, 
                       Description: $room->description,
                       Está ocupada?: $room->ocupada  </li>";
        }
        echo "</ul>";
    }

    function showcapacHotelera($resultado)
    {
        echo "<p> La capacidad Hotelera es de: $resultado habitaciones </p>";
    }
}
