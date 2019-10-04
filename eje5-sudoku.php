<!DOCTYPE html>
<html lang="sp" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>

  <style media="screen">

    .sudoku{
      text-align: center;
      border-collapse: collapse;
      border: 3px solid black;
    }
    table, th, td{
      border: 1px solid black;
    }
    td{
      width: 30px;
      height: 30px;
    }

    .lateral{
      border-right: 3px solid black;
    }
    .bajo{
      border-bottom: 3px solid black;
    }

  </style>

  <body>
    <h3>---- Sudoku ----</h3>
    <table class="sudoku">
      <tr>
          <?php
            $fila = array(
              array("","","","","","","","",""),
              array("","","","","","","","",""),
              array("","","","","","","","",""),
              array("","","","","","","","",""),
              array("","","","","","","","",""),
              array("","","","","","","","",""),
              array("","","","","","","","",""),
              array("","","","","","","","","")
            );

            for ($i=0; $i < 20; $i++) {
              $posicionA = rand(0,8);
              $posicionB = rand(0,8);
              $num = rand(1,9);
              if ($fila[$posicionA][$posicionB]=="") {
                $fila[$posicionA][$posicionB] = $num;
              } else {
                $i--;
              }
            }

            for ($i=0; $i < 9; $i++) {
              for ($j=0; $j < 9; $j++) {
                $numero = $fila[$i][$j];
                if (($i==2 && $j==2) || ($i==2 && $j==5) || ($i==5 && $j==2) || ($i==5 && $j==5)) {
                  echo "<td class='lateral bajo'>$numero</td>";
                }
                elseif ($j==2 || $j==5) {
                  echo "<td class='lateral'>$numero</td>";
                }
                elseif ($i==2 || $i==5) {
                  echo "<td class='bajo'>$numero</td>";
                }
                else {
                  echo "<td>$numero</td>";
                }

                if ($j==8) {
                  echo "</tr><tr>";
                }
              }
            }
          ?>
      </tr>
    </table>
  </body>
</html>
