<?php
// --- Lógica antes del HTML ---

$correct_answers = [
    'respuesta' => 'luna'  // Porque 2, 4, 6, 8, 10, 12 es una secuencia
];

$respuesta = $_POST['respuesta'] ?? null;
$message = '';

if ($respuesta !== null) {
    if (strtolower($respuesta) == strtolower($correct_answers['respuesta'])) {
        $message = "¡Correcto! 🎉";
    } else {
        $message = "¡Intentalo de nuevo! ";
    }
}
?>


<?php include '../header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./reto3_style.css" />
  <title>Reto 3</title>
</head>
<body>
<main>
  <!-- Enunciado del reto -->
  <section class="reto-enunciado">
    <br>
    <h1><em><u>Reto 3:</u></em></h1>
    <br>
    <br>
    <h2>
        Por el camino nos hemos encontrado una pirata que no nos dejaba pasar. Nos ha dicho que para poder seguir nuestro camino deberíamos resolver una adivinanza: <br> "Siempre subo, nunca bajo,
        me ves brillar, pero no hablo.
        A veces me ves llena,
        a veces en pedazos.
        ¿Quién soy?"
    </h2>
    <br>
    <br>
    <br>
  </section>

  <!-- Formulario de respuesta -->
  <section class="reto-respuesta">
    <h2>Respuesta</h2>
    <form action="reto3.php" method="POST">
      <input type="text" name="respuesta" required />
      <button type="submit">Comprobar</button>
    </form>
    <p class="mensaje"><?php echo $message; ?></p>
  </section>
</main>
</body>
</html>
<?php include '../footer.php'; ?>
