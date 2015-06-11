<!doctype html>
<html>
    <head>
        <link rel='stylesheet' type='text/css' href='css/style.css'>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
        <title>Epi-Scrabble!</title>
    </head>
    <body>
        <div id="main">
            <h1>Let's Play Epi-Scrabble!</h1>
            <?php echo $one  . ' '. $two ?>
            <form action='/result'>
              Word:<br>
              <input type="text" name="word">
              <button type='submit' class='btn btn-info'>Score!</button>
           </form>
       </div>
    </body>
</html>
