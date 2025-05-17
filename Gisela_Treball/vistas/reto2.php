<?php
// --- Lógica antes del HTML ---

$correct_answers = [
    'respuesta' => 8  // Porque 2, 4, 6, 8, 10, 12 es una secuencia
];

$respuesta = $_POST['respuesta'] ?? null;
$message = '';

if ($respuesta !== null) {
    if ($respuesta == $correct_answers['respuesta']) {
        $message = "¡Correcto! 🎉";
    } else {
        $message = "¡Intenta de nuevo! Revisa el patrón de las maderas ";
    }
}
?>


<?php include '../header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./reto2_style.css" />
  <title>Reto 1</title>
</head>
<body>
<main>
  <!-- Enunciado del reto -->
  <section class="reto-enunciado">
    <br>
    <h1><em><u>Reto 2:</u></em></h1>
    <br>
    <br>
    <h2>
        Para cruzar este puente nos hemos encontrado con una señal que ponía que las maderas número 2, 4, 6, -, 10 y 12 están en mal estado. El problema es que el cuarto número está borrado... <br><br>
        Ayúdanos a descubrir cúal podría ser. <br><br>
        ¡Necesitamos de tus habilidades lógicas y matmáticas!
    </h2>
    <br>
  </section>

  <!-- Formulario de respuesta -->
  <section class="reto-respuesta">
    <h2>Respuesta</h2>
    <form action="reto2.php" method="POST">
      <input type="number" name="respuesta" required />
      <button type="submit">Comprobar</button>
    </form>
    <p class="mensaje"><?php echo $message; ?></p>
  </section>
</main>
</body>
</html>
<?php include '../footer.php'; ?>
