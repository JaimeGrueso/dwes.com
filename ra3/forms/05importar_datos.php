<?php

require_once($_SERVER['DOCUMENT_ROOT'] . "/includes/funciones.php");

inicio_html("Subida de archivos. Importación de datos",
            ["/estilos/general.css", "/estilos/formulario.css", "/estilos/tablas.css"]);

echo "<header>Importación de datos</header>";

if( $_SERVER['REQUEST_METHOD'] == "POST" ) {
    if( isset($_FILES['archivo_csv']) && $_FILES['archivo_csv']['error'] == UPLOAD_ERR_OK ) { // Si se ha subido el archivo y no ha habido errores

        $fila_cabecera = isset($_POST['fila_cabecera']); // Si se ha marcado la casilla de fila de cabecera o no 
        
        echo "<table>";
        echo "<caption>Importación de " . $_FILES['archivo_csv']['name'] . "</caption>";
        echo "<thead>";

        $archivo = fopen($_FILES['archivo_csv']['tmp_name'], "r");
        if( $archivo ) {
            // El archivo está abierto
            // Fila de cabecera
            if( $fila_cabecera ) {
                // Leemos la fila de cabecera
                $cabecera = fgetcsv($archivo); 
                echo "<tr>";
                foreach( $cabecera as $columna ) {
                    echo "<th>$columna</th>";
                }
                echo "</tr>" . PHP_EOL; // PHP_EOL es un salto de línea
                echo "</thead>";
                echo "<tbody>";
            }

            // Presentamos los datos
            $cabecera_insertada = False;
            $registros = 0;
            while( $fila = fgetcsv($archivo)) {
                ++$registros;
                if( !$fila_cabecera && !$cabecera_insertada) {
                    echo "<thead><tr>";
                    for( $i = 0; $i < count($fila); $i++ ) {
                        echo "<th>Campo_{$i}</th>";
                    }
                    echo "</tr></thead>" . PHP_EOL;
                    $cabecera_insertada = True;
                    echo "<tbody>";
                }


                echo "<tr>";
                foreach( $fila as $campo) {
                    echo "<td>$campo</td>";
                }
                echo "</tr>" . PHP_EOL;
            }
            echo "</tbody>";
            fclose($archivo);
        }
        echo "</table>";
        echo "<p>Se han importado $registros registros<br>";
        echo "<a href='{$_SERVER['PHP_SELF']}'>Importar otro archivo</a>";

    }
    else {
        echo "<h3>Error. El archivo no se ha subido</h3>";
    }
}
else { // Esto es igual que poner GET
?>
<form method="POST" action="<?=$_SERVER['PHP_SELF']?>" enctype="multipart/form-data">
    <fieldset>
        <legend>Introduzca el archivo con los datos a importar</legend>
        <label for="fila_cabecera">Fila de cabecera</label>
        <input type="checkbox" name="fila_cabecera" id="fila_cabecera" checked>

        <label for="archivo_csv">Archivo con los datos</label>
        <input type="file" name="archivo_csv" id="archivo_csv" accept="text/csv">

    </fieldset>
    <input type="hidden" name="operacion" id="op1" value="importar">

    <!-- <input type="submit" name="operacion" id="operacion" value="Importar"> -->
    <button type="submit" id="operacion">Importar</button>
</form>
<?php
}

fin_html();

?>