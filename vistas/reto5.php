<?php include '../header.php'; ?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="./reto5_style.css">
  <title>Reto Final: Formas Geométricas</title>
</head>
<body>
<main>
  <section class="reto-enunciado">
    <h1>Reto Final: Las Formas Mágicas</h1>
    <br>
    <p>Responde correctamente a todas las preguntas para ganar tu medalla de los <strong>Math Pirates</strong>.</p>
    <form action="./validar_final.php" method="POST" class="form-final">
      <label>1. ¿Cuántos lados tiene un hexágono?</label>
      <input type="number" name="pregunta1" required>

      <label>2. ¿Cuál de estas figuras tiene todos los lados y ángulos iguales?<br>(Escribe: cuadrado, rectángulo, triángulo...)</label>
      <input type="text" name="pregunta2" required>

      <label>3. ¿Cómo se llama una figura con 8 lados?</label>
      <input type="text" name="pregunta3" required>

      <button type="submit">¿SEGURO? COMPRUÉBALO</button>
    </form>
  </section>
</main>
</body>
</html>
<?php include '../footer.php'; ?>
