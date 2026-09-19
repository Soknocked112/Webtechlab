<?php

$correctAnswers = [
    1, // Question 1
    1, // Question 2
    1, // Question 3
    1, // Question 4
    1, // Question 5
    0, // Question 6
    1, // Question 7
    1, // Question 8
    2, // Question 9
    1  // Question 10
];

$score = 0;

$userAnswers = $_POST["answer"] ?? [];

foreach ($correctAnswers as $questionNumber => $correctAnswer) {

    if (
        isset($userAnswers[$questionNumber]) &&
        $userAnswers[$questionNumber] == $correctAnswer
    ) {
        $score++;
    }
}

$totalQuestions = count($correctAnswers);

?>

<!DOCTYPE html>
<html>
<head>
    <title>Quiz Result</title>
</head>

<body>

<h1>Quiz Result</h1>

<p>
    Your score is:
    <b><?php echo $score; ?> / <?php echo $totalQuestions; ?></b>
</p>

<p>
    <?php
    if ($score >= 8) {
        echo "Excellent!";
    } elseif ($score >= 5) {
        echo "Good job!";
    } else {
        echo "Keep practicing!";
    }
    ?>
</p>

<a href="index.php">Try Again</a>

</body>
</html>