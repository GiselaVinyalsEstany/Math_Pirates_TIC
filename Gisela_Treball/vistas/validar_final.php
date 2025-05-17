<?php
$correctas = [
    'pregunta1' => '6',
    'pregunta2' => 'cuadrado',
    'pregunta3' => 'octágono'
];

$res1 = strtolower(trim($_POST['pregunta1'] ?? ''));
$res2 = strtolower(trim($_POST['pregunta2'] ?? ''));
$res3 = strtolower(trim($_POST['pregunta3'] ?? ''));

$todo_correcto =
    $res1 === $correctas['pregunta1'] &&
    $res2 === $correctas['pregunta2'] &&
    $res3 === $correctas['pregunta3'];

if ($todo_correcto) {
    header('Location: reto5_good.php');
    exit;
} else {
    header('Location: reto5_bad.php');
    exit;
}
?>
