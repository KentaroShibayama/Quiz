<?php
//require_once('common.php');
$question = [
    ["富士山の標高は何メートル？",3776],
    ["パンはパンでも食べられないパンは？",'フライパン'],
    ["下は大火事、上は洪水、それなんだ？",'風呂']
    ];

    $i = rand(0,count($question)-1);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>QuizGame Question</title>
    </head>
    <body>
        <h1>Question</h1>
        <?= $question[$i][0] ?>
        <form action="result.php">
            <input type="hidden" name="qid" value="<?= $i ?>">
            <input type="text" name="answer">
            <button>回答</button>
        </form>
    </body>
</html>
