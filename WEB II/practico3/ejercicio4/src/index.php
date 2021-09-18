<?php

function showHome()
{
  echo '<!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  </head>
  <body>
    <div>
      <div>
          
          <form action="insert" method="post">
              <div>
                <label for="deudor">deudor</label>
                <input id="deudor" name="input_deudor">
              </div>
              <div>
                <label for="cuota">cuota</label>
                <input class="form-control" id="cuota_capital" name="input_cuota">
              </div>
              <div>
              <label for="cuota_capital">cuota_capital</label>
                <input id="cuota_capital" name="input_cuota_capital">
            </div>
              <div>
                    <label for="fecha_pago">fecha_pago</label>
                    <input id="fecha_pago" name="input_fecha_pago">
                </div>
              <button type="submit">Agregar</button>
          </form>
      </div>
  </body>
  </html>';
}
