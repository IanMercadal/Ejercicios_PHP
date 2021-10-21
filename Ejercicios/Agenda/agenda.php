<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Agenda</title>
</head>

<body>
    <?php
    if (isset($_GET['agenda'])) {
        $agenda = $_GET['agenda'];
    } else {
        $agenda = [];
    }
    if (isset($_GET['submit'])) {
        $nuevo_nombre = filter_input(INPUT_GET, 'nombre');
        $nuevo_telefono = filter_input(INPUT_GET, 'telefono');
        if (empty($nuevo_nombre)) {
            echo "<p style='color: red'>Debe introducir un nombre!</p><br>";
        } elseif (empty($nuevo_telefono)) {
            unset($agenda[$nuevo_nombre]);
        } else {
            $agenda[$nuevo_nombre] = $nuevo_telefono;
        }
    }

    ?>

    <!-- Creamos el formulario para introducir los datos -->
    <h2>Nuevo contacto</h2>
    <form method="get">
        <!-- Metemos los contactos ya existentes ocultos en el formulario -->
        <div>
            <?php
            foreach ($agenda as $nom => $telf) {
                echo '<input type="hidden" name="agenda[' . $nom . ']" ';
                echo 'value="' . $telf . '">';
            }
            ?>
            <label>Nombre: <input type="text" name="nombre" /></label><br />
            <label>Teléfono: <input type="number" name="telefono" /></label><br />
            <input type="submit" name="submit" value="Ejecutar"><br />
        </div>
    </form>

    <!-- Mostramos los contactos de la agenda -->
    <h2>Agenda</h2>
    <?php
    if (empty($agenda)) {
        echo "No hay contactos en la agenda";
    } else {
        echo "<ul>";
        foreach ($agenda as $nom => $telf) {
            echo "<li>$nom: $telf</li>";
        }
        echo "</ul>";
    }
    ?>
</body>

</html>