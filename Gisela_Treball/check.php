<?php
$correct_answers = [
    'reto1' => 5,
    'reto2' => 3,
    'reto3' => 10,
    'reto4' => 7,
    'reto5' => 2
];

$reto = $_GET['reto'] ?? '';
$answer = $_POST['answer'] ?? null;

if ($answer !== null) {
    if ($answer == $correct_answers[$reto]) {
        $message = "¡Correcto! 🎉";
    } else {
        $message = "¡Intenta de nuevo! ❌";
    }
} else {
    $message = "Responde la pregunta.";
}
?>
