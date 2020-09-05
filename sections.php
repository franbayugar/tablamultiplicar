<?php

function showHome($table) {
    include_once('libreria/header.php');
  
    echo '
        <h1>Por favor, ingrese un número de límite para la tabla de multiplicar</h1>
            <form id="form-table" method="GET">
                <label for="nombre">Número:</label>
                <input type="number" name="numero" id="numero">
                <input type="submit" name="enviar" id="" value="Generar">
            </form>
        <h2>O si no, pruebe seleccionar alguno de los números más usados:</h2>
            <ul class="menu">
                <li><a href="tabla/5">Tabla del 5</a></li>
                <li><a href="tabla/10">Tabla del 10</a></li>
                <li><a href="tabla/20">Tabla del 20</a></li>
            </ul>
            ';

    if(!$table){
            echo '
            <script src="js/main.js"></script>
            </body>
            </html>';
            }
             ;
  }

function showTable($numero_ingresado){
    $table = true;
    showHome($table);
    $valor_fijo = 1;
    $valor_modif = 1;
    echo '<div id="table_one">
          <table>;
          <tbody>
          <tr><td></td>';
        for($i = $valor_modif; $i<=$numero_ingresado; $i++){
            echo "<td class='resaltar'><b>$i</b></td>";
     }
    echo "</tr>";
    echo "<tr>";
        for($i = $valor_modif; $i<=$numero_ingresado; $i++){
            echo "<td class='resaltar'><b>$i</b></td>";
            for($j = $valor_fijo; $j<=$numero_ingresado; $j++){
                $num = $valor_modif*$j;
                if($valor_modif == $j){
                    echo "<td class='resaltar'><b>$num</b></td>";
                }   
                else{
                echo "<td>$num</td>";
                }
            }
        echo "</tr>";
        $valor_modif++;
    }
echo ' </tbody>
      </table>
    </div>
    <a href="home"> Volver</a>
    <script src="js/main.js"></script>
    </body>
    </html>
    ';
}
