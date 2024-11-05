/*Nombre y Apellidos: Jaime Grueso Martin*/

<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/includes/funciones.php";

$cursos = [
    "ofimatica" => 100,
    "programacion" => 200,
    "reparacion_ordenadores" => 150
];

function validarDatos ($cursos, $email, $clases, $desempleo) {
$opciones_filtrado = [
    'email' => FILTER_VALIDATE_EMAIL,
    'clases' => FILTER_SANITIZE_NUMBER_INT,
    'cursos' => FILTER_SANITIZE_SPECIAL_CHARS,
    'desempleo' => [
            'filter' => FILTER_SANITIZE_FULL_SPECIAL_CHARS,
            FILTER_REQUIRE_ARRAY,
            'flags' => FILTER_REQUIRE_ARRAY],
];




$datos_saneados = filter_input_array(INPUT_POST, $opciones_filtrado);

$email = isset($datos_saneados['email']) ? $datos_saneados['email'] : false;
$clases = isset($datos_saneados['clases']) ? $datos_saneados['clases'] : false;
$cursos_seleccionados = isset($datos_saneados['cursos']) && is_array($datos_saneados['cursos']) ? array_filter($datos_saneados['cursos'], function ($curso) use ($cursos) {
    return array_key_exists($curso, $cursos);}) : [];
$desempleo = isset($datos_saneados['desempleo']) ? $datos_saneados['desempleo'] : false;

    if ($email) {
        return [
            'email' => $email,
            'clases' => $clases,
            'cursos' => $cursos_seleccionados,
            'desempleo' => $desempleo
        ];
    } else {
        echo "<h1>Error en los datos</h1>";
        return false;
    }
}
function guardarArchivo($archivo)
{
    $tiposAdmitidos = ['application/pdf']; // Tipos admitidos


    $archivoTmp = $archivo['tmp_name']; // Nombre del archivo temporal
    $mimeArchivo = mime_content_type($archivoTmp); // Tipo MIME del archivo

    if ($mimeArchivo && in_array($mimeArchivo, $tiposAdmitidos)) {
        $path = $_SERVER['DOCUMENT_ROOT'] . "/uploads/";

        if (!is_dir($path) && !mkdir($path, 0755, true)) {
            echo "<h2>Error al crear la carpeta de destino</h2>";
            return false;
        }

        $nombreArchivo = $_POST['nombre'] . ".jpg";


        if (move_uploaded_file($archivoTmp, $path . $nombreArchivo)) {
            echo "<h2>Archivo subido correctamente</h2>";
            return true;
        } else {
            echo "<h2>Error al mover el archivo al destino final</h2>";
            return false;
        }
    } else {
        echo "<h2>Tipo de archivo no permitido</h2>";
        return false;
    }
}



inicio_html("Examen 7", ["/estilos/bh.css", "/estilos/formulario.css", "/estilos/general.css", "/estilos/tablas.css"]);
// ############################################################## De aqui hacia arriba php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    

    
}


if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    mostrarFormulario();
    
}





// ############################################################## De aqui hacia abajo html
function mostrarFormulario() { 
    global $email, $cursos, $clases, $desempleo, $tarjeta;
?>

<header>Formulario Examen</header>
    <form action="<?=$_SERVER['PHP_SELF']?>" method="POST" enctype="multipart/form-data">
        <input type="hidden" name="MAX_FILE_SIZE" value="<?=100*1024?>">
        <fieldset>
            <legend>Datos del Formulario</legend>
            <label for="email">Email</label>
            <input type="email" name="email" id="email" value="<?= isset($datos['email']) ? htmlspecialchars($datos['email']) : '' ?>">

            <label for="cursos[]">Cursos</label>
            <div>
                <?php foreach ($cursos as $clave => $curso) : ?>
                    <input type="checkbox" name="cursos[]" value="<?= $clave ?>" <?= isset($datos['cursos']) && in_array($clave, $datos['cursos']) ? 'checked' : '' ?>> 
                   <?= htmlspecialchars($curso) ?> €<br>
                <?php endforeach; ?>
            </div>

            <label for="clases">Clases Presenciales</label>
            <input type="text" name="clases" id="clases" value="<?= isset($datos['clases']) ? htmlspecialchars($datos['clases']) : '' ?>" min="5" max="10">

            <input type="checkbox" name="desempleo" id="desempleo" 
                <?= isset($datos['desempleo']) && $datos['desempleo'] == '1' ? 'checked' : '' ?>>

            <label for="tarjeta">Tarjeta Demandante Empleo</label>
            <input type="file" name="tarjeta" id="tarjeta">

        </fieldset>
        <input type="submit" name="operacion" id="operacion" value="Enviar">
    </form>
<?php
}
fin_html();
?>

