<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Visualizar PDF</title>
</head>
<body>
    <h1>Visualización de PDF</h1>
    
    <?php
    // Ruta del archivo PDF
    $pdf_path = 'Tripticop.pdf';

    // Verificar si el archivo existe
    if (file_exists($pdf_path)) {
        // Mostrar el archivo PDF utilizando un objeto <embed>
        echo '<embed src="' . $pdf_path . '" type="application/pdf" width="100%" height="600px" />';
    } else {
        // Si el archivo no existe, mostrar un mensaje de error
        echo 'El archivo PDF no se encuentra disponible.';
    }
    ?>
</body>
</html>
