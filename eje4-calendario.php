<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Calendario</title>
  </head>

  <style media="screen">
    #calendario{
      text-align: center;
    }
    #nombreDias{
      background-color: #0A0A8E;
      color: #FFF;
    }

    .hoy{
      background-color: #13A2A6;
      color: #FFF;
      font-weight: bold;
    }
    table{
      border-collapse: collapse;
      background-color: ;
    }
    td{
      border: 1px solid black;
    }
    th{
      width: 120px;
      height: 30px;
    }
    td{
      height: 80px;
    }

  </style>

  <body>
    <table id="calendario">
      <tr id="nombreDias">
        <th>LUNES</th>
        <th>MARTES</th>
        <th>MIERCOLES</th>
        <th>JUEVES</th>
        <th>VIERNES</th>
        <th>SABADO</th>
        <th>DOMINGO</th>
      </tr>
      <tr>
        <?php
          $numDia = date("d");
          $posDia = date("N");
          $ultimDiaMes = date("d",(mktime(0,0,0,date("m")+1,1,date("Y"))-1));

          $numeroDia = $numDia;
          for ($i=0 ; $i<4 ; $i++) {
            if ($numeroDia>7) {
              $numeroDia=$numeroDia-7;
            }
          }

          $inicioMes = $posDia - $numeroDia;
          $dia = 1;

          for ($i=1 ; $i<=$ultimDiaMes+$numeroDia ; $i++) {
            if ($i<=$numeroDia || $i>$ultimDiaMes+$numeroDia) {
              echo "<td></td>";
            }

            else {
              if ($dia==$numDia) {
                echo "<td class='hoy'>$dia</td>";
              }
              else {
                echo "<td>$dia</td>";
              }
              $dia=$dia+1;
            }

            if ($i%7==0) {
		echo "</tr><tr>";
	    }
          }
        ?>
      </tr>
    </table>

  </body>
</html>
