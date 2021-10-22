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
            echo "<h2 style='color: red'>Debes introducir un nombre</h2><br>";
        } elseif (empty($nuevo_telefono)) {
            unset($agenda[$nuevo_nombre]);
            echo "<h2 style='color: red'>Has borrado el contacto: " . $nuevo_nombre . " </h2><br>" ;
        } else {
            $agenda[$nuevo_nombre] = $nuevo_telefono;
        }
    }

    ?>

    <!-- Creamos el formulario para introducir los datos -->
    <h2>Insertar nuevo contacto</h2>
    <form method="get">
        <!-- Metemos los contactos ya existentes ocultos en el formulario -->
        <div>
            <?php
            foreach ($agenda as $nom => $telf) {
                echo '<input type="hidden" name="agenda[' . $nom . ']" ' . 'value="' . $telf . '">';
            }
            ?>
            <label>Nombre: <input type="text" name="nombre" /></label><br />
            <label>Teléfono: <input type="number" name="telefono" /></label><br />
            <input type="submit" name="submit" value="Insertar"><br />
        </div>
    </form>

    <!-- Mostramos los contactos de la agenda -->
    <h2>Agenda</h2>
    <?php

    function mostrarAgenda(){
        global $agenda;

        if (empty($agenda)) {
            echo "No hay contactos en la agenda, por favor, insértalos";
        } else {
            echo "<ul>";
            foreach ($agenda as $nom => $telf) {
                echo "<li>$nom: $telf</li>";
            }
            echo "</ul>";
        }
        echo "<br>";
        var_dump($agenda);
    }
    mostrarAgenda();

    ?>
</body>

</html>