<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>ABKC Registros</title>
    <style>
      .clearfix:after {
        content: "";
        display: table;
        clear: both;
      }

      a {
        color: #5D6975;
        text-decoration: underline;
      }

      body {
        position: relative;
        width: 18cm;  
        height: 26.7cm; 
        margin: 0 auto; 
        color: #001028;
        background: #FFFFFF; 
        font-family: Arial, sans-serif; 
        font-size: 12px; 
        font-family: Arial;
      }

      .title h2{
        border 1px solid #ccc;
      }

      .title2 {
            padding: 20px;
            background-color: #f9f9f9;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1); 
        }
        .title2 h2 {
            padding-top: 0px;
            color:#ccc;
            font-size: 80%;
            font-weight: bold;
            text-align: center;
                       box-shadow: 0 0 8px rgba(0, 0, 0, 0.2); 
        }

      header {
        padding: 10px 0;
        margin-bottom: 30px;
      }

      #logo {
        text-align: left;
        margin-bottom: 10px;
      }

      #logo img {
        width: 90px;
      }

      h1 {
        border-top: 1px solid  #5D6975;
        border-bottom: 1px solid  #5D6975;
        color: #5D6975;
        font-size: 2.4em;
        line-height: 1.4em;
        font-weight: normal;
        text-align: center;
        margin: 0 0 20px 0;
      }

      #project {
        float: left;
      }

      #project span {
        color: #5D6975;
        text-align: right;
        width: 52px;
        margin-right: 10px;
        display: inline-block;
        font-size: 0.8em;
      }

      #company {
        float: right;
        text-align: right;
        margin-bottom: 10px;
      }

      #company2 {
        float: right;
        text-align: right;
        border: 1px solid #5D6975;
      }

      #company2 p{

        text-align: center;
       padding: 1px;
      }

      #project div,
      #company div {
        white-space: nowrap;        
      }

      table {
            width: 100%;
            border-collapse: collapse;
        }

        th {
            text-align: left;
            font-weight: bold;
            font-size: 15px;
            padding: 8px;
        }

        td {
            border-bottom: 1px solid #ffffff; /* Subrayado en lugar de borde completo */
            padding: 8px;
            font-size: 12px;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        main{
          border : 1px solid #ccc;
        }


      #notices .notice {
        color: #5D6975;
        font-size: 1.2em;
      }

      footer {
        color: #5D6975;
        width: 100%;
        height: 30px;
        position: fixed;
        bottom: 0;
        border-top: 1px solid #C1CED9;
        padding: 8px 0;
        text-align: center;
      }
    </style>
  </head>
  <body>
    <div id="company">
        <div class="title2">
            <h2>SOLO PARA USO DEL CLUB</h2>
            <p>Nro. brazalete: _____________________</p>
        </div>
      </div>
    <header class="clearfix">
        <div class="logo">
            <?php
                // Cargar el logo como base64 (aquí deberías cargar el logo real desde tu ruta)
                $path = 'img/default.jpg'; // Cambiar a tu ruta real del logo
                $type = pathinfo($path, PATHINFO_EXTENSION);
                $data = file_get_contents($path);
                $logo64 = 'data:image/' . $type . ';base64,' . base64_encode($data);
            ?>
            <img src="{{ $logo64 }}" width="100" height="100" alt="Logo">
        </div>

      <h1>Registro ABKC</h1>

      <div id="project">
        <div class="title">
            <h2>ABKC #    ___{{ $game->registroAbkc }}___</h2>
        </div>
      </div>

      <div id="company2">
        <p>Verifique documentación ABKC</p>
        <p>Tarjetas de cachorro no son aceptables</p>
      </div>

    </header>  
    <main>
    <div style="text-align:center">
        <h2>Datos de Registro</h2>
        <hr>
    </div>
    <table>
        <thead>
            <tr>
                <th>Nombre registrado del perro:</th>
                <th>Fecha de nacimiento:</th>
                <th>Sexo:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border-bottom:1px solid #ccc;">  {{ $game->nombrePerro }}  </td>
                <td style="border-bottom:1px solid #ccc;"> {{ $game->fnac }} </td>
                <td style="border-bottom:1px solid #ccc;">{{ $game->sexo }}</td>
            </tr>
        </tbody>

        <thead>
            <tr>
                <th>Nombre del dueño:</th>
                <th>Dirección:</th>
                <th>Ciudad:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border-bottom:1px solid #ccc;"> {{ $game->nomDueno }} </td>
                <td style="border-bottom:1px solid #ccc;">{{ $game->direccion }}</td>
                <td style="border-bottom:1px solid #ccc; padding:2px;">{{ $game->ciudad }}</td>
            </tr>
        </tbody>

        <thead>
            <tr>
                <th>Estado:</th>
                <th>Correo:</th>
                <th>Teléfono:</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td style="border-bottom:1px solid #ccc;">{{ $game->estado }}</td>
                <td style="border-bottom:1px solid #ccc;">{{ $game->correo }}</td>
                <td style="border-bottom:1px solid #ccc;">{{ $game->telefono }}</td>
            </tr>
        </tbody>
    </table>

    <div style="text-align:center">
      <h4 style="margin-bottom: 0px;">COMPLETA LA INFORMACIÓN PARA ENTRAR AL EVENTO</h4>
      <h5>(Por favor seleccione clase, solo UNA clase por perro)</h5>
      <p style="font-size: 10px; color:#5D6975;">Requisitos de altura: Estandar machos: 17-20 hembras: 16-19 Bolsillo machos: 14-17 hembras: 13-16  XL machos 20-23" Hembras 19-22" </p>
      <hr>
  </div>
  <table>
      <thead>
          <tr>
              <th>Otra Raza:</th>
              <th>Estándar:</th>
              <th>SG:</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td style="border-bottom:1px solid #ccc;"> 
                @if($game->otraRaza == 1)
                3-6 meses
                @elseif($game->otraRaza == 2)
                    6-9 meses
                @elseif($game->otraRaza == 3)
                    9-12 meses
                @elseif($game->otraRaza == 4)
                    1-2 años
                @elseif($game->otraRaza == 5)
                    2-3 años
                @elseif($game->otraRaza == 6)
                    3 y más
                @elseif($game->otraRaza == 7)
                    Campeón
                @elseif($game->otraRaza == 8)
                    Campeón GR
                @endif
              </td>
              <td style="border-bottom:1px solid #ccc;"> 
                @if($game->estandar == 1)
                3-6 meses
                @elseif($game->estandar == 2)
                    6-9 meses
                @elseif($game->estandar == 3)
                    9-12 meses
                @elseif($game->estandar == 4)
                    1-2 años
                @elseif($game->estandar == 5)
                    2-3 años
                @elseif($game->estandar == 6)
                    3 y más
                @elseif($game->estandar == 7)
                    Estándar CH
                @elseif($game->estandar == 8)
                    GR CH
                @endif
              </td>
              <td style="border-bottom:1px solid #ccc;">
                @if($game->sg == 1)
                9-12 meses
                @elseif($game->sg == 2)
                    1-2 años
                @elseif($game->sg == 3)
                    2-3 años
                @elseif($game->sg == 4)
                    3 y más
                @elseif($game->sg == 5)
                    XL XL
                @elseif($game->sg == 6)
                    GR CH XL
                @endif
              </td>
          </tr>
      </tbody>

      <thead>
          <tr>
              <th>Bolsillo:</th>
              <th>Clásico:</th>
              <th>Muestra Raza:</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td style="border-bottom:1px solid #ccc;"> 
                @if($game->bolsillo == 1)
                1-2 años
                @elseif($game->bolsillo == 2)
                    2-3 años
                @elseif($game->bolsillo == 3)
                    3 y más
                @elseif($game->bolsillo == 4)
                    Bolsillo CH
                @elseif($game->bolsillo == 5)
                    GR CH
                @endif
              </td>
              <td style="border-bottom:1px solid #ccc;">
                @if($game->clasico == 1)
                1-2 años
                @elseif($game->clasico == 2)
                    2-3 años
                @elseif($game->clasico == 3)
                    3 y más
                @elseif($game->clasico == 4)
                    CH clásico
                @elseif($game->clasico == 5)
                    GR CH
                @endif
              </td>

              <td style="border-bottom:1px solid #ccc;">
                {{ $game->muestraraza }}
              </td>
          </tr>
      </tbody>
  </table>
    </main>

    <div id="notices">
      <div style="text-align: center;">Texto Complementario:</div>
      <div class="notice" style="text-align: center;">A finance charge of 1.5% will be made on unpaid balances after 30 days made on unpaid balances after 30 days</div>
      <div class="notice" style="text-align: center;">A finance charge of 1.5% will be made on unpaid balances after 30 days made on unpaid balances after 30 days</div>
      <div class="notice" style="text-align: center;">A finance charge of 1.5% will be made on unpaid balances after 30 days made on unpaid balances after 30 days</div>
    </div>

    <div id="notices">
      <div style="text-align: center;">Texto Complementario 2:</div>
      <div class="notice" style="text-align: center;">A finance charge of 1.5% will be made on unpaid balances after 30 days made on unpaid balances after 30 days</div>
    </div>

    <div id="notices" style="margin-bottom: 18px;">
      <div style="text-align: left;"> Texto Complementario 2: </div>

      <div class="notice" style="text-align: center;">A finance charge of 1.5% will be made on unpaid balances after 30 days made on unpaid balances after 30 days</div>
    </div>

    <table>
      <thead>
        <tr>
            <th style="text-align:center;">______________</th>
            <th style="text-align:center;">______________</th>
            <th style="text-align:center;">______________</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td style=" text-align:center;">Firma 1</td>
            <td style="text-align:center;">Firma 2</td>
            <td style="text-align:center;">Fecha</td>
        </tr>
    </tbody>
    </table>

    <footer style="margin-top: 30px;">
      Todos los derechos reservados ABKC Registros.
    </footer>
</body>
</html>