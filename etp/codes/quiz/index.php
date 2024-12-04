<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $correctAnswers = ['A', 'B', 'C', 'D', 'A'];
    $userAnswers = [
        $_POST['q1'] ?? '',
        $_POST['q2'] ?? '',
        $_POST['q3'] ?? '',
        $_POST['q4'] ?? '',
        $_POST['q5'] ?? ''
    ];
    $score = 0;
    foreach ($correctAnswers as $index => $answer) {
        if ($userAnswers[$index] === $answer) {
            $score++;
        }
    }
    echo "Your Score: $score / 5";
}
?>

<form method="POST">
    <p>Q1: What is ...?</p>
    <input type="radio" name="q1" value="A"> A
    <input type="radio" name="q1" value="B"> B
    <input type="radio" name="q1" value="C"> C
    <input type="radio" name="q1" value="D"> D
    <!-- Repeat for other questions -->
    <button type="submit">Submit</button>
</form>
