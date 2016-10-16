<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<?php

$questions = [
    [
        "question" => 'De quelle couleur est le cheval blanc d\'Henri ?',
        "reponse" => 'blanc'
    ], [
        "question" => 'Combien y a t il de 7 nains ?',
        "reponse" => 7
    ], [
        "question" => 'Combien y a t il de 40 voleurs ?',
    ]
];

$pageId = isset($_GET['pageId']) ? intval($_GET['pageId']) : 0;

$nextPageId = $pageId + 1;

if ($pageId >= count($questions) ) {
    echo "<h1>Terminé</h1>";
} else {

    $currentQuestion = $questions[$pageId];

    echo "<h1>" . $currentQuestion['question'] . "</h1>";

    echo "<a href=\"question_v0.php?pageId=$nextPageId\">Question suivante</a>";
}

?>

</body>
</html>
