<?php
// --- Lógica antes del HTML ---

$correct_answers = [
    'la rana',
    'rana',
    'una rana',
    'la cabeza de la rana',
    'la cabeza de una rana'
];

$respuesta = $_POST['respuesta'] ?? null;
$message = '';

if ($respuesta !== null) {
    if (in_array(strtolower(trim($respuesta)), array_map('strtolower', $correct_answers))) {
        $message = "¡Correcto! 🎉";
    } else {
        $message = "¡Inténtalo de nuevo!";
    }
}
?>



<?php include '../header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./reto4_style.css" />
  <title>Reto 3</title>
</head>
<body>
<main>
  <!-- Enunciado del reto -->
  <section class="reto-enunciado">
    <br>
    <h1><em><u>Reto 5:</u></em></h1>
    <br>
    <h2>
        ¡OH NO! Durante nuestra aventura, nos hemos encontrado con lo que parecía una <strong>¡batalla!</strong>. <br><br>
        Menos mal, que su majestad el rey nos ha aclarado que es una obra de teatro y que estavan todos súper contentos. <br><br>
        El rey, pero estaba muy preocupado, porque ha perdido su corona, nos ha dado una foto y porfavor que le ayudemos a encontrarla. 
    </h2>
    <img src="../img/Corona.png" alt="Corona del rei" class="corona_rei">
    <a href="../img/puzzle.jpg" target="_blank" rel="noopener noreferrer" class="boton-corona">ENCUENTRA LA CORONA</a>

  </section>

  <!-- Formulario de respuesta -->
  <section class="reto-respuesta">
    <h2>Respuesta</h2>
    <form action="reto4.php" method="POST">
        <p>La corona reposa encima de...</p>
      <input type="text" name="respuesta" required />
      <button type="submit">Comprobar</button>
      <p class="mensaje"><?php echo $message; ?></p>
    </form>
  </section>
</main>
</body>
</html>
<?php include '../footer.php'; ?>
