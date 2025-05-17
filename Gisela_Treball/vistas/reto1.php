<?php
// --- Lógica antes del HTML ---

$correct_answers = [
    'oro' => 32,     // 11 + 20
    'plata' => 45,   // 14 + 19
];

$oro = $_POST['oro'] ?? null;
$plata = $_POST['plata'] ?? null;
$message = '';

if ($oro !== null && $plata !== null) {
    if ($oro == $correct_answers['oro'] && $plata == $correct_answers['plata']) {
        $message = "¡Correcto! 🎉";
    } else {
        $message = "¡Intenta de nuevo! Revisa los sacos ";
    }
}
?>

<?php include '../header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="./reto1_style.css" />
  <title>Reto 1</title>
</head>
<body>
<main>
  <!-- Enunciado del reto -->
  <section class="reto-enunciado">
    <h2>
    1. En el primer saco tenemos la <u>misma cantidad</u> de monedas de oro que de plata. 
    En total, <strong>tenemos 26 monedas. </strong><br>
    2. En el segundo tenemos el <u>doble</u>  de monedas de oro que de plata, aunque de oro solo hay <strong>4 monedas</strong>. <br>
    3. El tercero... se rompió por el camino y no queda <strong>ninguna moneda dentro.</strong> <br>
    4. Y en el cuarto hay la <u>mitad</u>  de monedas de oro que de plata, y en total, hemos contado <strong>30 de plata</strong>.
    </h2>
  </section>

  <!-- Formulario de respuesta -->
  <section class="reto-respuesta">
    <h2>Respuesta</h2>
    <form action="reto1.php" method="POST">
      <label for="oro">🟡 Oro:</label>
      <input type="number" name="oro" required />

      <label for="plata">⚪ Plata:</label>
      <input type="number" name="plata" required />

      <button type="submit">Comprobar</button>
    </form>
    <p class="mensaje"><?php echo $message; ?></p>
  </section>
</main>
</body>
</html>
<?php include '../footer.php'; ?>
