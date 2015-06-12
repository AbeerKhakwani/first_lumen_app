<html>
    <head>
        <link rel='stylesheet' type='text/css' href='css/style.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <title>Epi-Scrabble!</title>
    </head>
    <body>
        <div id="main">
            <h1>The Winner is <strong><?php echo $winner ?></strong>!</h1>
            <h4><?php echo $name."'s"?> word was: <strong><?php echo $result ?></strong> (<?php echo $points ?> points)</h4>
            <h4><?php echo $name2."'s"?> word was: <strong><?php echo $result2 ?></strong> (<?php echo $points2 ?> points)</h4>
            <br>
            <a href = "/">Play again?</a>
        </div>
    </body>
</html>
