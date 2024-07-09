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

      .tabla-principal{
        position: relative;
        top: -41%;
      }
      
      .table-title{
        position: relative;
        top: -50%;
      }

      .tabla-secundaria{
        position: absolute;
        top: 70%;
        left:0;

      }

      .table-title2{
        position: relative;
        top: -40%;
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
            color:#5D6975;
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

      .text-inicial {
        position: relative;
        top: -16%;
        color: black;
        font-size: 16px;
        line-height: 1.4em;
        font-weight: normal;
        text-align: center;
      }

      #project {
        position: relative;
        top: -13%;
        font-size: 23px;

      }
      .abkc{
        position: relative;
        top: -5%;
        left: 13%;
        width: 250px;
        height: 30px;
        margin:3px;
        border: 1px solid black;
        text-align: center;
        font-size: 17px;
        text-decoration: underline;
        text-decoration-color: #CCCCCC;
        background-color: #f9f9f9;
      }



      #company {
        float: right;
        text-align: right;
        border: black 5px double;

      }
      .shows{
        position: relative;
        top:-98px;
        left: 19%;
      }
      
      .shows2{
        position: relative;
        top:-21%;
        left: 31%;
      }

      .show{
        width: 30px;
        height: 30px;
        margin:3px;
        border: 1px solid black;
        text-align: center;
        font-size: 15px;
      }

      .company2{
        position: relative;
        top: -20%;
      }

      #company2 {
        float: right;
        text-align: right;
        border: 1px solid #5D6975;
        background-color: #f9f9f9;
        padding: 2px;
      }

      #company2 p{

        text-align: center;
       padding: 1px;
       background-color: rgb(216, 255, 77);
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
        color: #000000;
        width: 100%;
        height: 30px;
        position: absolute;
        padding: 8px 0;
        margin-top:0%;
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
            <div class="shows">
           
              <SPAN>SHOW 1               
                <div class="show">
                x
                </div>
              </SPAN>

              <SPAN>SHOW 2               
                <div class="show">
                x
                </div>
              </SPAN>
            </div>
        </div>
        <div class="shows2">
          <SPAN>SHOW 3               
            <div class="show">
            x
            </div>
          </SPAN>

          <SPAN>SHOW 4               
            <div class="show">
            x
            </div>
          </SPAN>
        </div>


      <span class="text-inicial"> No se pueden inscribir perros en un espectáculo organizado como un evento de ABKC sin un número de registro permanente de ABKC</span>

      <div id="project">
        <div class="title">
          <div>ABKC # </div> <div class="abkc">{{ $game->registroAbkc }}</div>
        </div>
      </div>
      <div class="company2">
          <div id="company2">
            <p>Verifique documentación ABKC</p>
            <p>Tarjetas de cachorro no son aceptables</p>
          </div>
      </div>


    </header>  
    <main>
    <div style="text-align:center" class="table-title">
        <h2>Datos de Registro</h2>
        <hr>
    </div>
    <table class="tabla-principal">
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

    <div style="text-align:center" class="table-title2">
      <h4 style="margin-bottom: 0px;">COMPLETA LA INFORMACIÓN PARA ENTRAR AL EVENTO</h4>
      <h5>(Por favor seleccione clase, solo UNA clase por perro)</h5>
      <p style="font-size: 10px; color:#5D6975;">Requisitos de altura: Standard machos: 17-20 hembras: 16-19 Pocket machos: 14-17 hembras: 13-16  XL machos 20-23" Hembras 19-22" </p>
      <hr>
    </div>
  <table class="tabla-secundaria">
      <thead>
          <tr>
              <th>Otra Raza:</th>
              <th>Standard:</th>
              <th>XL:</th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td style="border-bottom:1px solid #ccc;"> 
                @if($game->otraRaza == 0)
                No Aplica
                @elseif($game->otraRaza == 1)
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
                @if($game->estandar == 0)
                No Aplica
                @elseif($game->estandar == 1)
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
                @if($game->sg == 0)
                No Aplica
                @elseif($game->sg == 1)
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
              <th>Pocket:</th>
              <th>Classic:</th>
              <th> </th>
          </tr>
      </thead>
      <tbody>
          <tr>
              <td style="border-bottom:1px solid #ccc;"> 
                @if($game->bolsillo == 0)
                No Aplica
                @elseif($game->bolsillo == 1)
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
                @if($game->clasico == 0)
                    No Aplica
                @elseif($game->clasico == 1)
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

              </td>
          </tr>
      </tbody>

      <thead>
        <tr>
            <th ><span style="background-color: rgb(216, 255, 77);">Muestra Raza:</span></th>
        </tr>
        <tr>
         
      </tr>
      <tr>
        
    </tr>
    </thead>
    <tbody>
        <tr>
            <td style="">
              {{ $game->muestraraza }}
             <div style="position: relative; top:-1%; color:#5D6975;">____________________________________________________________________</div> 
            </td>
            <td>
     
            </td>

            </td>
        </tr>
    </tbody>
   </table>
 </main>

    <div id="notices">
      <div class="notice" style="text-align: center; font-size:8px;">The host club assume no responsability for any loss, damage or injury sustained by spectators or by exhibitors and handlers, or to  any of their dogs or propierty,
        and further assume no responsability for injury to children not under the control of their parents or guardians. The host club is no responsible for loss, accidents or theft. By signing 
        this form. I hereby agree to walve any claim, actions or labsuits resulting from my participation in this event, and any action, decision or judgement made by any host club 
        representative or approved jugde. My signature indicates that I understand and agree to the avove.
      </div>
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
            <td style=" text-align:center;">Print Name of Owner</td>
            <td style="text-align:center;">Signature of Owner</td>
            <td style="text-align:center;">Fecha</td>
        </tr>
    </tbody>
    </table>

    <footer style="text-align: center; font-size:10px; font-weight:bold;" >
      Please also note: As the person completing and signing this form, you understand that you are responsible for entering your dog into the correct age group and category in order to
      receive points that may apply. If your enter your dog into the incorrect age group and/or category. points may be forfeited. If you are unsure of this which age group and/or 
      category your dog should be in, there is an ABKC Representative availible on-site to help you. By signing above, you acknowledge this information.
    </footer>
</body>
</html>