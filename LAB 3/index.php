<?php

$json = '[
    {
        "question": "What does PHP stand for?",
        "options": [
            "Personal Home Page",
            "PHP: Hypertext Preprocessor",
            "Private Home Page",
            "Public Hypertext Processor"
        ]
    },
    {
        "question": "Which symbol is used to declare a variable in PHP?",
        "options": [
            "#",
            "$",
            "@",
            "&"
        ]
    },
    {
        "question": "Which tag is used to write PHP code?",
        "options": [
            "<php>",
            "\u003c?php ?\u003e",
            "<script>",
            "<code>"
        ]
    },
    {
        "question": "Which function is used to print output in PHP?",
        "options": [
            "print()",
            "echo",
            "write()",
            "display()"
        ]
    },
    {
        "question": "Which operator is used for string concatenation in PHP?",
        "options": [
            "+",
            ".",
            "&",
            ","
        ]
    },
    {
        "question": "Which of the following is a PHP array?",
        "options": [
            "array(1, 2, 3)",
            "[1, 2, 3]",
            "{1, 2, 3}",
            "<1, 2, 3>"
        ]
    },
    {
        "question": "Which function returns the length of a string?",
        "options": [
            "length()",
            "strlen()",
            "strlength()",
            "count()"
        ]
    },
    {
        "question": "Which keyword is used to create a class in PHP?",
        "options": [
            "object",
            "class",
            "newclass",
            "create"
        ]
    },
    {
        "question": "Which operator compares both value and data type?",
        "options": [
            "==",
            "=",
            "===",
            "!="
        ]
    },
    {
        "question": "Which superglobal collects form data sent using POST?",
        "options": [
            "$_GET",
            "$_POST",
            "$_FORM",
            "$_DATA"
        ]
    }
]';

$questions = json_decode($json, true);

?>

<!DOCTYPE html>
<html>

<head>
    <title>PHP Quiz</title>
</head>

<body>

<h1>PHP Quiz</h1>

<form action="data.php" method="POST">

<?php

foreach ($questions as $index => $question) {

    echo "<h3>";
    echo ($index + 1) . ". " . $question["question"];
    echo "</h3>";

    foreach ($question["options"] as $optionIndex => $option) {

        echo '<input type="radio" ';
        echo 'name="answer[' . $index . ']" ';
        echo 'value="' . $optionIndex . '">';

        echo htmlspecialchars($option);

        echo "<br>";
    }

    echo "<br>";
}

?>

<input type="submit" value="Submit Quiz">

</form>

</body>

</html>